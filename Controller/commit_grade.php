<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('UMS_Controller.php');
class Commit_grade extends UMS_Controller{
	public function index(){
	$this->output('PDM/Form/v_commit_grade');
	}
}
?>