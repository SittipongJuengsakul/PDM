<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include('UMS_Controller.php');
class Follow_project extends UMS_Controller {
	public function index()
	{
		$GpID =$this->session->userdata('GpID');
		if($GpID == '200066'){
			$data['nav'] = "";
		}
		else if($GpID == '200067'){ //นิสิต
			$data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
		}
		else if($GpID == '200068'){//นักวิชาการศึกษา
			$data['nav'] = $this->load->view('PDM/v_edu_nav','',true);
		}
		else if($GpID == '200070'){ //อาจารที่ปรึกษาโครงงาน
			$data['nav'] = $this->load->view('PDM/v_avs_nav','',true);
		}
		else{
			$data['nav'] = "ไม่พบประเภท $GpID";
			$data['sidebar'] = "";
		}
			//$this->output('v_access');
			$this->load->model('PDM/m_prostu','mps');
			$data['rs'] = $this->mps->show();
			//$data['from_follow'] = $this->msp->select_dataform_all();
			$this->output('PDM/v_access_stu',$data);
	}
		public function acess_edit($id)
	{
		if($this->input->post("btSubmit")!=null){
			$ar=array(
				"status"=>$this->input->post("status"),
					);
			$this->db->WHERE("user_id",$id);
			$this->db->UPDATE("acess",$ar);
			redirect("c_acess/index","refresh");
			exit();
	}
		$sql="SELECT * FROM acess WHERE user_id='$id'";
		$rs=$this->db->query($sql);
			if($rs->num_rows()==0){
				$data['rs']=array();
			}else{
				$data['rs']=$rs->row_array();
			}
			$this->load->view("v_access",$data);
		}
		public function acess_save()
	{
		$this->load->model('m_acess','mcs');
		$this->mcs->stu_id = $this->input->post("stu_id");
		$this->mcs->name_surname = $this->input->post("name_surname");
		$this->mcs->status = $this->input->post("status");
		$this->mcs->insert();
		$this->index2();
		//redirect('fac/index');
	}
		//public function acess_show()
	//{
		//	$this->load->model('m_acess','mcs');
		//	$data['rs'] = $this->mcs->show();
		//	$this->load->view('v_access',$data);
	//}
}
?>
