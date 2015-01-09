<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('PDM_Controller.php');
class State_error_std extends PDM_Controller{
	public function index(){
		$GpID =$this->session->userdata('GpID');
		$StdId=$this->session->userdata('UsPsCode');
		$sidebar = $this->load->model('PDM/m_activity');//โหลด model ของ avtivity sidebar
		if($GpID == '200066'){
			$data['nav'] = "";
		}
		else if($GpID == '200067'){ //นิสิต
			$data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
			$sidebar['Std_Sidebar'] = $this->m_activity->get_sidebar($GpID);
			$data['sidebar'] = $this->load->view('PDM/sidebar/v_sidebar_nisit',$sidebar,true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		}
		$this->load->model('PDM/m_state');
		$data['state'] = $this->m_state->get_state($StdId);
		$this->output('PDM/State/v_state_error',$data);		
	}
}
?>