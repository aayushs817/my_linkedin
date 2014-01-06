<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main_login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function index(){}
	public function login_validation(){

			$email = $this->security->xss_clean($this->input->post('EmailID'));
			$password_ = $this->security->xss_clean($this->input->post('Password'));

		$this->db->where('Email', $email);
		//Password
		//$this->db->where('Password', $password_);
		// Run the query
		
		$query = $this->db->get('user');

	
		$escapedPW = mysql_real_escape_string($password_);

		

		if($query->num_rows == 1)
		{
			
			foreach ($query->result() as $row )
			{

				$salt_2 = $row->Salt;
				$saltedPW =  $escapedPW . $salt_2;

				$hashedPW = hash('sha256', $saltedPW);


				$this->db->where('Email', $email);
				$this->db->where('Password', $hashedPW);
				$query2 = $this->db->get('user');



	



				if($query2->num_rows==1)
				{

					foreach ($query2->result() as $row )
					{
					$this->session->set_userdata('f_name_',$row->FirstName);
					$this->session->set_userdata('l_name_',$row->LastName );






					}


									$this->db->from('profile_pic');
									$this->db->where('Email',$email);
									$query_pic=$this->db->get();
										if($query_pic->num_rows()>0)
										{
												$row_pic=$query_pic->row();
												$row_pic->is_upload; // bit of uploading pic 
											if($row_pic->is_upload==1){
												$pic_pathhh=$row_pic->Email.".jpg";
												$pic_pathhh_2=$row_pic->Email."_2.jpg";

												$this->session->set_userdata('pic_path',$pic_pathhh);
												$this->session->set_userdata('pic_path_2',$pic_pathhh_2);
												
											}
												else{
													$pic_pathhh="default.jpg";
													$pic_pathhh_3="default_2.jpg";
													$this->session->set_userdata('pic_path',$pic_pathhh);
													$this->session->set_userdata('pic_path_2',$pic_pathhh_3);

												}	

										}

						return true;

				}
				else
				{

					return false;

				}


				
			}
					
		}
		else
		{
		return false;
		}

	}


	

	}
?>