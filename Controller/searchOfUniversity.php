<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class SearchOfUniversity extends UMS_Controller{
	public function index(){
		$stdId=$this->session->userdata('UsPsCode');
		$GpID =$this->session->userdata('GpID');
		$this->load->helper('form');

			$this->load->model('PDM/m_search_of_university','pdm');
			$data['visionFac'] = $this->pdm->showfac()->result();
			$data['visionMaj'] = $this->pdm->showmaj()->result();

		$year=$this->input->get('year');
		$maj=$this->input->get('major');
		$fac=$this->input->get('faculty');
		if($fac!=0||$fac!=NULL){
		echo "Fac";
			$this->load->model('PDM/m_search_of_university','pdm');
			$data['vision'] = $this->pdm->showDataOfFac($fac)->result();
		}elseif($maj!=0||$maj!=NULL){
		echo "Maj";
			$this->load->model('PDM/m_search_of_university','pdm');
			$data['vision'] = $this->pdm->showDataOfMaj($maj)->result();
		}elseif($year!=0||$year!=NULL){
		echo "Year";
			$this->load->model('PDM/m_search_of_university','pdm');
			$data['vision'] = $this->pdm->showDataOfYear($stdId,$year)->result();
		}else{
		echo "All";
			$this->load->model('PDM/m_search_of_university','pdm');
			$data['vision'] = $this->pdm->show_all($stdId)->result();
		}
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
		//print_r($data['vision']);die;
		$this->output('PDM/Search/v_search_searchOfUniversity',$data);
	}
	public function resultView(){
		$stdId=$this->session->userdata('UsPsCode');
		$this->load->helper('form');
		$this->load->model('PDM/m_search_of_university','pdm');
			$this->load->model('PDM/m_search_of_university','pdm');
			$data['vision'] = $this->pdm->show_all($stdId)->result();
		//print_r($data['vision']);die;
		echo $this->load->view('PDM/Search/v_search_viewUnivwesity',$data);
	}
}
?>