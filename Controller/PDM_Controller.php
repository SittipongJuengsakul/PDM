<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class PDM_Controller extends UMS_Controller{

	public function session_ums(){
		$data['GpID']=$this->session->userdata('GpID');
		$data['StID']=$this->session->userdata('StID');
		$data['UsPsCode']=$this->session->userdata('UsPsCode');
		$data['UsID']=$this->session->userdata('UsID');
		$data['UsLogin']=$this->session->userdata('UsLogin');
		$data['UsDpID']=$this->session->userdata('UsDpID');
		$data['UsName']=$this->session->userdata('UsName');
		$data['dpName']=$this->session->userdata('dpName');
		$data['UsWgID']=$this->session->userdata('UsWgID');
		$data['UsAdmin']=$this->session->userdata('UsAdmin');
		return $data;
	}
	public function show_nav($gpID){
	return "555";
	}
}
?>