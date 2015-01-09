<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Approve_educator_chm extends UMS_Controller{
	public function index(){
	$this->output('PDM/Form/v_approve_project_chm');
	}
}
?>