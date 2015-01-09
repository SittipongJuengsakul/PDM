<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('PDM_Controller.php');
class Activity_main extends PDM_Controller{
   public function show_activity($cal_id){
     $GpID=$this->session->userdata('GpID');
     $idUser=$this->session->userdata('UsPsCode');
     $data['idUser']=$this->session->userdata('UsPsCode');
     $this->load->model('PDM/m_state');
     $data['state']=$this->m_state->get_state($idUser)->result();
     $sidebar = $this->load->model('PDM/m_activity');
     $data['checks']=$this->m_activity->get_activity($cal_id)->num_rows();
     $data['cal']=$this->m_activity->get_calactivity($cal_id)->result();
     $data['works']=$this->m_activity->get_activity($cal_id)->result();
     echo $this->load->view('PDM/Activity/v_activity_show',$data);
   }
}
?>