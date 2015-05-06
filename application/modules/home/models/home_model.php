<?php

/**
 * Description of home_model
 *
 * @author Bahjat
 */
class home_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	public function getYouCanHelp($id) {
		$this->db->select("canhelp")->from("users")->where("id", $id);
		$me = $this->db->get()->result();
		$subjects = explode(",", $me[0]->canhelp);
		$users = array();
		$userids="";
		foreach($subjects as $s) {
			$this->db->select("id, first, last")->from("users")->where("CONCAT(',', needhelp, ',') LIKE '%," . $s . ",%'");
			$result = $this->db->get()->result();
			foreach($result as $r) {
				if(strpos($userids, ",".$r->id)===FALSE) {
					array_push($users, $r);
					$userids.=",".$r->id;
				}
			}
		}
		return $users;
	}
	
	public function getCanHelpYou($id) {
		$this->db->select("needhelp")->from("users")->where("id", $id);
		$me = $this->db->get()->result();
		$subjects = explode(",", $me[0]->needhelp);
		$users = array();
		$userids="";
		foreach($subjects as $s) {
			$this->db->select("id, first, last")->from("users")->where("CONCAT(',', canhelp, ',') LIKE '%," . $s . ",%'");
			$result = $this->db->get()->result();
			foreach($result as $r) {
				if(strpos($userids, ",".$r->id)===FALSE) {
					array_push($users, $r);
					$userids.=",".$r->id;
				}
			}
		}
		return $users;
	}
}
