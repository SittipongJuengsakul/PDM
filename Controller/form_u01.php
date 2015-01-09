<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Form_u01 extends UMS_Controller{
    public function index(){
        $stdId=$this->session->userdata('UsPsCode');
        $GpID =$this->session->userdata('GpID');
        $this->load->model('PDM/m_state');
        $state = $this->m_state->get_state($stdId);
        if($GpID == '200067'){ //นิสิต
            $data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
            $data['sidebar'] = $this->load->view('PDM/sidebar/Form/v_sidebar_form_nisit','',true);
        }
        else{
            $data['nav'] = "ไม่พบประเภท $GpID";
            $data['sidebar'] = "";
        }
            $this->load->model('PDM/m_form_u01','form');
            $form_data = $this->form->select_idForm($stdId);
            $check_data = $form_data->num_rows();
            $form_data = $form_data->result();
			//print_r($form_data);die;
            $Std_State = $state->result();
        if($Std_State[0]->std_status<1){
            $data['state'] = $this->m_state->get_state($stdId);
            $this->output('PDM/State/v_state_error',$data);
        }
        else{
            if($check_data!=0){
			$this->load->model('PDM/m_form_u01');
			$data['checkStatus'] = $this->m_form_u01->select_check($stdId);
			$chk = $data['checkStatus']->result();
			//print_r($chk);die;
				if(($chk[0]->proj_id==20) || ($chk[0]->proj_id==2)){
					$this->load->model('PDM/m_form_u01','form');
					$data['advisor'] = $this->form->select_advisor()->result();
					$this->output('PDM/Form/v_form_u-01',$data);
					return 0;
				}
				$this->load->model('PDM/m_follow_std','pdm');
				$data['form_prjAll'] = $this->pdm->select_project_all($stdId)->result();
				$this->output('PDM/Form/v_form_u-01_error',$data);
				return 0;
            }
            $this->load->model('PDM/m_form_u01','form');
            $data['advisor'] = $this->form->select_advisor()->result();
            $this->output('PDM/Form/v_form_u-01',$data);
        }
}
    public function insert_data(){
	$idUser = $this->session->userdata('UsPsCode');
	$che = "FALSE";
	$this->load->model('PDM/m_form_u01','pdm');
	$data['check_data'] = $this->pdm->select_check($idUser)->result();
	foreach($data['check_data'] as $frm3){
		$idform = $frm3->frm1_id;
		$this->pdm->update_ceck($idform,$che);
	}
        $t=time();
        $maxcoavs = $this->input->post('coavsmaxline');
        $stdId=$this->session->userdata('UsPsCode');
        $nameTHprj = $this->input->post('nameTH');
        $nameENprj = $this->input->post('nameEN');
        $prjId=$this->input->post('prj_id');
        $prjsubdate=date("Y-m-d",$t);
        $prjimport = $this->input->post('importance');
        $prjpropose = $this->input->post('propose');
        $prjtheory = $this->input->post('theory');
        $prjtime = $this->input->post('time');
        $prjplan = $this->input->post('plantask');
        $prjscope = $this->input->post('planscope');
        $prjhard = $this->input->post('hardware');
        $prjsoft = $this->input->post('software');
        $prjfit = $this->input->post('banefit');
        $prjdefin = $this->input->post('definition');
        $prjadv = $this->input->post('nameadv');
        $this->load->model('PDM/m_form_u01');
        $this->m_form_u01->insert_project($nameTHprj,$nameENprj,$prjsubdate,$prjimport,$prjpropose,$prjtheory,$prjtime,$prjplan,$prjscope,$prjhard,$prjsoft,$prjfit,$prjdefin,$stdId,$che);
        $data['form01'] = $this->m_form_u01->select_id($stdId)->result();
        foreach($data['form01'] as $u01){
        $id = $u01->frm1_id;
        }
        $this->m_form_u01->insert_advisor($id,$prjadv);
        if($maxcoavs>0){
        	for($c=1;$c<=$maxcoavs;$c++){
        		$numcoadv = "ncoavs".$i;
        		$coadv = $this->input->post($numcoadv);
        		$this->m_form_u01->insert_coadvisor($id,$coadv);
        	}
        }
        $this->m_form_u01->update_status($stdId);
        redirect('/PDM/follow_project_std');
    }
}
?>