<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Oral_exam extends UMS_Controller{
    public function index(){
		$this->load->model('PDM/m_oral_exam','select');
		$data['result'] = $this->select->select_oral_exam();
		$this->output('PDM/Follow/v_date_oral_exam',$data);
	}
	public function insert_data(){
	
		$time = $_POST['time'];
		$location = $_POST['location'];
		$room = $_POST['room'];
		//echo $time." ".$location." ".$room;
		$this->load->model('PDM/m_oral_exam');
		$this->m_oral_exam->insert_oral_exam($time,$location,$room);
		redirect('/PDM/oral_exam');
		
	}
}	
