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
}
