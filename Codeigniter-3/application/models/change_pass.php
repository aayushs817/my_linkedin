<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class change_pass extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function index(){}
	public function email_validation_(){

			$email = $this->security->xss_clean($this->input->post('EmailID'));
			

		$this->db->where('Email', $email);
		
		// Run the query
		$query = $this->db->get('user');
		
	if($query->num_rows == 1)
		{
			
			return true;
		}

		return false;
	}
	

	}
?>