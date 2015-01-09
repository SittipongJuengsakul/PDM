<?php
class M_state extends CI_Model{
function get_state($StdID){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT pdm_student.std_status  FROM se_prjdocdb.pdm_student
				WHERE std_id = $StdID";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function test_std($StdID){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT pdm_student.std_status  FROM se_prjdocdb.pdm_student
				WHERE std_id = $StdID";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function test_per($PerID){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM `pdm_personel`  WHERE `pers_id` = $PerID";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function test_psp($PerID,$pst_id){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM `pdm_personalposition` WHERE `pers_id` = $PerID AND `pst_id` = $pst_id";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function add_std($StdID){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "INSERT INTO `se_prjdocdb`.`pdm_student`
				(`std_id`, `pref_id`, `std_status`, `std_fname`, `std_lname`, `std_fnameen`, `std_lnameen`
				, `std_email`, `std_tel`, `maj_id`, `fac_id`, `stdt_id`)
				VALUES ('$StdID', NULL, 0, '', '', '', '', '', '', NULL, NULL, NULL);";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function add_person($per_id){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "INSERT INTO `se_prjdocdb`.`pdm_personel`
		(`pers_id`, `pref_id`, `pers_fname`, `pers_lname`, `pers_fnameen`, `pers_lnameen`, `pers_email`, `pers_tel`, `maj_id`, `fac_id`)
		VALUES ('$per_id', NULL, '', '', '', '', '', '', NULL, NULL);";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function add_psp($per_id,$pst_id){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "INSERT INTO `se_prjdocdb`.`pdm_personalposition`
		(`pers_id`, `pst_id`)
		VALUES ('$per_id', '$pst_id');";
		$result = $this->PDM->query($sql);
		return $result;
	}
}
?>
