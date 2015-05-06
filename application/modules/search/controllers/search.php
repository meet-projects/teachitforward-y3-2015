<?php

class search extends MX_Controller {

    public function __construct() {
    }

    public function index() {
		$this->load->model("search_model");
		
		$q = $this->input->get("q");
		if($this->input->get("q")===FALSE)
			return;
		if(strpos($this->input->get("q"), "'")!==FALSE or strpos($this->input->get("q"), '"')!==FALSE)
			return;
		
		$results = $this->search_model->getSearch($q);
		
		$module = Modules::load('template');
		$data = array(
			'Name' => 'search',
			'Results' => $results
		);
		$module->loadView("Search", "search_view", $data);
    }
}