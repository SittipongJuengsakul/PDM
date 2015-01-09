<?php
class M_search_of_university extends CI_Model{
function show_all($stdId){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
		LEFT JOIN se_prjdocdb.pdm_projectstatus ON pdm_projectstatus.proj_id = pdm_formu01.proj_id
		LEFT JOIN se_prjdocdb.pdm_advisor ON pdm_advisor.frm1_id = pdm_formu01.frm1_id
		LEFT JOIN se_prjdocdb.pdm_personalposition ON pdm_personalposition.psp_id = pdm_advisor.psp_id
		LEFT JOIN se_prjdocdb.pdm_personel ON pdm_personel.pers_id = pdm_personalposition.pers_id
		LEFT JOIN se_prjdocdb.pdm_student ON pdm_student.std_id = pdm_formu01.std_id
		LEFT JOIN se_prjdocdb.pdm_faculty ON pdm_faculty.fac_id = pdm_student.fac_id
		LEFT JOIN se_prjdocdb.pdm_major ON pdm_major.maj_id = pdm_student.maj_id
		ORDER BY pdm_formu01.frm1_subdate DESC";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function showfac(){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_faculty ORDER BY fac_faculty ASC";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function showmaj(){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_major ORDER BY maj_major ASC";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function showDataOfYear($stdId,$year){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
		LEFT JOIN se_prjdocdb.pdm_projectstatus ON pdm_projectstatus.proj_id = pdm_formu01.proj_id
		LEFT JOIN se_prjdocdb.pdm_advisor ON pdm_advisor.frm1_id = pdm_formu01.frm1_id
		LEFT JOIN se_prjdocdb.pdm_personalposition ON pdm_personalposition.psp_id = pdm_advisor.psp_id
		LEFT JOIN se_prjdocdb.pdm_personel ON pdm_personel.pers_id = pdm_personalposition.pers_id
		LEFT JOIN se_prjdocdb.pdm_student ON pdm_student.std_id = pdm_formu01.std_id 
		LEFT JOIN se_prjdocdb.pdm_faculty ON pdm_faculty.fac_id = pdm_student.fac_id
		LEFT JOIN se_prjdocdb.pdm_major ON pdm_major.maj_id = pdm_student.maj_id
		WHERE year(pdm_formu01.frm1_subdate) = '$year' ORDER BY pdm_formu01.frm1_subdate DESC";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function showDataOfFac($fac){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
		LEFT JOIN se_prjdocdb.pdm_projectstatus ON pdm_projectstatus.proj_id = pdm_formu01.proj_id
		LEFT JOIN se_prjdocdb.pdm_advisor ON pdm_advisor.frm1_id = pdm_formu01.frm1_id
		LEFT JOIN se_prjdocdb.pdm_personalposition ON pdm_personalposition.psp_id = pdm_advisor.psp_id
		LEFT JOIN se_prjdocdb.pdm_personel ON pdm_personel.pers_id = pdm_personalposition.pers_id
		LEFT JOIN se_prjdocdb.pdm_student ON pdm_student.std_id = pdm_formu01.std_id
		LEFT JOIN se_prjdocdb.pdm_faculty ON pdm_faculty.fac_id = pdm_student.fac_id
		LEFT JOIN se_prjdocdb.pdm_major ON pdm_major.maj_id = pdm_student.maj_id
		WHERE pdm_student.fac_id ='$fac' ORDER BY pdm_formu01.frm1_subdate DESC";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function showDataOfMaj($maj){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
		LEFT JOIN se_prjdocdb.pdm_projectstatus ON pdm_projectstatus.proj_id = pdm_formu01.proj_id
		LEFT JOIN se_prjdocdb.pdm_advisor ON pdm_advisor.frm1_id = pdm_formu01.frm1_id
		LEFT JOIN se_prjdocdb.pdm_personalposition ON pdm_personalposition.psp_id = pdm_advisor.psp_id
		LEFT JOIN se_prjdocdb.pdm_personel ON pdm_personel.pers_id = pdm_personalposition.pers_id
		LEFT JOIN se_prjdocdb.pdm_student ON pdm_student.std_id = pdm_formu01.std_id
		LEFT JOIN se_prjdocdb.pdm_faculty ON pdm_faculty.fac_id = pdm_student.fac_id
		LEFT JOIN se_prjdocdb.pdm_major ON pdm_major.maj_id = pdm_student.maj_id
		WHERE pdm_student.maj_id = '$maj' = '$maj' ORDER BY pdm_formu01.frm1_subdate DESC";
		$result = $this->PDM->query($sql);
		return $result;
	}
}
?>
