<?php
class M_form_u01 extends CI_Model {
    //====================================================================//
    //----- model of u-01 ----
    //====================================================================//
    // Select Index Active Data form u01
    public function select_data_form()
    {
        $this->PDM = $this->load->database('prj',TRUE);
        $sql = "SELECT * FROM se_prjdocdb.pdm_formu03
                JOIN se_prjdocdb.pdm_projectstatus ON pdm_projectstatus.proj_id = pdm_formu03.proj_id
                JOIN se_prjdocdb.pdm_student ON pdm_student.std_id = pdm_formu03.std_id
                JOIN se_prjdocdb.pdm_advisor ON pdm_advisor.frm1_id = pdm_formu03.form_id
                JOIN se_prjdocdb.pdm_personel ON pdm_personel.pers_id = pdm_advisor.psp_id
                WHERE pdm_formu03.std_id =".$iduser;
        $query = $this->PDM->query($sql);
        return $query;
    }
    // select_advisor
    public function select_advisor()
    {
        $this->PDM = $this->load->database('prj',TRUE);
        $sql = "SELECT pdm_personel.pers_id,pers_fname,pers_lname
        FROM se_prjdocdb.pdm_personel
        LEFT JOIN pdm_personalposition ON pdm_personalposition.pers_id = pdm_personel.pers_id
        LEFT JOIN pdm_position ON pdm_position.pst_id = pdm_personalposition.pst_id
        WHERE pdm_position.pst_id = '1' ";
        $query = $this->PDM->query($sql);
        return $query;
    }
    //insert project name of Form-u01
    public function insert_project($nameTHprj,$nameENprj,$prjsubdate,$prjimport,$prjpropose,$prjtheory,$prjtime,$prjplan,$prjscope,$prjhard,$prjsoft,$prjfit,$prjdefin,$stdId,$chk)
    {
        $this->PDM = $this->load->database('prj',TRUE);
        $sql = "INSERT INTO `se_prjdocdb`.`pdm_formu01`
        ( `std_id`, `frm1_nameth`, `frm1_nameen`, `proj_id`, `frm1_subdate`, `frm1_importance`, `frm1_propose`,
        `frm1_theory`, `frm1_time`, `frm1_plantask`, `frm1_planscope`, `frm1_hardware`, `frm1_software`, `frm1_benefit`, `frm1_definition`, `frm1_check`)
        VALUES ('$stdId', '$nameTHprj ', '$nameENprj ', 1, '$prjsubdate ',  '$prjimport', '$prjpropose', '$prjtheory', '$prjtime', '$prjplan', '$prjscope', '$prjhard', '$prjsoft', '$prjfit', '$prjdefin', 'TRUE');";
        $query = $this->PDM->query($sql);
        return $query;
    }
    //update status nisit of student
    public function update_status($stdId)
    {
        $this->PDM = $this->load->database('prj',TRUE);
        $sql = "UPDATE `se_prjdocdb`.`pdm_student`
                    SET  std_status = '5'
                    WHERE pdm_student.std_id = ".$stdId;
        $query = $this->PDM->query($sql);
        return $query;
    }
    //insert advisor of project
    public function insert_advisor($id,$prjadv)
    {
        $this->PDM = $this->load->database('prj',TRUE);
        $sql = "INSERT INTO `se_prjdocdb`.`pdm_advisor`
        ( `frm1_id`, `psp_id`)
        VALUES ('$id', '$prjadv');";
        $query = $this->PDM->query($sql);
        return $query;
    }
    public function insert_coadvisor($id,$coadv)
    {
        $this->PDM = $this->load->database('prj',TRUE);
        $sql = "INSERT INTO `se_prjdocdb`.`pdm_coadvisor`
        ( `frm1_id`, `psp_id`)
        VALUES ('$id', '$coadv');";
        $query = $this->PDM->query($sql);
        return $query;
    }
    //select data id form
    public function select_idForm($stdId)
    {
        $this->PDM = $this->load->database('prj',TRUE);
        $sql = "SELECT * FROM se_prjdocdb.pdm_formu01
        WHERE pdm_formu01.std_id = '$stdId'
		ORDER BY frm1_subdate DESC
		LIMIT 1";
        $query = $this->PDM->query($sql);
        return $query;
    }
	public function select_id($stdId)
    {
        $this->PDM = $this->load->database('prj',TRUE);
        $sql = "SELECT * FROM se_prjdocdb.pdm_formu01
        WHERE pdm_formu01.std_id = '$stdId'";
        $query = $this->PDM->query($sql);
        return $query;
    }
    public function choose_adv($prjadv)
    {
        $this->PDM = $this->load->database('prj',TRUE);
        $sql = "SELECT `psp_id` FROM `pdm_personalposition` WHERE `pers_id`= '$prjadv' AND `pst_id` = 1";
        $query = $this->PDM->query($sql);
        return $query;
    }
	function select_check($idUser){
	$this->PDM = $this->load->database('prj',TRUE);
		$sql = "SELECT * FROM se_prjdocdb.pdm_formu01
			LEFT JOIN se_prjdocdb.pdm_projectstatus ON pdm_formu01.proj_id = pdm_projectstatus.proj_id
			LEFT JOIN se_prjdocdb.pdm_advisor ON pdm_formu01.frm1_id = pdm_advisor.frm1_id
			LEFT JOIN se_prjdocdb.pdm_personalposition ON pdm_advisor.psp_id = pdm_personalposition.psp_id
			LEFT JOIN se_prjdocdb.pdm_personel ON pdm_personalposition.pers_id = pdm_personel.pers_id
			WHERE std_id='$idUser' AND frm1_check = 'TRUE'";
		$query = $this->PDM->query($sql);
		return $query;
	}
	function update_ceck($idform,$che){
		$this->PDM = $this->load->database('prj',TRUE);
        $sql = "UPDATE `se_prjdocdb`.`pdm_formu01` SET `frm1_check` = '$che' WHERE `pdm_formu01`.`frm1_id` =".$idform;
        $query = $this->PDM->query($sql);
        return $query;
	}
}
?>
