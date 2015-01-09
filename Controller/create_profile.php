<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Create_profile extends UMS_Controller{
	public function index(){
		$GpID =$this->session->userdata('GpID');
		$this->load->model('PDM/m_calendar');
		$data['vision'] = $this->m_calendar->show();
		if($GpID == '200066'){
			$data['nav'] = "";
		}
		else if($GpID == '200067'){ //นิสิต
			$data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
		}
		else if($GpID == '200068'){//นักวิชาการศึกษา
			$data['nav'] = $this->load->view('PDM/v_edu_nav','',true);
		}
		else if($GpID == '200070'){ //อาจารที่ปรึกษาโครงงาน
			$data['nav'] = $this->load->view('PDM/v_avs_nav','',true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		}
		$idUser = $this->session->userdata('UsPsCode');
		$this->output('PDM/Form/v_makeprofile',$data);
	}
}