<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('PDM_Controller.php');
class Progess_project_std extends PDM_Controller{
    public function index(){
        $GpID =$this->session->userdata('GpID');
        $stdId = $this->session->userdata('UsPsCode');
        if($GpID == '200067'){ //นิสิต
            $data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
            $data['sidebar'] = $this->load->view('PDM/sidebar/Progess/v_sidebar_progess_nisit','',true);
        }
        $this->load->model('PDM/m_state');
        $state = $this->m_state->get_state($stdId);
        $Std_State = $state->result();
        if(($Std_State[0]->std_status<10) || ($Std_State[0]->std_status == NULL)){
            $data['state'] = $this->m_state->get_state($stdId);
            $this->output('PDM/State/v_state_error',$data);
            return 0;
        }    
        $this->load->model('PDM/m_progess_std');
        $this->load->model('PDM/m_form_u01','form');
        $data['form01_data'] = $this->form->select_check($stdId)->result();
        //print_r($data['form01_data']);die;
        $data['progess_data'] = $this->m_progess_std->get_progess_data($stdId)->result();
        $data['progess_data_status'] = $this->m_progess_std->get_status_data($stdId)->result();
        $this->output('PDM/Progess/v_progess_project_std.php',$data);
    }
    public function addProgress(){ // ajax เรียกฟังก์ชั่นนี้เพื่อแสดงหน้า เพิ่มความก้าวหน้า
        $GpID =$this->session->userdata('GpID');
        $stdId = $this->session->userdata('UsPsCode');
        $this->load->model('PDM/m_progess_std');
        $this->load->model('PDM/m_form_u01','form');
        $data['form01_data'] = $this->form->select_idForm($stdId)->result();
        $data['progess_data_status'] = $this->m_progess_std->get_status_data($stdId)->result();
        echo $this->load->view('PDM/Progess/v_add_progress_std',$data);
    }
    public function progess_add_detail(){
        $stdId = $this->session->userdata('UsPsCode');
        $form_id= $this->input->post('form_id');
        $ActivityResearch= $this->input->post('ActivityResearch');
        $ProblemResearch = $this->input->post('ProblemResearch');
        $FixProblemResearch = $this->input->post('FixProblemResearch');
        //checklist
        $LR = $this->input->post('LR');
        $SS = $this->input->post('SS');
        $CoD = $this->input->post('CoD');
        $DfD = $this->input->post('DfD');
        $ERD = $this->input->post('ERD');
        $DaD = $this->input->post('DaD');
        $StC = $this->input->post('StC');
        $Fc = $this->input->post('Fc');
        $UML = $this->input->post('UML');
        $DaS = $this->input->post('DaS');
        $MoD = $this->input->post('MoD');
        $StD = $this->input->post('StD');
        $ScD = $this->input->post('ScD');
        $TeC = $this->input->post('TeC');
        $etc = $this->input->post('etc');
        $this->load->model('PDM/m_progess_std','pdm');
        $this->pdm->insert_progess_first($ActivityResearch,$ProblemResearch,0,$FixProblemResearch,$form_id,$LR,$SS,$CoD,$DfD,$ERD,$DaD,$StC,$Fc,$UML,$DaS,$MoD,$StD,$ScD,$TeC);
        $this->pdm->update_status_std($stdId,11);
        redirect('PDM/progess_project_std');
    }
}
?>