<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class change_pass_control extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){}

	public function validate_email(){

	$this->load->model('change_pass');
		
		$result = $this->change_pass->email_validation_();
		
		if( $result){

$config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'raoshaheryarkhan@gmail.com',
      'smtp_pass' => '!!_C?@ILOVEPAKISTAN',
    );


			$this->load->library('email');

			$this->email->set_newline("\r\n");
			$this->email->from('raoshaheryarkhan@gmail.com');
			$this->email->to('raoshaheryarkhan@gmail.com'); 
			$this->email->subject('Forget_Password');
			$this->email->message("hello new password is kklllll");











				/*'Thanks for signing up! 
									Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below. 
 
										------------------------ 
										Email address: '.$this->session->userdata('email').' 
										
										------------------------ 
										 
										Please click this link to activate your account: 
										 
										http://localhost/linkedin/index.php/join_sign/verify?email='.$this->session->userdata('email').'&hash='.$this->session->userdata('hash').'');	
			*/

$this->email->send();





echo $this->email->print_debugger();













		
	
		$msg = '<font color=red>Mail Sent check your mail.</font><br />';
			$data2['msg'] = $msg;
 		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('common/change_password',$data2);
		$this->load->view('common/footer_white');
			
				}
			else{

			$msg = '<font color=red>Incorrect user name or password.</font><br />';
			$data2['msg'] = $msg;

			$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('common/change_password',$data2);
		$this->load->view('common/footer_white');
		}		
	}
}
	?>