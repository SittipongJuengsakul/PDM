<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Follow_project_std extends UMS_Controller{
	public function index(){
		$GpID =$this->session->userdata('GpID');
		$stdId=$this->session->userdata('UsPsCode');
		if($GpID == '200066'){
			$data['nav'] = "";
		}
		else if($GpID == '200067'){ //นิสิต
			$data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/Follow/v_sidebar_follow_std',$data,true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		}
		//echo $stdId;die;
		$this->load->model('PDM/m_follow_std','pdm');
		$data['form_prjAll'] = $this->pdm->select_project_all($stdId)->result();
		//print_r($data['form_prjAll']);
		$this->output('PDM/Follow/v_project_follow.php',$data);
	}
}
?>
