<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Calendar_manager extends UMS_Controller{
	public function index(){
		$this->load->helper('form');
		$year=$this->input->get('year');
	if($year==0||$year==null){
		$year=2557;
	}
		$GpID =$this->session->userdata('GpID');
		$this->load->model('PDM/m_calendar');
		$data['vision'] = $this->m_calendar->show($year);
		if($GpID == '200066'){
			$data['nav'] = "";
		}
		else if($GpID == '200068'){//นักวิชาการศึกษา
			$data['nav'] = $this->load->view('PDM/v_edu_nav','',true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		}
	$this->load->model('PDM/m_calendar');
	$data['vision'] = $this->m_calendar->show($year);
	$data['vision3'] = $this->m_calendar->showsent();
	//$data['vision4'] = $this->m_calendar->showsent1();
	$data['State_Ums'] = $this->m_calendar->get_stateums();
	$this->output('PDM/Calendar/v_calendar_assign',$data);
	}
	public function edit($id){
	  $this->load->helper('form');
	   $this->load->model('PDM/m_calendar');
	  $data['vision1'] = $this->m_calendar->show1($id);
	  $GpID =$this->session->userdata('GpID');
		if($GpID == '200066'){
			$data['nav'] = "";
		}
		else if($GpID == '200068'){//นักวิชาการศึกษา
			$data['nav'] = $this->load->view('PDM/v_edu_nav','',true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		}
	  $this->load->model('PDM/m_calendar');
	  $data['vision1'] = $this->m_calendar->show1($id);
	  $data['vision2'] = $this->m_calendar->show2();
	  $data['vision3'] = $this->m_calendar->showsent();
	  $data['State_Ums'] = $this->m_calendar->get_stateums();
	  $data['State_Ums1'] = $this->m_calendar->get_stateums1($id);
	  $this->output('PDM/Calendar/v_calendar_edit',$data);
	}
	public function insert(){
	$this->load->model('PDM/m_calendar');
	$name=$this->input->post('name');
	$firstdate=$this->input->post('firstdate');
	$lastdate=$this->input->post('lastdate');
	$year=$this->input->post('year');
	$sent=$this->input->post('sent');
	$detail=$this->input->post('detail');
	$activity = $this->input->post('activity'); 
	$data['add'] = $this->m_calendar->insert($name,$firstdate,$lastdate,$year,$detail);
	$data['vision2'] = $this->m_calendar->show3();
	foreach ($data['vision2']-> result() as $v2){
	  $idform = $v2->cal_id;
	}
	for($i=0;$i<count($sent);$i++){
	$data['addsent'] = $this->m_calendar->insert_sent($sent[$i],$idform);
	}
	for($i=0;$i<count($activity);$i++){
	$data['activity'] = $this->m_calendar->insert_activity($activity[$i],$idform);
	}
	redirect('/PDM/calendar_manager');
	}
	public function remove_form($id){
	echo $id;
	$iddate = $id;
		$this->load->model('PDM/m_calendar');
		$this->m_calendar->remove_calendar_id($iddate);
		$this->m_calendar->remove_activity($iddate);
		redirect('/PDM/calendar_manager');
	}
	public function editdata($id){
	$this->load->model('PDM/m_calendar');
	$name=$this->input->post('name');
	$firstdate=$this->input->post('firstdate');
	$lastdate=$this->input->post('lastdate');
	$year=$this->input->post('year');
	$sent=$this->input->post('sent');
	$detail=$this->input->post('detail');
	$activity = $this->input->post('activity');
	$data['add'] = $this->m_calendar->edit($name,$firstdate,$lastdate,$year,$sent,$detail,$id);
	$data['activity'] = $this->m_calendar->edit_activity($activity,$id);
	redirect('/PDM/calendar_manager');
	}
}
?>