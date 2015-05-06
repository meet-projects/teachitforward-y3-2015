<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of template_model
 *
 * @author Bahjat
 */
class template_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	public function getSubjects($userID) {
		$this->db->select("id, name, major")->from("subjects")->order_by("major, name");
		$subjects = $this->db->get()->result();
		$this->db->select("canhelp, needhelp")->from("users")->where("id", $userID);
		$user = $this->db->get()->result();
		$user = $user[0];
		$can = $user->canhelp;
		$need = $user->needhelp;
		$user->canhelp = "," . $user->canhelp . ",";
		$user->needhelp = "," . $user->needhelp . ",";
		foreach($subjects as $s) {
			$s->canhelp = (strpos($user->canhelp, "," . $s->id) === FALSE ? 0 : 1);
			$s->needhelp = (strpos($user->needhelp, "," . $s->id) === FALSE ? 0 : 1);
		}
		return array($subjects, $can, $need);
	}
	
	public function updateCanHelp($userID, $subjects) {
		$this->db->set("canhelp", $subjects)->where("id", $userID)->update("users");
	}
	
	public function updateNeedHelp($userID, $subjects) {
		$this->db->set("needhelp", $subjects)->where("id", $userID)->update("users");
	}

}
