<?php
class M_follow_std extends CI_Model {
	//======================================================================
	//------ model of follow ----
	//======================================================================
	public function select_project_all($stdId){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
			LEFT JOIN se_prjdocdb.pdm_projectstatus ON pdm_formu01.proj_id = pdm_projectstatus.proj_id
			LEFT JOIN se_prjdocdb.pdm_advisor ON pdm_formu01.frm1_id = pdm_advisor.frm1_id
			LEFT JOIN se_prjdocdb.pdm_personalposition ON pdm_advisor.psp_id = pdm_personalposition.psp_id
			LEFT JOIN se_prjdocdb.pdm_personel ON pdm_personalposition.pers_id = pdm_personel.pers_id
			WHERE std_id='$stdId' AND frm1_check = 'TRUE'
			ORDER BY frm1_subdate DESC
			LIMIT 5";
		$query = $this->PDM->query($sql);
		return $query;
	}
	public function loadMSN($stdId){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql ="SELECT * FROM pdm_progess
			LEFT JOIN se_prjdocdb.pdm_formu01 ON pdm_progess.form_id = pdm_formu01.frm1_id
			WHERE pdm_formu01.std_id='$stdId' AND pdm_formu01.frm1_check = 'TRUE'";
		$query = $this->PDM->query($sql);
		return $query;
	}
}
?>
