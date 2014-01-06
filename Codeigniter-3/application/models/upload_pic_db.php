<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_pic_db extends CI_Model{
	function __construct(){
		parent::__construct();
							}





		public function load_pic_in_database($dumy)
		{
			 $dat =1;
			$data = array(
                
                'is_upload' => $dat
            );

 			$this->db->where('Email', $dumy);
 			$this->db->update('profile_pic', $data); 



			
			
		}


		public function is_pic_flag_up()
		{

			$this->db->where('Email',$this->session->userdata('email_'));
			$this->db->where('is_upload',1);
			$query =$this->db->get('profile_pic');

			if($query->num_rows == 1)
		{
			
			return true;
		}

		return false;

		}









}


?>