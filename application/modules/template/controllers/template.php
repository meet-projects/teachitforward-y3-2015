<?php
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;

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
		session_start();
		define('FACEBOOK_SDK_V4_SRC_DIR', APPPATH . '/libraries/facebook4/src/Facebook/');
		require APPPATH . '/libraries/facebook4/autoload.php';

		FacebookSession::setDefaultApplication('1600116246925482', '1a91c383ad0491be231cd298933810f6');
    }

    public function index() {
       
    }
    
    public function loadView($title, $viewpath, $passdata){
		//login check
		if ($this->session->userdata("Logged_in")==true) {
			//add facebook data to the passdata
			$passdata['first_name'] = $this->session->userdata("First");
			$passdata['last_name'] = $this->session->userdata("Last");
			$passdata['user_id'] = $this->session->userdata("ID");
			$passdata['profile_picture'] = "https://graph.facebook.com/" . $this->session->userdata("ID") . "/picture?type=large";
		} else {
			redirect(base_url(), 'refresh');
            return;
		}
		
        $data = array(
            "title" => $title,
            "viewPath" => $viewpath,
            "passData" => $passdata
        );
        $this->load->view('TemplateView', $data);
    }
}

/* End of file login.php */