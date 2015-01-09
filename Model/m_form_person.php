<?php
class M_form_person extends CI_Model {
	public function select_person($idUser){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM `pdm_personel` 
		JOIN `pdm_prefix`ON `pdm_prefix`.`pref_id` =  `pdm_personel`.`pref_id`
		JOIN `pdm_major` ON `pdm_personel`.`maj_id` = `pdm_major`.`maj_id`
		JOIN `pdm_faculty` ON `pdm_personel`.`fac_id` = `pdm_faculty`.`fac_id`
		WHERE `pers_id`= $idUser";
		$result = $this->PDM->query($sql);
		return $result;	
	}
	public function select_prefix(){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM `pdm_prefix`";
		$result = $this->PDM->query($sql);
		return $result;	
	}
	public function select_fac(){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM `pdm_faculty`";
		$result = $this->PDM->query($sql);
		return $result;	
	}
	public function select_maj(){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM `pdm_major`";
		$result = $this->PDM->query($sql);
		return $result;	
	}
	public function update_person($idUser,$prefixth,$fNameth,$lNameth,$fNameen,$lNameen,$facu,$maju,$email,$tel){
		$this->PDM= $this->load->database('prj',TRUE);
		$sql = "UPDATE `se_prjdocdb`.`pdm_personel` 
		SET `pref_id`= '$prefixth',`pers_fname`= '$fNameth' ,`pers_lname`= '$lNameth',
		`pers_fnameen`= '$fNameen',`pers_fnameen`= '$lNameen',
		`pers_tel`= '$tel',`pers_email` = '$email',
		`fac_id`='$facu',`maj_id`='$maju'
		WHERE `pdm_personel`.`pers_id` = '$idUser';";
		$result = $this->PDM->query($sql);
		return $result;	
	}

}
?>
