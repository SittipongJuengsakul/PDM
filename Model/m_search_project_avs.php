<?php
class M_search_project_avs extends CI_Model{
function show($stdId,$year){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
		LEFT JOIN se_prjdocdb.pdm_projectstatus ON pdm_projectstatus.proj_id = pdm_formu01.proj_id
		LEFT JOIN se_prjdocdb.pdm_student ON pdm_student.std_id = pdm_formu01.std_id
		LEFT JOIN se_prjdocdb.pdm_advisor ON pdm_advisor.frm1_id = pdm_formu01.frm1_id
		LEFT JOIN se_prjdocdb.pdm_personalposition ON pdm_personalposition.psp_id = pdm_advisor.psp_id
		LEFT JOIN se_prjdocdb.pdm_personel ON pdm_personel.pers_id = pdm_personalposition.pers_id
		WHERE year(pdm_formu01.frm1_subdate) = '$year' and pdm_personel.pers_id = '$stdId' ORDER BY pdm_formu01.frm1_subdate DESC";
		$result = $this->PDM->query($sql);
		return $result;
	}
function show_all($stdId){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
		LEFT JOIN se_prjdocdb.pdm_projectstatus ON pdm_projectstatus.proj_id = pdm_formu01.proj_id
		LEFT JOIN se_prjdocdb.pdm_student ON pdm_student.std_id = pdm_formu01.std_id
		LEFT JOIN se_prjdocdb.pdm_advisor ON pdm_advisor.frm1_id = pdm_formu01.frm1_id
		LEFT JOIN se_prjdocdb.pdm_personalposition ON pdm_personalposition.psp_id = pdm_advisor.psp_id
		LEFT JOIN se_prjdocdb.pdm_personel ON pdm_personel.pers_id = pdm_personalposition.pers_id
		WHERE pdm_personel.pers_id = '$stdId' ORDER BY pdm_formu01.frm1_subdate DESC";
		$result = $this->PDM->query($sql);
		return $result;
	}
}
?>
