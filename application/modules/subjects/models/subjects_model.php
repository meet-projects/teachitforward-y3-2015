<?php

/**
 * Description of subjects_model
 *
 * @author Bahjat
 */
class subjects_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	public function getSubjects() {
		$this->db->select("id, name, major")->from("subjects")->order_by("major, name");
		$subjects = $this->db->get()->result();
		return $subjects;
	}
	
	public function getSubject($sid) {
		$this->db->select("id, name, major")->from("subjects")->order_by("major, name");
		$subject = $this->db->get()->result();
		if(count($subject)==0) return false;
		return $subject[0];
	}
	
	public function getCanHelp($sid) {
		$this->db->select("id, first, last")->from("users")->where("CONCAT(',', canhelp, ',') LIKE '%," . $sid . ",%'");
		$result = $this->db->get()->result();
		return $result;
	}
	
	public function getNeedHelp($sid) {
		$this->db->select("id, first, last")->from("users")->where("CONCAT(',', needhelp, ',') LIKE '%," . $sid . ",%'");
		$result = $this->db->get()->result();
		return $result;
	}
}
