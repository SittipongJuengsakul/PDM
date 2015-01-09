<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Search_Project extends UMS_Controller{
	public function index(){
		$stdId=$this->session->userdata('UsPsCode');
		$GpID =$this->session->userdata('GpID');
		$this->load->helper('form');
		$year=$this->input->get('year');
		if($year==0||$year==null){
			$this->load->model('PDM/m_search_project','pdm');
			$data['vision'] = $this->pdm->show_all($stdId)->result();
			//$data['vision2'] = $this->pdm->show_all2($stdId)->result();
			//print_r($data['vision2']);die;
		}else{
			$this->load->model('PDM/m_search_project','pdm');
			$data['vision'] = $this->pdm->show($stdId,$year)->result();
			//$data['vision2'] = $this->pdm->show2($stdId)->result();
			//print_r($data['vision2']);die;
		}
		//print_r($data['vision']);die;
		$data['val'] = '';
		if($GpID == '200067'){ //นิสิต
			$data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
		}
		elseif($GpID == '200068'){//นักวิชาการศึกษา
			$data['nav'] = $this->load->view('PDM/v_edu_nav','',true);
		}
		elseif($GpID == '200070'){
			$data['nav'] = $this->load->view('PDM/v_avs_nav','',true);
		}
		elseif($GpID == '200069'){
			$data['nav'] = $this->load->view('PDM/v_asdn_nav','',true);
		}
		elseif($GpID == '200071'){
			$data['nav'] = $this->load->view('PDM/v_chm_nav','',true);
		}
		elseif($GpID == '200072'){
			$data['nav'] = $this->load->view('PDM/v_bc_nav','',true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		} 

		//print_r($data['vision']);
		$this->output('PDM/Search/v_search_project',$data);
	}
}
?>