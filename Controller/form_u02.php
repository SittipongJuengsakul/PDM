<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Form_u02 extends UMS_Controller{
	public function index(){
		// pass - id user-login()
		$stdId=$this->session->userdata('UsPsCode');
		$GpID =$this->session->userdata('GpID');
		if($GpID == '200070'){ //อาจารที่ปรึกษาโครงงาน
			$data['nav'] = $this->load->view('PDM/v_avs_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/Approve/v_sidebar_approve_avs','',true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		}
		$this->load->model('PDM/m_form_u02','u02');
		$data['form'] = $this->u02->select_data_form01($stdId)->result();
		$this->output('PDM/Form/v_form_u-02',$data);
	}
	public function load_view()
	{
	$stdId=$this->session->userdata('UsPsCode');
		$GpID =$this->session->userdata('GpID');
		if($GpID == '200070'){ //อาจารที่ปรึกษาโครงงาน
			$data['nav'] = $this->load->view('PDM/v_avs_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/Approve/v_sidebar_approve_avs','',true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		}
		$idform = $this->input->get('id');
		$this->load->model('PDM/m_form_u02','u02');
		$data['student'] = $this->u02->select_data_std($idform)->result();
		$data['form'] = $this->u02->select_data_f01($idform)->result();
		//print_r($data['form']);
		$this->output('PDM/Form/v_form_dialog_u02',$data);
	}
	public function insert_status($id){
		$id_form = $this->input->get('idform');
		$id_std = $this->input->get('idStd');
		//echo $id_form." ".$id;
		$this->load->model('PDM/m_form_u02','u02');
		$this->u02->edit_std_id($id_std);
		$this->u02->edit_proj_id($id,$id_form);
		redirect('PDM/form_u02');
	}
	public function insert_statusfalse($id,$idform){
		//echo $id;
		//echo $idform;
		$this->load->model('PDM/m_form_u02','u02');
		$this->u02->edit_proj_id($id,$idform);
		redirect('PDM/form_u02');
	}
}
?>