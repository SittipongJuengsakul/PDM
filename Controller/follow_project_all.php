<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Follow_project_all extends UMS_Controller{
			public function index(){
					$GpID =$this->session->userdata('GpID');
					if($GpID == '200066'){
						$data['nav'] = "";
					}
					else if($GpID == '200067'){ //เธเธดเธชเธดเธ•
						$data['nav'] = $this->load->view('PDM/v_nisit_nav','',true);
					}
					else if($GpID == '200068'){//เธเธฑเธเธงเธดเธเธฒเธเธฒเธฃเธจเธถเธเธฉเธฒ
						$data['nav'] = $this->load->view('PDM/v_edu_nav','',true);
					}
					else if($GpID == '200070'){ //เธญเธฒเธเธฒเธฃเธ—เธตเนเธเธฃเธถเธเธฉเธฒเนเธเธฃเธเธเธฒเธ
						$data['nav'] = $this->load->view('PDM/v_avs_nav','',true);
					}
					else{
						$data['nav'] = "เนเธกเนเธเธเธเธฃเธฐเน€เธ เธ— $GpID";
						$data['sidebar'] = "";
					}
				$this->load->model('PDM/m_allpro','map');
				$data['rs'] = $this->map->show();
				$this->output('PDM/v_all_project',$data);
			}
	}
?>