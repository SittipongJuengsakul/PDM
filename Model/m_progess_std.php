<?php
class M_progess_std extends CI_Model{
	function insert_progess_first($ActivityResearch,$ProblemResearch,$pgs_status,$FixProblemResearch,$form_id,$LR,$SS,$CoD,$DfD,$ERD,$DaD,$StC,$Fc,$UML,$DaS,$MoD,$StD,$ScD,$TeC){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "INSERT INTO `se_prjdocdb`.`pdm_progess` 
		(`pgs_report`,`pgs_problem` , `pgs_fixproblem`, `pgs_status`,`form_id`,`pgs_literature`,`pgs_softwarespec`,`pgs_context`,`pgs_dataflow`,`pgs_check`)
		VALUES ('$ActivityResearch', '$ProblemResearch', '$FixProblemResearch', '$pgs_status','$form_id','$LR','$SS','$CoD','$DfD', 'TRUE');";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function update_status_std($stdId,$status){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "UPDATE `se_prjdocdb`.`pdm_student`
		SET `std_status` = '$status'
		WHERE `pdm_student`.`std_id` = $stdId;";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function get_progess_data($std_id){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM pdm_progess
			LEFT JOIN se_prjdocdb.pdm_formu01 ON pdm_progess.form_id = pdm_formu01.frm1_id
			WHERE pdm_formu01.std_id='$std_id' AND pdm_formu01.frm1_check = 'TRUE'";
		$result = $this->PDM->query($sql);
		return $result;
	}
	public function get_status_data($stdId){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM pdm_formu01 WHERE pdm_formu01.std_id='$stdId' AND pdm_formu01.frm1_check = 'TRUE'";
		$result = $this->PDM->query($sql);
		return $result;
	}
	public function select_status(){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM `pdm_formu01`";
		$result = $this->PDM->query($sql);
		return $result;
	}
}
?>
