<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main_join_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function index(){}
	public function signUP_validation(){

			$new_email = $this->security->xss_clean($this->input->post('EmailID'));
		
		$this->db->where('Email', $new_email);
		
		// Run the query
		$query = $this->db->get('user');

		if($query->num_rows == 1)
		{
			






			return true;
		}

		return false;




	}
	public function signUP(){


		$F_name = $this->security->xss_clean($this->input->post('FirstName'));
		$L_name=$this->security->xss_clean($this->input->post('LastName'));
		$Email_id=$this->security->xss_clean($this->input->post('EmailID'));
		$password = $this->security->xss_clean($this->input->post('Password'));


		$escapedName = mysql_real_escape_string($F_name); 
		$escapedPW = mysql_real_escape_string($password);


$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

$saltedPW =  $escapedPW . $salt;	

$hashedPW = hash('sha256', $saltedPW);



	




		session_start();
		$_SESSION['first_name']=$F_name;
		$_SESSION['email_id']=$Email_id;
	

		$data = array(
    'FirstName' => $F_name ,
    'LastName' => $L_name ,
    'Email' => $Email_id,
    'Password'=> $hashedPW,
    'Salt'=>$salt
 		);
		
		$this->db->insert('user', $data); 




		  $data2 = array(
    'Email' => $Email_id );
  
  $this->db->insert('profile_pic', $data2);



  





	}



	}
?>