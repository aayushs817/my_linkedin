<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		

	}
	public function pageload()

	{
		/*$this->load->view('common/header-m');
		$this->load->view('linkedin/searchnav');
		$this->load->view('linkedin/searchbody');
		$this->load->view('common/footer_white');
		*/
		$this->load->view('common/header-m');
		$this->load->view('linkedin/signup_process');
		

	}
}

	?>