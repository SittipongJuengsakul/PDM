<?php
class M_form_u03 extends CI_Model {
	//======================================================================
	//------ model of profile ----
	//======================================================================
	// select_naem id
	public function select_userId($idUser)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_student WHERE std_id =".$idUser;
		$query = $this->PDM->query($sql);
		return $query;
	}
	//select major // faculty Zhcn-select
	public function select_data_faculty(){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_faculty";
		$query = $this->PDM->query($sql);
		return $query;
	}
    public function select_data_maj($ID)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_major WHERE fac_id = ?";
		$query = $this->PDM->query($sql,array($ID));
		return $query;
	}
	// select faculty and major
	public function select_data_major($id)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_student
		LEFT JOIN se_prjdocdb.pdm_major ON pdm_student.maj_id = pdm_major.maj_id
		WHERE pdm_student.std_id = ".$id;
		$query = $this->PDM->query($sql);
		return $query;
	}
	public function select_data_fac($id)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_student
		LEFT JOIN se_prjdocdb.pdm_faculty ON pdm_student.fac_id = pdm_faculty.fac_id
		WHERE pdm_student.std_id = ".$id;
		$query = $this->PDM->query($sql);
		return $query;
	}
	//select data type
	public function selsct_data_type($id){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_student
		LEFT JOIN se_prjdocdb.pdm_stdtype ON pdm_student.stdt_id = pdm_stdtype.stdt_id
		WHERE pdm_student.std_id = ".$id;
		$query = $this->PDM->query($sql);
		return $query;
	}
	public function select_data_type(){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_stdtype";
		$query = $this->PDM->query($sql);
		return $query;
	}
	 public function select_data_std()
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_stdtype";
		$query = $this->PDM->query($sql);
		return $query;
	}
	 public function select_data_advisor($form01_id)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM `pdm_advisor`
		LEFT JOIN  `pdm_personalposition` ON `pdm_advisor`.`psp_id` =  `pdm_personalposition`.`psp_id`
		LEFT JOIN  `pdm_personel` ON `pdm_personalposition`.`pers_id` =   `pdm_personel`.`pers_id`
		LEFT JOIN `pdm_prefix` ON `pdm_prefix`.`pref_id` = `pdm_personel`.`pref_id`
		WHERE `pdm_advisor`.`frm1_id` =".$form01_id;
		$query = $this->PDM->query($sql);
		return $query;
	}
	//insert profile normal ad user
	public function insert_data_form($iduser,$fname,$lname,$facultyname,$majorname,$status,$email,$phone,$fnameEn,$lnameEn,$prefix)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "UPDATE se_prjdocdb.pdm_student
				SET std_email = '$email',
					std_tel = '$phone',
					std_majorId = '$majorname',
					std_facId = '$facultyname',
					std_type = '$status'
				WHERE pdm_student.std_id =".$iduser;
		$query = $this->PDM->query($sql);
		return $query;
	}
	// edit form 01
	public function edit_form($id,$fname,$lname,$fac,$maj,$stt,$email,$tel){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "UPDATE `se_prjdocdb`.`pdm_student`
		SET `std_fname` = '$fname', `std_lname` = '$lname', `std_email` = '$email', `std_tel` = '$tel', `maj_id` = '$maj', `fac_id` = '$fac', `stdt_id` = '$stt' WHERE `pdm_student`.`std_id` =".$id;
		$query = $this->PDM->query($sql);
		return $query;
	}
	public function insert_edit_form($id,$fname,$lname,$fac,$maj,$stt,$email,$tel){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "UPDATE `se_prjdocdb`.`pdm_student`
		SET `std_fname` = '$fname', `std_lname` = '$lname', `std_status` = '1', `std_email` = '$email', `std_tel` = '$tel', `maj_id` = '$maj', `fac_id` = '$fac', `stdt_id` = '$stt' WHERE `pdm_student`.`std_id` =".$id;
		$query = $this->PDM->query($sql);
		return $query;
	}
	//====================================================================//
	//----- model of u-03 ----
	//====================================================================//
	// Select Index Active Data form u03
	public function select_data_from($stuid,$stdId)
	{
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
				LEFT JOIN se_prjdocdb.pdm_projectstatus ON pdm_formu01.proj_id = pdm_projectstatus.proj_id
				LEFT JOIN se_prjdocdb.pdm_advisor ON pdm_formu01.frm1_id = pdm_advisor.frm1_id
				LEFT JOIN se_prjdocdb.pdm_personalposition ON pdm_advisor.psp_id = pdm_personalposition.psp_id
				LEFT JOIN se_prjdocdb.pdm_personel ON pdm_personalposition.pers_id = pdm_personel.pers_id
				LEFT JOIN se_prjdocdb.pdm_prefix ON pdm_personel.pref_id = pdm_prefix.pref_id
				LEFT JOIN se_prjdocdb.pdm_student ON pdm_formu01.std_id = pdm_student.std_id
				WHERE pdm_formu01.std_id = ".$stdId;
		$query = $this->PDM->query($sql);
		return $query;
	}
	public function select_data_statusform(){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_projectstatus";
		$query = $this->PDM->query($sql);
		return $query;
	}
	//select Project user
	public function select_data_user($stdId){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
				WHERE std_id=".$stdId;
		$query = $this->PDM->query($sql);
		return $query;
	}
	//remove form of 01
	public function remove_form01($id){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "DELETE FROM se_prjdocdb.pdm_formu01 WHERE pdm_formu01.frm1_id =".$id;
		$query = $this->PDM->query($sql);
		return $query;
	}
	public function remove_form_advisor($id){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "DELETE FROM se_prjdocdb.pdm_advisor WHERE pdm_advisor.frm1_id =".$id;
		$query = $this->PDM->query($sql);
		return $query;
	}
	//INSERT DATA SENT
	public function insert_sent($stdId,$Date_prj,$Time_prj,$Sta_prj,$Hts_prj){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "INSERT INTO `se_prjdocdb`.`pdm_formu03` (`std_id`, `form_dateexam`, `form_timeexam`, `form_locationexam`, `form_roomexam`)
		VALUES ('$stdId', '$Date_prj', '$Time_prj', '$Sta_prj', '$Hts_prj')";
		$query = $this->PDM->query($sql);
		return $query;
	}
	function sentProject($idform,$date){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "INSERT INTO se_prjdocdb.pdm_formu03 (frm1_id,frm3_date) VALUES ($idform,$date)";
		$query = $this->PDM->query($sql);
		return $query;
	}
	function select_post($formId){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu03
			LEFT JOIN se_prjdocdb.pdm_projectstatus ON pdm_projectstatus.proj_id = pdm_formu03.frm3_status
			WHERE pdm_formu03.frm1_id=".$formId;
		$query = $this->PDM->query($sql);
		return $query;
	}
	function insentProject($stuid,$stdId){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "UPDATE `se_prjdocdb`.`pdm_formu01` SET `proj_id` = '$stuid' WHERE `pdm_formu01`.`frm1_id` =".$stdId;
		$query = $this->PDM->query($sql);
		return $query;
	}
}
?>
