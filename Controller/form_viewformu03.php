<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('PDM_Controller.php');
class Form_viewformu03 extends PDM_Controller{
	public function index(){
		$GpID =$this->session->userdata('GpID');
		$stdId=$this->session->userdata('UsPsCode');
		$this->load->model('PDM/m_state');
		$state = $this->m_state->get_state($stdId);
		if($GpID == '200067'){ //นิสิต
			$data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/Progess/v_sidebar_progess_nisit','',true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		}
		$this->load->model('PDM/m_select_from03','pdm');
		$stdId=$this->session->userdata('UsPsCode');
		$data['showStudent'] = $this->pdm->select_student($stdId);
		$data['showAdvisor'] = $this->pdm->select_advisor($stdId);
		$data['showAssociateDean'] = $this->pdm->select_associateDean($stdId);
		$data['showBranchChief'] = $this->pdm->select_branchChief($stdId);
		$data['showChairman'] = $this->pdm->select_chairman($stdId);
		$data['showDirector'] = $this->pdm->select_director($stdId);
		//print_r($data);
		$Std_State = $state->result();
		if($Std_State[0]->std_status<5){
			$data['state'] = $this->m_state->get_state($stdId);
			$this->output('PDM/State/v_state_error',$data);
		}
		else{
			$this->output('PDM/Form/v_select_from03',$data);
		}
	}
}
?>