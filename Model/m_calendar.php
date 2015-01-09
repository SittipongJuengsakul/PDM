<?php
class M_calendar extends CI_Model{
function show($year){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_calendar 
				JOIN pdm_sendworks ON pdm_sendworks.cal_id = pdm_calendar.cal_id
				JOIN pdm_works ON pdm_works.wrk_id = pdm_sendworks.wrk_id
				WHERE pdm_calendar.cal_year = '$year' 
				GROUP BY pdm_works.wrk_id
				ORDER BY `pdm_calendar`.`cal_fdate` ASC";
		$result = $this->PDM->query($sql);
		return $result;
	}
function show1($id1){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_calendar WHERE pdm_calendar.cal_id = '$id1' ";
		$result = $this->PDM->query($sql);
		return $result;
	}
function show2(){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_calendar GROUP BY `pdm_calendar`.`cal_year` ORDER BY `pdm_calendar`.`cal_year` ASC";
		$result = $this->PDM->query($sql);
		return $result;
	}
function show3(){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT pdm_calendar.cal_id FROM se_prjdocdb.pdm_calendar ";
		$result = $this->PDM->query($sql);
		return $result;
	}
function showsent(){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM `pdm_works` ";
		$result = $this->PDM->query($sql);
		return $result;
	}
/*function showsent1(){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT pdm_works.wrk_name FROM `pdm_works`
				JOIN pdm_sendworks ON pdm_sendworks.wrk_id = pdm_works.wrk_id
				JOIN pdm_calendar ON pdm_calendar.cal_id = pdm_sendworks.cal_id
				WHERE pdm_calendar.cal_id = ";
		$result = $this->PDM->query($sql);
		return $result;
	}*/
function get_stateums(){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_stateums ";
		$result = $this->PDM->query($sql);
		return $result;
}
function get_stateums1($id){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT pdm_stateums.stums_name  FROM se_prjdocdb.pdm_calendar
		JOIN  pdm_activity ON pdm_activity.cal_id = pdm_calendar.cal_id
		JOIN pdm_stateums ON pdm_stateums.stums_state = pdm_activity.gp_id
		WHERE pdm_calendar.cal_id = '$id' ";
		$result = $this->PDM->query($sql);
		return $result;
}
function insert($name,$firstdate,$lastdate,$year,$detail){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "INSERT INTO se_prjdocdb.pdm_calendar(cal_name,cal_fdate,cal_ldate,cal_year,cal_activity) value ('$name','$firstdate','$lastdate','$year','$detail')";
		$result = $this->PDM->query($sql);
		return $result;
}
function insert_activity($activity,$idform){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "INSERT INTO se_prjdocdb.pdm_activity(cal_id,gp_id) value ('$idform','$activity')";
		$result = $this->PDM->query($sql);
		return $result;
}
function insert_sent($sent,$idform){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "INSERT INTO se_prjdocdb.pdm_sendworks(cal_id,wrk_id) value ('$idform','$sent')";
		$result = $this->PDM->query($sql);
		return $result;
}
function remove_calendar_id($id){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "DELETE FROM `se_prjdocdb`.`pdm_calendar` WHERE `pdm_calendar`.`cal_id` =".$id;
		$result = $this->PDM->query($sql);
		return $result;
	}
function remove_activity($id){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "DELETE FROM `se_prjdocdb`.`pdm_activity` WHERE `pdm_activity`.`cal_id` =".$id;
		$result = $this->PDM->query($sql);
		return $result;
	}
function edit($name,$firstdate,$lastdate,$year,$sent,$detail,$id){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "UPDATE `se_prjdocdb`.`pdm_calendar` SET `cal_year` = '$year', `cal_name` = '$name', `cal_fdate` = '$firstdate', `cal_ldate` = '$lastdate', `cal_sent` = '$sent', `cal_activity` = '$detail' WHERE `pdm_calendar`.`cal_id` =".$id;
		$result = $this->PDM->query($sql);
		return $result;
}
function edit_activity($activity,$id){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "UPDATE `se_prjdocdb`.`pdm_activity` SET gp_id= '$activity' WHERE pdm_activity.cal_id = '$id'  ";
		$result = $this->PDM->query($sql);
		return $result;
}
}
?>
