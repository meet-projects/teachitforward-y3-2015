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
	function registerInDB($id, $first, $last) {
		$this->db->select("COUNT(`first`) as c")->from("users")->where("id", $id);
		$result = $this->db->get()->result();
		if($result[0]->c==0) {
			$data=array(
				"id" => $id,
				"first" => $first,
				"last" => $last,
				"needhelp" => "",
				"canhelp" => "",
				"description" => ""
			);
			$this->db->insert("users", $data);
		}
	}
}
