<?php if ( ! defined('BASEPATH'))
exit('No direct script access allowed');
require('UMS_Controller.php');
class Upload_document_full extends UMS_Controller{
	public function index(){
		$stdId=$this->session->userdata('UsPsCode');
		$GpID =$this->session->userdata('GpID');
		 //echo $idUser;
		if($GpID == '200067'){ //นิสิต
			$data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
			$data['sidebar'] = $this->load->view('PDM/sidebar/Form/v_sidebar_form_nisit','',true);
		}
		elseif($GpID == '200068'){//นักวิชาการศึกษา
			$data['nav'] = $this->load->view('PDM/v_edu_nav','',true);
		}
		elseif($GpID == '200070'){
			$data['nav'] = $this->load->view('PDM/v_avs_nav','',true);
		}
		elseif($GpID == '200069'){
			$data['nav'] = $this->load->view('PDM/v_asdn_nav','',true);
		}
		elseif($GpID == '200071'){
			$data['nav'] = $this->load->view('PDM/v_chm_nav','',true);
		}
		elseif($GpID == '200072'){
			$data['nav'] = $this->load->view('PDM/v_bc_nav','',true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		}
		$this->load->model('PDM/m_upload_document_full','pdm');
		$data['namePrj'] = $this->pdm->select_namePrj($stdId)->result(); // select data from formu01 for check low data
		if($data['namePrj']){
			$data['low'] =1;
		}else{
			$data['low'] =0;
		}
		$data['Upload'] = $this->pdm->select_Upload($stdId)->result();
		//print_r($data['namePrj']);
		//print_r($data['Upload']);
		$this->output('PDM/Upload/v_upload_document_full',$data);
	}

	function getFile(){
		//die;
		$stdId=$this->session->userdata('UsPsCode');
		$idPrj = $_POST['ProjectName'];
		$nameFile = $_FILES['FileUpload']['name'];
		$text = $_POST['OtherText'];
		$date = Date("Y-m-d");
		$d = Date("Y");
		$year = $d+543;

		$dates = date("Ymd");
	//	$strType = strstr($nameFile, '.');
    	$strType = $_FILES['FileUpload']['type'];
		$newStr = preg_replace('#[^ก-๙a-zA-Z0-9-.]#u', '', $nameFile);
		//echo $newStr;
		//die;

	//	$pathd = "/var/www/html/sesite/uploadfile/PDM/2557/55660279/*";
	//	$pathd = "/var/www/html/sesite/uploadfile/PDM/2557/0/*";
	//	foreach(glob($pathd) as $file){
	//		unlink($file);
	//		} 
	//	die;

	if($_FILES['FileUpload']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
	{
		$path = "/var/www/html/sesite/uploadfile/PDM/".$year."/".$stdId;

		if (@mkdir("$path", 0777)) {
			if(move_uploaded_file($_FILES["FileUpload"]["tmp_name"],"$path/".$_FILES["FileUpload"]["name"]))
			{
			chmod("$path/".$_FILES["FileUpload"]["name"], 0777);
			echo "<script>  alert('อัฟโหลดไฟล์เรียบร้อย'); </script>";
			}
		}else{
			if(move_uploaded_file($_FILES["FileUpload"]["tmp_name"],"$path/".$_FILES["FileUpload"]["name"]))
			{
			chmod("$path/".$_FILES["FileUpload"]["name"], 0777);
			echo "<script>  alert('อัฟโหลดไฟล์เรียบร้อย'); </script>";
			}
		}

		$newName = $dates."_FILES_".$newStr;
		//echo $newName;
		//die;

		$pathname = "/var/www/html/sesite/uploadfile/PDM/".$year."/".$stdId."/".$newName;
		rename("$path/$nameFile", "$pathname");
		//die;

		$this->load->model('PDM/m_upload_document_full','pdm');
		$data['file'] = $this->pdm->getdataUpload($idPrj)->result(); // select file upload from idform

		if($data['file'] == NULL){
			echo "<script> alert('NULL'); </script>";
			$this->load->model('PDM/m_upload_document_full','pdm');
			$this->pdm->insertFile($idPrj,$newStr,$strType,$text,$date,$newName);
		}else{
			echo "<script> alert('HA HA'); </script>";
			$this->load->model('PDM/m_upload_document_full','pdm');
			$this->pdm->insertFileEdit($idPrj,$newStr,$strType,$text,$date,$newName);
		}
		$this->pdm->UpdateForm($idPrj); // update status student on proj_id 999
		}else{
			echo "<script> alert('กรุณาเลือกไฟล์ใหม่เป็น .doc .docx');</script>";
			echo "<p /><a href=\"javascript: history.back()\">ย้อนกลับ</a>";
			exit;
		}
		redirect('PDM/upload_document_full');
	}

	function download($nameFile){
	$id = $_GET['id'];
	//echo $id;
	//die;
	$stdId=$this->session->userdata('UsPsCode');
		$d = Date("Y");
		$year = $d+543;
	$path = "/var/www/html/sesite/uploadfile/PDM/".$year."/".$stdId."/".$id;
	//echo $path;die;

	header('Content-Description: File Transfer');
	header('Content-Type: application/doc');
	header('Content-Disposition: attachment; filename ='.basename($file));
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
    header('Pragma: public');
	header('Content-Length: ' . filesize($path));
	ob_clean();
	flush();
	readfile($path);
	exit;
	}

	function update(){
		$idform = $_GET['nameFile'];
		echo $idform;
		$this->load->model('PDM/m_upload_document_full','pdm');
		$this->pdm->updateFile($idform); // update data for file upload
		redirect('PDM/upload_document_full');
	}
}
?>