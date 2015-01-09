<?php
class M_select_from03 extends CI_Model {
	public function select_student($stdId)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT pdm_student.std_id,pref_nameth,std_fname,std_lname,std_email,std_tel,stdt_type,fac_faculty,maj_major
		FROM pdm_student
		LEFT JOIN pdm_prefix ON pdm_prefix.pref_id = pdm_student.pref_id
		LEFT JOIN pdm_faculty ON pdm_faculty.fac_id = pdm_student.fac_id
		LEFT JOIN pdm_major ON pdm_major.maj_id = pdm_student.maj_id
		LEFT JOIN pdm_stdtype ON pdm_stdtype.stdt_id = pdm_student.stdt_id
		LEFT JOIN pdm_formu01 ON pdm_formu01.std_id = pdm_student.std_id
		WHERE pdm_student.std_id = ".$stdId."
		LIMIT 0,1";
		$result = $this->PDM->query($sql);
		return $result->result_array();
	}
	public function select_advisor($stdId)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT pref_nameth,pers_fname,pers_lname,frm1_nameth,frm1_nameen
		FROM pdm_personel
		LEFT JOIN pdm_prefix ON pdm_prefix.pref_id = pdm_personel.pref_id
		LEFT JOIN pdm_personalposition ON pdm_personalposition.pers_id = pdm_personel.pers_id
		LEFT JOIN pdm_position ON pdm_position.pst_id = pdm_personalposition.pst_id
		LEFT JOIN pdm_advisor ON pdm_advisor.psp_id = pdm_personalposition.psp_id
		LEFT JOIN pdm_formu01 ON pdm_formu01.frm1_id = pdm_advisor.frm1_id
		LEFT JOIN pdm_student ON pdm_student.std_id = pdm_formu01.std_id
		WHERE pdm_student.std_id = ".$stdId."
		LIMIT 0,1";
		$result = $this->PDM->query($sql);
		return $result->result_array();
	}
	public function select_associateDean($stdId)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT pref_nameth,pers_fname,pers_lname
		FROM pdm_personel
		LEFT JOIN pdm_prefix ON pdm_prefix.pref_id =  pdm_personel.pref_id
		LEFT JOIN pdm_personalposition ON pdm_personalposition.pers_id = pdm_personel.pers_id
		LEFT JOIN pdm_position ON pdm_position.pst_id = pdm_personalposition.pst_id
		LEFT JOIN pdm_associatedean ON pdm_associatedean.psp_id = pdm_personalposition.psp_id
		LEFT JOIN pdm_formu01 ON pdm_formu01.frm1_id = pdm_associatedean.frm1_id
		LEFT JOIN pdm_student ON pdm_student.std_id = pdm_formu01.std_id
		WHERE pdm_student.std_id = ".$stdId."
		LIMIT 0,1";
		$result = $this->PDM->query($sql);
		return $result->result_array();
	}
	public function select_branchChief($stdId)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT pref_nameth,pers_fname,pers_lname,frm1_subdate,frm1_assigndate
		FROM pdm_personel
		LEFT JOIN pdm_prefix ON pdm_prefix.pref_id = pdm_personel.pref_id
		LEFT JOIN pdm_personalposition ON pdm_personalposition.pers_id = pdm_personel.pers_id
		LEFT JOIN pdm_position ON pdm_position.pst_id = pdm_personalposition.pst_id
		LEFT JOIN pdm_branchchief ON pdm_branchchief.psp_id = pdm_personalposition.psp_id
		LEFT JOIN pdm_formu01 ON pdm_formu01.frm1_id = pdm_branchchief.frm1_id
		LEFT JOIN pdm_student ON pdm_student.std_id = pdm_formu01.std_id
		WHERE pdm_student.std_id = ".$stdId."
		LIMIT 0,1";
		$result = $this->PDM->query($sql);
		return $result->result_array();
	}
	public function select_chairman($stdId)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT pref_nameth,pers_fname,pers_lname
		FROM pdm_personel
		LEFT JOIN pdm_prefix ON pdm_prefix.pref_id = pdm_personel.pref_id
		LEFT JOIN pdm_personalposition ON pdm_personalposition.pers_id = pdm_personel.pers_id
		LEFT JOIN pdm_position ON pdm_position.pst_id = pdm_personalposition.pst_id
		LEFT JOIN pdm_chairman ON pdm_chairman.psp_id = pdm_personalposition.psp_id
		LEFT JOIN pdm_formu01 ON pdm_formu01.frm1_id = pdm_chairman.frm1_id
		LEFT JOIN pdm_student ON pdm_student.std_id = pdm_formu01.std_id
		WHERE pdm_student.std_id = ".$stdId."
		LIMIT 0,1";
		$result = $this->PDM->query($sql);
		return $result->result_array();
	}
	public function select_director($stdId)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT pref_nameth,pers_fname,pers_lname
		FROM pdm_personel
		LEFT JOIN pdm_prefix ON pdm_prefix.pref_id = pdm_personel.pref_id
		LEFT JOIN pdm_personalposition ON pdm_personalposition.pers_id = pdm_personel.pers_id
		LEFT JOIN pdm_position ON pdm_position.pst_id = pdm_personalposition.pst_id
		LEFT JOIN pdm_director ON pdm_director.psp_id = pdm_personalposition.psp_id
		LEFT JOIN pdm_formu01 ON pdm_formu01.frm1_id = pdm_director.frm1_id
		LEFT JOIN pdm_student ON pdm_student.std_id = pdm_formu01.std_id
		WHERE pdm_student.std_id = ".$stdId."
		LIMIT 0,1";
		$result = $this->PDM->query($sql);
		return $result->result_array();
	}
}
?>
