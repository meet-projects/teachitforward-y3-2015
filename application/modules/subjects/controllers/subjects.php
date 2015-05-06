<?php

class subjects extends MX_Controller {

    public function __construct() {
    }

    public function index() {
		$this->load->model("subjects_model");
		$module = Modules::load('template');
		$data = array(
			'Name' => 'subjects',
			'Subjects' => $this->subjects_model->getSubjects()
		);
		$module->loadView("Subjects", "subjects_view", $data);
    }
}