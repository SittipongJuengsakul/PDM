<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('PDM_Controller.php');
class Pdm_main extends PDM_Controller{
    public function index(){
       $GpID =$this->session->userdata('GpID');
       $idUser = $this->session->userdata('UsPsCode');
       $data['idUser'] = $this->session->userdata('UsPsCode');
       $this->load->model('PDM/m_state');
       $sidebar = $this->load->model('PDM/m_activity');//โหลด model ของ avtivity sidebar
       if($GpID == '200066'){
       $data['nav'] = "";
       }
       elseif($GpID == '200067'){ //นิสิต
       $data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
       $sidebar['Std_Sidebar'] = $this->m_activity->get_sidebar($GpID);
       $data['sidebar'] = $this->load->view('PDM/sidebar/v_sidebar_nisit',$sidebar,true);
       $std_data = $this->m_state->test_std($idUser);
       $check_data = $std_data->num_rows();
       if($check_data==0){
       $this->m_state->add_std($idUser);
       $this->output('PDM/v_main',$data);
       }
       }
       elseif($GpID == '200068'){//นักวิชาการศึกษา
       $data['nav'] = $this->load->view('PDM/v_edu_nav','',true);
       $sidebar['Edu_Sidebar'] = $this->m_activity->get_sidebar($GpID);
       $data['sidebar'] = $this->load->view('PDM/sidebar/v_sidebar_edu',$sidebar,true);
       $data['idUser'] = $this->session->userdata('UsPsCode');
       
       $per_data = $this->m_state->test_per($idUser);
       $check_data = $per_data->num_rows();
       if($check_data==0){
       $this->m_state->add_person($idUser);
       $per_data = $this->m_state->test_psp($idUser,2);
       $check_data2 = $per_data->num_rows();
       if($check_data2==0){
       $per_id= $per_data->result();
       $this->m_state->add_psp($per_id[0]->pers_id,2);
       }
       }
       $per_data = $this->m_state->test_psp($idUser,2);
       $check_data2 = $per_data->num_rows();
       if($check_data2==0){
       $per_id = $per_data->result();
       $this->m_state->add_psp($idUser,2);
       }  
       }
       elseif($GpID == '200070'){ //อาจารที่ปรึกษาโครงงาน
       $data['nav'] = $this->load->view('PDM/v_avs_nav','',true);
       $sidebar['Avs_Sidebar'] = $this->m_activity->get_sidebar($GpID);
       $data['sidebar'] = $this->load->view('PDM/sidebar/v_sidebar_avs',$sidebar,true);
       $per_data = $this->m_state->test_per($idUser);
       $check_data = $per_data->num_rows();
       if($check_data==0){
       $this->m_state->add_person($idUser);
       $per_data = $this->m_state->test_psp($idUser,1);
       $check_data2 = $per_data->num_rows();
       if($check_data2==0){
       $per_id= $per_data->result();
       $this->m_state->add_psp($per_id[0]->pers_id,1);
       }
       }
       $per_data = $this->m_state->test_psp($idUser,1);
       $check_data2 = $per_data->num_rows();
       if($check_data2==0){
       $per_id = $per_data->result();
       $this->m_state->add_psp($idUser,1);
       }
       }
       elseif($GpID == '200069'){ //รองคณยดี
       $data['nav'] = $this->load->view('PDM/v_asdn_nav','',true);
       $sidebar['ASDN_Sidebar'] = $this->m_activity->get_sidebar($GpID);
       $data['sidebar'] = $this->load->view('PDM/sidebar/v_sidebar_asdn',$sidebar,true);
       $per_data = $this->m_state->test_per($idUser);
       $check_data = $per_data->num_rows();
       if($check_data==0){
       $this->m_state->add_person($idUser);
       $per_data = $this->m_state->test_psp($idUser,5);
       $check_data2 = $per_data->num_rows();
       if($check_data2==0){
       $per_id= $per_data->result();
       $this->m_state->add_psp($per_id[0]->pers_id,5);
       }
       }
       $per_data = $this->m_state->test_psp($idUser,5);
       $check_data2 = $per_data->num_rows();
       if($check_data2==0){
       $per_id = $per_data->result();
       $this->m_state->add_psp($idUser,5);
       }
       }
       elseif($GpID == '200071'){ //กรรมการ
       $data['nav'] = $this->load->view('PDM/v_chm_nav','',true);
       $sidebar['Chm_Sidebar'] = $this->m_activity->get_sidebar($GpID);
       $data['sidebar'] = $this->load->view('PDM/sidebar/v_sidebar_chm',$sidebar,true);
       $per_data = $this->m_state->test_per($idUser);
       $check_data = $per_data->num_rows();
       if($check_data==0){
       $this->m_state->add_person($idUser);
       $per_data = $this->m_state->test_psp($idUser,5);
       $check_data2 = $per_data->num_rows();
       if($check_data2==0){
       $per_id= $per_data->result();
       $this->m_state->add_psp($per_id[0]->pers_id,3);
       }
       }
       $per_data = $this->m_state->test_psp($idUser);
       $check_data2 = $per_data->num_rows();
       if($check_data2==0){
       $per_id = $per_data->result();
       $this->m_state->add_psp($idUser,3);
       }
       
       }
       elseif($GpID == '200072'){ //ประธานสาขา
       $data['nav'] = $this->load->view('PDM/v_bc_nav','',true);
       $sidebar['Bc_Sidebar'] = $this->m_activity->get_sidebar($GpID);
       $data['sidebar'] = $this->load->view('PDM/sidebar/v_sidebar_bc',$sidebar,true);
       $per_data = $this->m_state->test_per($idUser);
       $check_data = $per_data->num_rows();
       if($check_data==0){
       $this->m_state->add_person($idUser);
       $per_data = $this->m_state->test_psp($idUser,4);
       $check_data2 = $per_data->num_rows();
       if($check_data2==0){
       $per_id= $per_data->result();
       $this->m_state->add_psp($per_id[0]->pers_id,4);
       }
       }
       $per_data = $this->m_state->test_psp($idUser,4);
       $check_data2 = $per_data->num_rows();
       if($check_data2==0){
       $per_id = $per_data->result();
       $this->m_state->add_psp($idUser,4);
       }
       }
       else{
       $data['nav'] = "ไม่พบประเภท $GpID";
       $data['sidebar'] = "";
       } 
       $data['main_content'] = 'main_page';
       $this->output('PDM/v_main',$data);
    }
}
?>