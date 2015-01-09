<?php
class M_activity extends CI_Model{
	function get_sidebar($GpID){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_activity
			JOIN se_prjdocdb.pdm_calendar ON pdm_calendar.cal_id = pdm_activity.cal_id
			WHERE gp_id =$GpID";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function get_activity($cal_id){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT *
		FROM `pdm_sendworks`
		JOIN  `pdm_works` ON `pdm_works`.`wrk_id` =  `pdm_sendworks`.`wrk_id`
		JOIN  `pdm_calendar` ON `pdm_sendworks`.`cal_id` = `pdm_calendar`.`cal_id`
		WHERE `pdm_sendworks`.`cal_id`= $cal_id";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function get_calactivity($cal_id){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT `pdm_calendar`.`cal_name`
		FROM `pdm_calendar`
		WHERE `pdm_calendar`.`cal_id`= $cal_id";
		$result = $this->PDM->query($sql);
		return $result;
}
}
?>
