<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class template extends MX_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
		parent::__construct();

		// Load facebook library and pass associative array which contains appId and secret key
		$this->load->library('facebook', array('appId' => '1600116246925482', 'secret' => '1a91c383ad0491be231cd298933810f6'));

		// Get user's login information
		$this->user = $this->facebook->getUser();
    }

    public function index() {
       
    }
    
    public function loadView($title, $viewpath, $passdata){
		//login check
		if ($this->session->userdata("Logged_in")==true and $this->user) {
			//add facebook data to the passdata
			$profile = $this->facebook->api('/me/');
			$passdata['first_name'] = $profile['first_name'];
			$passdata['last_name'] = $profile['last_name'];
			$passdata['user_id'] = $profile['id'];
			$passdata['profile_picture'] = "https://graph.facebook.com/" . $profile["id"] . "/picture?type=large";
		} else {
			redirect(base_url(), 'refresh');
            return;
		}
		// Get logout url of facebook
		$logout = $this->facebook->getLogoutUrl(array('next' => base_url() . 'index.php/login/logout'));
		
        $data = array(
            "title" => $title,
            "viewPath" => $viewpath,
            "passData" => $passdata,
			"logOutUrl" => $logout
        );
        $this->load->view('TemplateView', $data);
    }
}

/* End of file login.php */