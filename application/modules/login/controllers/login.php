<?php
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends MX_Controller {
	public $user = "";

	public function __construct() {
		parent::__construct();
		session_start();
		define('FACEBOOK_SDK_V4_SRC_DIR', APPPATH . '/libraries/facebook4/src/Facebook/');
		require APPPATH . '/libraries/facebook4/autoload.php';

		FacebookSession::setDefaultApplication('1600116246925482', '1a91c383ad0491be231cd298933810f6');
	}

	public function index() {
		$helper = new FacebookRedirectLoginHelper(base_url() . 'index.php/login/doLogin/');
		if ($this->session->userdata("Logged_in")==true) {
			// Send data to home page
			redirect(site_url('home'), 'refresh');
			return;
		} else {
			// Store users facebook login url
			$data['login_url'] = $loginUrl = $helper->getLoginUrl();
			$this->load->view("login_view", $data);
		}
	}
	
	// Store user information and send to home page
	public function doLogin() {
		$this->load->model("login_model");
		$helper = new FacebookRedirectLoginHelper(base_url() . 'index.php/login/doLogin/');
		$session = "x";
		try {
		  $session = $helper->getSessionFromRedirect();
		} catch(FacebookRequestException $ex) {
		die(var_dump($ex));
		  // When Facebook returns an error
		} catch(\Exception $ex) {
		die(var_dump($ex));
		  // When validation fails or other local issues
		}
		if ($session) {
			$request = new FacebookRequest($session, 'GET', '/me');
			$response = $request->execute();
			$graphObject = $response->getGraphObject(GraphUser::className());
			$this->session->set_userdata("Logged_in", true);
			$this->session->set_userdata("ID", $graphObject->getID());
			$this->session->set_userdata("First", $graphObject->getFirstName());
			$this->session->set_userdata("Last", $graphObject->getLastName());
			$this->login_model->registerInDB($graphObject->getID(), $graphObject->getFirstName(), $graphObject->getLastName());
			redirect(site_url('home'), 'refresh');
			return;
		} else {
			// Store users facebook login url
			$data['login_url'] = $helper->getLoginUrl();
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