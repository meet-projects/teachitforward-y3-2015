<?php

class home extends MX_Controller {

    public function __construct() {
    }

    public function index() {
		$this->load->model("home_model");
		$module = Modules::load('template');
		$data = array(
			'Name' => 'home'
		);
		$module->loadView("Home", "HomeView", $data);
    }
}