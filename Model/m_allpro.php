<?php
class M_allpro extends CI_Model{
	public $stu_id;
	public $name_surname;
	public $status;
	public function __construct(){
		parent ::__construct();
		}
		public function insert(){
			$this->db = $this->load->database('prj',TRUE);
			$sql = "INSERT INTO acess(stu_id,name_surname,status)
				VALUES(?,?,?)";
			$this->db->query($sql,array($this->stu_id,$this->name_surname,$this->status));
		}
		public function update(){
			$this->db = $this->load->database('prj',TRUE);
			$sql = "UPDATE acess SET name_surname=?,status=? WHERE user_id=?";
				$this->db->query($sql,array($this->name_surname,$this->status,$this->user_id));
		}
		   public function show(){
		   $this->db = $this->load->database('prj',TRUE);
			$sql="SELECT * FROM pdm_formu02 ORDER BY frm2_id asc";
			$rs=$this->db->query($sql);
			return $rs->result_array();
		}
}
?>
