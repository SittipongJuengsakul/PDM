<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('PDM_Controller.php');
class Project_grade extends PDM_Controller{
	public function index(){
	$GpID =$this->session->userdata('GpID');
		$this->load->model('PDM/m_calendar');
		$data['vision'] = $this->m_calendar->show();
		if($GpID == '200066'){
			$data['nav'] = "";
		}
		else if($GpID == '200067'){ //นิสิต
			$data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/Follow/v_sidebar_follow_std','',true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		}
		$this->output('PDM/Follow/v_project_grade.php',$data);
	}
}
?>