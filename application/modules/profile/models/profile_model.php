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
}
