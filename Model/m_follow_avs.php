<?php
class M_follow_avs extends CI_Model {

	function get_form($stdId){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_progess
			LEFT JOIN se_prjdocdb.pdm_formu01 ON pdm_formu01.frm1_id = pdm_progess.form_id
			LEFT JOIN se_prjdocdb.pdm_advisor ON pdm_advisor.frm1_id = pdm_formu01.frm1_id
			LEFT JOIN se_prjdocdb.pdm_personalposition ON pdm_personalposition.psp_id = pdm_advisor.psp_id
			LEFT JOIN se_prjdocdb.pdm_personel ON pdm_personel.pers_id = pdm_personalposition.pers_id
			LEFT JOIN se_prjdocdb.pdm_student ON pdm_student.std_id = pdm_formu01.std_id
			WHERE pdm_formu01.frm1_check = 'TRUE' AND pdm_personel.pers_id = '$stdId' AND pdm_progess.pgs_check='TRUE'
			ORDER BY pdm_formu01.frm1_subdate DESC";
		$query = $this->PDM->query($sql);
		return $query;
	}
	
	function updateDataCheck($id){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "UPDATE `se_prjdocdb`.`pdm_progess` SET `pgs_check` = 'FALSE' WHERE `pdm_progess`.`pgs_id` =".$id;
		$query = $this->PDM->query($sql);
		return $query;
	}
}
?>
