<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class searchCont extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){}

	public function searchingal()
	{
			
			$this->load->model('advance_search');
			$ans=$this->advance_search->searching_database();
	}
	
	public function quick_searching()
	{
			
			$this->load->model('advance_search');
			$ans=$this->advance_search->quick_search();
	}
	
}
	?>
