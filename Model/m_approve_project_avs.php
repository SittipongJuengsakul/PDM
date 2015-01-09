<?php
class M_approve_project_avs extends CI_Model {
	public function select_data_form01($idUser){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
			LEFT JOIN se_prjdocdb.pdm_student ON pdm_formu01.std_id = pdm_student.std_id
			LEFT JOIN se_prjdocdb.pdm_advisor ON pdm_formu01.frm1_id = pdm_advisor.frm1_id
			WHERE pdm_advisor.psp_id =".$idUser;
		$query = $this->PDM->query($sql);
		return $query;
	}
	//updeta project status
	public function edit_proj_id($id,$form){
	$this->PDM = $this->load->database('prj',TRUE);
	$sql = "UPDATE se_prjdocdb.pdm_formu01 SET proj_id = ".$id." WHERE pdm_formu01.frm1_id = ".$form;
	$query = $this->PDM->query($sql);
	return $query;
	}
	public function edit_std_id($id){
	$this->PDM = $this->load->database('prj',TRUE);
	$sql = "UPDATE `se_prjdocdb`.`pdm_student` SET `std_status` = '20' WHERE `pdm_student`.`std_id` = ".$id;
	$query = $this->PDM->query($sql);
	return $query;
	}
	public function select_data_f01($idform){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
			WHERE pdm_formu01.frm1_id ='$idform' AND pdm_formu01.frm1_check = 'TRUE'";
		$query = $this->PDM->query($sql);
		return $query;
	}
	public function select_data_std($idform){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_student
			LEFT JOIN se_prjdocdb.pdm_formu01 ON pdm_student.std_id = pdm_formu01.std_id
			WHERE pdm_formu01.frm1_id =".$idform;
		$query = $this->PDM->query($sql);
		return $query;
	}
}
?>
