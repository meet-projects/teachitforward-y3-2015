<?php

class profile extends MX_Controller {

    public function __construct() {
    }

    public function index() {
		$this->load->model("profile_model");
		
		//$id = $this->input->get("id");
		//if($this->input->get("id")==FALSE)
			$id = this->session->userdata("ID");
		
		$details = $this->profile_model->getDetails($id);
		if($details==FALSE) return;
		
		$module = Modules::load('template');
		$data = array(
			'Name' => 'profile',
			'Picture' => "https://graph.facebook.com/" . $id . "/picture?type=large",
			'First' => $details->first,
			'Last' => $details->last,
		);
		$module->loadView("Profile", "profile_view", $data);
    }
}