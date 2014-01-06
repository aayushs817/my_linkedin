<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process2 extends CI_Controller{
	
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
		$this->load->view('common/header-m');
		$this->load->view('linkedin/signup_process');
		

	}
}

	?>