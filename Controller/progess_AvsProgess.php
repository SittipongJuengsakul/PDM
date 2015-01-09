<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('PDM_Controller.php');
class Progess_AvsProgess extends PDM_Controller{
	public function index(){
		$GpID =$this->session->userdata('GpID');
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
		$this->output('PDM/Progess/v_progess_avs',$data);
	}
}
?>