<?php

class profile extends MX_Controller {

    public function __construct() {
    }

    public function index() {
		$this->load->model("profile_model");
		$module = Modules::load('template');
		$data = array(
			'Name' => 'profile'
		);
		$module->loadView("Profile", "profile_view", $data);
    }
}