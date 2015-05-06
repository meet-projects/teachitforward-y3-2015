<?php

/**
 * Description of search_model
 *
 * @author Bahjat
 */
class search_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	public function getSearch($query) {
		$this->db->select("first, last, id")->from("users")->where("CONCAT(' ', first, ' ', last, ' ') LIKE '%".$query."%'");
		$result = $this->db->get()->result();
		return $result;
	}
}
