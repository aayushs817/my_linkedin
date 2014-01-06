<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile_1 extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){}

	public function placing_data()
	{
		
			$this->load->model('main_profile_model');
			$ans=$this->main_profile_model->placing_input_database();
			redirect('signup/process3/pageload');
	}
}
	?>
