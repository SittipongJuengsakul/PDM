<?php
require('UMS_Controller.php');
class Follow_project_avs extends UMS_Controller{
	public function index(){
		$GpID =$this->session->userdata('GpID');
		$stdId=$this->session->userdata('UsPsCode');
		if($GpID == '200066'){
			$data['nav'] = "";
		}
		elseif($GpID == '200067'){ //นิสิต
			$data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
		}
		elseif($GpID == '200068'){//นักวิชาการศึกษา
			$data['nav'] = $this->load->view('PDM/v_edu_nav','',true);
		}
		elseif($GpID == '200070'){
			$data['nav'] = $this->load->view('PDM/v_avs_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/Follow/v_sidebar_follow_avs','',true);
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
		//echo $stdId;die;
		$this->load->model('PDM/m_follow_avs','pdm');
		$data['progress_prjAll'] = $this->pdm->get_form($stdId)->result();
		//print_r($data['progress_prjAll']);die;
		$this->output('PDM/Follow/v_project_follow_avs.php',$data);
	}
	function getId(){
		$pgs = $_GET['pgs'];
		$this->load->model('PDM/m_follow_avs','pdm');
		$this->pdm->updateDataCheck($pgs);
		redirect('PDM/follow_project_avs');
	}
}
?>
