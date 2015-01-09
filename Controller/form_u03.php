<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class form_u03 extends UMS_Controller{
	public function index(){
		// pass - id user-login()
		$stdId=$this->session->userdata('UsPsCode');
		$this->load->model('PDM/m_state');
		$state = $this->m_state->get_state($stdId);
		$GpID =$this->session->userdata('GpID');
		if($GpID == '200066'){
			$data['nav'] = "";
		}
		else if($GpID == '200067'){ //นิสิต
			$data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/Form/v_sidebar_form_nisit','',true);
		}
		else if($GpID == '200068'){//นักวิชาการศึกษา
			$data['nav'] = $this->load->view('PDM/v_edu_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/v_sidebar_form_edu','',true);
		}
		else if($GpID == '200070'){ //อาจารที่ปรึกษาโครงงาน
			$data['nav'] = $this->load->view('PDM/v_avs_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/v_sidebar_form_avs','',true);
		}
		else if($GpID == '200069'){ //รองคณยดี
			$data['nav'] = $this->load->view('PDM/v_asdn_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/v_sidebar_form_asdn','',true);
		}
		else if($GpID == '200070'){ //กรรมการ
			$data['nav'] = $this->load->view('PDM/v_chm_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/v_sidebar_form_chm','',true);
		}
		else if($GpID == '200072'){ //ประธานสาขา
			$data['nav'] = $this->load->view('PDM/v_bc_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/v_sidebar_form_bc','',true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		}
		$this->load->model('PDM/m_form_u03','pdm');
		$data['stuform'] = $this->pdm->select_data_statusform()->result();
		foreach($data['stuform'] as $stu){
			if($stu->proj_nameth == "สามารถยื่นสอบได้"){
				$stuid = $stu->proj_id;
			}
		}
		$data['showdata'] = $this->pdm->select_data_from($stuid,$stdId)->result();
		//print_r($data['showdata']);die;
		$Std_State = $state->result();
		if($Std_State[0]->std_status<1){
			$data['state'] = $this->m_state->get_state($stdId);
			$this->output('PDM/State/v_state_error',$data);
		}
		else if(($Std_State[0]->std_status<11) || ($Std_State[0]->std_status == NULL)){
			$data['state'] = $this->m_state->get_state($stdId);
			$this->output('PDM/State/v_state_error',$data);
		}
		else{
			$form = $data['showdata'];
		$form01_id = $form[0]->frm1_id;
		//print_r($form01_id);die;
		$data['advisor_data'] = $this->pdm->select_data_advisor($form01_id)->result();
		//print_r($data['advisor_data']);
			$this->output('PDM/Form/v_form_u-03',$data);
		}
		
	}
	public function getStatus(){
	$t=time();
		$idform = $_GET['id'];
		$date = Date("Y-m-d",$t);
		echo $date;
		$this->load->model('PDM/m_form_u03','pdm');
		$data['stuform'] = $this->pdm->select_data_statusform()->result();
		foreach($data['stuform'] as $stu){
			if($stu->proj_nameth == "รอผลอนุมัติสอบ"){
				$stuid = $stu->proj_id;
				//echo $stuid;
			}
		}
		$this->pdm->insentProject($stuid,$idform);
		$this->pdm->sentProject($idform,$date);
		redirect('PDM/follow_project_std');
	}
}
?>