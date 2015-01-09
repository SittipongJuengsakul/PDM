<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Calendar_show extends UMS_Controller{
    public function index(){
    $this->load->helper('form');
    $year=$this->input->get('year');
    if($year==0||$year==null){
        $year=2557;
    }
    $GpID =$this->session->userdata('GpID');
    if($GpID == '200067'){ //นิสิต
            $data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
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
    $this->load->model('PDM/m_calendar');
    $data['vision'] = $this->m_calendar->show($year);
	print_r($data['vision']);
    echo $this->output('PDM/Calendar/v_calendar',$data);
    }
    public function refresh_cal($year){
    $this->load->model('PDM/m_calendar');
    $data['vision'] = $this->m_calendar->show($year);
    echo $this->load->view('PDM/Calendar/v_refreshcal',$data);
    }
    public function insert(){
    $this->load->helper('form');
    $this->load->model('PDM/m_calendar');
    $name=$this->input->post('name');
    $firstdate=$this->input->post('firstdate');
    $lastdate=$this->input->post('lastdate');
    $year=$this->input->post('year');
    $sent=$this->input->post('sent');
    $detail=$this->input->post('detail');
    $data['add'] = $this->m_calendar->insert($name,$firstdate,$lastdate,$year,$sent,$detail);
    $data['vision'] = $this->m_calendar->show($year);
    $this->output('PDM/Calendar/v_calendar',$data);
    }
}
?>