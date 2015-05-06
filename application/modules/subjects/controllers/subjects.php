<?php

class subjects extends MX_Controller {

    public function __construct() {
    }

    public function index() {
		$module = Modules::load('template');
		$data = array(
			'Name' => 'subjects'
		);
		$module->loadView("Subjects", "subjects_view", $data);
    }
}