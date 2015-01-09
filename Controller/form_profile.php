<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Form_profile extends UMS_Controller{
	public function index(){
		$idUser = $this->session->userdata('UsPsCode');
		$GpID =$this->session->userdata('GpID');
		 //echo $idUser;
		if($GpID == '200067'){ //นิสิต
			$data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/Form/v_sidebar_form_nisit','',true);
			$this->load->model('PDM/m_form_u03','pdm');
			$data['dataUser'] = $this->pdm->select_userId($idUser)->result();
			$data['dataFac'] = $this->pdm->select_data_fac($idUser)->result();
			$data['dataMaj'] = $this->pdm->select_data_major($idUser)->result();
			$data['dataType'] = $this->pdm->selsct_data_type($idUser)->result();
			$data['Type'] = $this->pdm->select_data_type()->result();
			$data['data'] = $this->pdm->select_data_faculty()->result();
			echo $this->output('PDM/Form/v_profile_std',$data);
		}
		elseif($GpID == '200068'){//นักวิชาการศึกษา
			$data['nav'] = $this->load->view('PDM/v_edu_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/Form/v_sidebar_form_edu','',true);
			$this->load->model('PDM/m_form_person','pdm');
			$data['dataUser'] = $this->pdm->select_person($idUser)->result();
			echo $this->output('PDM/Form/v_profile_pers',$data);
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
		
}
	public function edit_persons(){
		$idUser = $this->session->userdata('UsPsCode');
		$this->load->model('PDM/m_form_person','pdm');
		$data['dataUser'] = $this->pdm->select_person($idUser)->result();
		$data['prefix'] = $this->pdm->select_prefix()->result();
		$data['fac'] = $this->pdm->select_fac()->result();
		$data['maj'] = $this->pdm->select_maj()->result();
		echo $this->load->view('PDM/Form/v_profile_edit_pers',$data);
	}
	public function submit_update_persons(){
		$idUser = $this->session->userdata('UsPsCode');
		$prefixth = $this->input->post('prefixth');
		$fNameth = $this->input->post('fnameth');
		$lNameth = $this->input->post('lnameth');
		$fNameen = $this->input->post('fnameen');
		$lNameen = $this->input->post('lnameen');
		$facu = $this->input->post('facu');
		$maju = $this->input->post('maju');
		$email = $this->input->post('email');
		$tel = $this->input->post('tel');
		$this->load->model('PDM/m_form_person','pdm');
		$this->pdm->update_person($idUser,$prefixth,$fNameth,$lNameth,$fNameen,$lNameen,$facu,$maju,$email,$tel);
		redirect('/PDM/form_profile');
	}
	public function getmaj(){
		$this->load->model('PDM/m_form_u03','pdm');
		$ID = $this->input->post('ID');
		$data['datamaj'] = $this->pdm->select_data_maj($ID)->result();
		echo "<option selected disabled value='0'>กรุณาเลือกสาขา</option>";
		foreach($data['datamaj'] as $value){
			echo"<option value='$value->maj_id'>$value->maj_major</option>";
		}
	}
	public function insert_data_form(){
		$idUser = $this->session->userdata('UsPsCode');
		$this->load->model('PDM/m_form_u03','pdm');
		$data['dataUser'] = $this->pdm->select_userId($idUser)->result();
		foreach($data['dataUser'] as $user):
			$iduser = $user->std_Id;
			$prefix = $user->std_PrefixId;
			$fname = $user->std_Fname;
			$lname = $user->std_Lname;
			$fnameEn = $user->std_FnameEn;
			$lnameEn = $user->std_LnameEn;
		endforeach;
		$facultyname = $this->input->post('chosen1');
		$majorname = $this->input->post('chosen2');
		$status = $this->input->post('status');
		$email = $this->input->post('Email');
		$phone = $this->input->post('Phone');
		//echo "fac = ".$facultyname;
		//echo "maj = ".$majorname;
		$count_user = $this->pdm->insert_data_form($iduser,$fname,$lname,$facultyname,$majorname,$status,$email,$phone,$fnameEn,$lnameEn,$prefix);
		if($count_user==""){
			echo "Error";
		}else{
			echo "บันทึกข้อมูลแล้ว";
		}
		redirect('/PDM/');
	}
	public function edit_form($id){
	$idUser = $this->session->userdata('UsPsCode');
		$idstd = $id;
		$fname = $_POST['fName'];
		$lname = $_POST['lName'];
		$fac = $_POST['faculty'];
		$maj = $_POST['major'];
		$stt = $_POST['status'];
		$email = $_POST['Email'];
		$tel = $_POST['tel'];
		$this->load->model('PDM/m_form_u03','pdm');
		$data['dataUser'] = $this->pdm->select_userId($idUser)->result();
		foreach($data['dataUser'] as $std){
			if($std->std_status == 0){
			$this->pdm->insert_edit_form($idstd,$fname,$lname,$fac,$maj,$stt,$email,$tel);
			}else{
			$this->pdm->edit_form($idstd,$fname,$lname,$fac,$maj,$stt,$email,$tel);
			}
		}
		redirect('/PDM/form_profile');
	}
}
