<?php

class home extends MX_Controller {

    public function __construct() {
    }

    public function index() {
		$this->load->model("home_model");
		$module = Modules::load('template');
		$data = array(
			'Name' => 'home',
			'CanHelpYou' => $this->home_model->getCanHelpYou($this->Session->userdata("ID")),
			'YouCanHelp' => $this->home_model->getYouCanHelp($this->Session->userdata("ID"))
		);
		$module->loadView("Home", "HomeView", $data);
    }
}