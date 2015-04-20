<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends MX_Controller {
	public $user = "";

	public function __construct() {
		parent::__construct();

		// Load facebook library and pass associative array which contains appId and secret key
		$this->load->library('facebook', array('appId' => '1600116246925482', 'secret' => '1a91c383ad0491be231cd298933810f6'));

		// Get user's login information
		$this->user = $this->facebook->getUser();
	}

	public function index() {
		if ($this->session->userdata("Logged_in")==true and $this->user) {
			// Send data to home page
			redirect(site_url('home'), 'refresh');
			return;
		} else {
			// Store users facebook login url
			$data['login_url'] = $this->facebook->getLoginUrl(array('redirect_uri' => base_url() . 'index.php/login/doLogin'));
			$this->load->view("login_view", $data);
		}
	}
	
	// Store user information and send to home page
	public function doLogin() {
		if ($this->user) {
			$this->session->set_userdata("Logged_in", true);
			redirect(site_url('home'), 'refresh');
			return;
		} else {
			// Store users facebook login url
			$data['login_url'] = $this->facebook->getLoginUrl(array('redirect_uri' => base_url() . 'index.php/login/doLogin'));
			$this->load->view("login_view", $data);
		}
	}

	// Logout from facebook
	public function logout() {

		// Destroy session
		$this->session->sess_destroy();

		// Redirect to baseurl
		redirect(base_url(), 'refresh');
	}

}

/* End of file login.php */