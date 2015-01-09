<?php
class M_upload_document_full extends CI_Model {
	function select_namePrj($stdId){
	$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
				WHERE pdm_formu01.std_id = '$stdId' AND proj_id = 300";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function select_Upload($stdId){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM pdm_fileupload
		LEFT JOIN se_prjdocdb.pdm_formu01 ON pdm_formu01.frm1_id = pdm_fileupload.frm1_id
		LEFT JOIN se_prjdocdb.pdm_projectstatus ON pdm_projectstatus.proj_id = pdm_formu01.proj_id
		WHERE pdm_formu01.std_id = '$stdId'
		ORDER BY upl_subdate DESC";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function insertFile($idform,$nameFile,$strType,$text,$date,$idfile){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "INSERT INTO `se_prjdocdb`.`pdm_fileupload` (`frm1_id`, `upl_subdate`, `upl_namefile`, `upl_type`, `upl_text`, `upl_nameId`) VALUES ('$idform', '$date', '$nameFile', '$strType', '$text', '$idfile')";
		$result = $this->PDM->query($sql);
		return $result;
	}
	function UpdateForm($idform){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "UPDATE `se_prjdocdb`.`pdm_formu01` SET `proj_id` = '999' WHERE `pdm_formu01`.`frm1_id` =".$idform;
		$result = $this->PDM->query($sql);
		return $result;
	}
	function updateFile($idform){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "UPDATE `se_prjdocdb`.`pdm_formu01` SET `proj_id` = '300' WHERE `pdm_formu01`.`frm1_id` =".$idform;
		$result = $this->PDM->query($sql);
		return $result;
	}
	function getdataUpload($idform){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_fileupload WHERE pdm_fileupload.frm1_id =".$idform;
		$result = $this->PDM->query($sql);
		return $result;
	}
	function insertFileEdit($idform,$nameFile,$strType,$text,$date,$idfile){
		$this->PDM = $this->load->database('prj',TRUE);
		$sql = "UPDATE `se_prjdocdb`.`pdm_fileupload` SET `upl_subdate` = '$date', `upl_namefile` = '$nameFile', `upl_type` = '$strType', `upl_text` = '$text', `upl_nameId` = '$idfile' WHERE `pdm_fileupload`.`frm1_id` =".$idform;
		$result = $this->PDM->query($sql);
		return $result;
	}
}
?>
