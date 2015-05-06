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
	
	public function subject() {
		$this->load->model("subjects_model");
		
		$sid = $this->input->get("id");
		if($this->input->get("id")==FALSE)
			return;
		
		$module = Modules::load('template');
		$data = array(
			'Name' => 'subjects',
			'Subject' => $this->subjects_model->getSubject($sid),
			'CanHelp' => $this->subjects_model->getCanHelp($sid),
			'NeedHelp' => $this->subjects_model->getNeedHelp($sid)
		);
		$module->loadView("Subject", "subject_view", $data);
	}
}