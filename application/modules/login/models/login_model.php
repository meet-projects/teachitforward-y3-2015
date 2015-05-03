<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginModel
 *
 * @author Bahjat
 */
class Login_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	function registerInDB($user) {
		echo $user['id'];
		$this->db->select("COUNT(`first`) as c")->from("users")->where("id", $user['id']);
		$result = $this->db->get()->result();
		if($result[0]->c==0) {
			$data=array(
				"id" => $user['id'],
				"first" => $user['first_name'],
				"last" => $user['last_name'],
				"needhelp" => "",
				"canhelp" => "",
				"description" => ""
			);
			$this->db->insert("users", $data);
		}
	}
}
