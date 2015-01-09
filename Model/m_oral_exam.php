<?php
class M_oral_exam extends CI_Model{
	
	public function select_oral_exam(){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql =  "SELECT pdm_formu01.frm1_nameth,pdm_formu01.frm1_nameen,pdm_student.std_fname,pdm_student.std_lname,pdm_personel.pers_fname,pdm_personel.pers_lname
			    FROM se_prjdocdb.pdm_formu01
				JOIN se_prjdocdb.pdm_formu03 ON pdm_formu01.frm1_id = pdm_formu03.frm1_id
				JOIN se_prjdocdb.pdm_advisor ON pdm_formu01.frm1_id = pdm_advisor.frm1_id
				JOIN se_prjdocdb.pdm_student ON pdm_formu01.std_id = pdm_student.std_id
				JOIN se_prjdocdb.pdm_personel ON pdm_advisor.psp_id = pdm_personel.pers_id
				WHERE pdm_formu03.frm1_id = 11186";
				
		$query = $this->PDM->query($sql);
		return $query->result_array();


	}
		public function insert_oral_exam($time,$location,$room){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "UPDATE `se_prjdocdb`.`pdm_formu03` SET `frm3_date` = '$time', `frm3_location` = '$location', `frm3_room` = '$room'
				WHERE pdm_formu03.frm1_id = 11186";
				
		$query = $this->PDM->query($sql);
		return $query;
		
	}
}
?>