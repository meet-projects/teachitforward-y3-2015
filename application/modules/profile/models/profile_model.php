<?php

/**
 * Description of profile_model
 *
 * @author Bahjat
 */
class profile_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	public function getDetails($userID) {
		$this->db->select("first, last, canhelp, needhelp")->from("users")->where("id", $userID);
		$result = $this->db->get()->result();
		if (count($result)==0) return false;
		return $result[0];
	}
	
	public function getSubjects($subjects) {
		$this->db->select("name")->from("subjects")->where("id IN (" . $subjects . ")");
		$result = $this->db->get()->result();
		$subjects = "";
		foreach($result as $s) {
			$subjects .= ", ".$s->name;
		}
		$subjects = substr($subjects, 1);
		return $subjects;
	}
}
