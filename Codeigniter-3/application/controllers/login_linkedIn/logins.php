<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logins extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){}

	public function validate_login(){
	
	$this->load->model('main_login_model');
		
		$result = $this->main_login_model->login_validation();
		
		if( $result){
			//$this->main_join_model->signUP();
			//$data3['Uname']="jdkaj";

			
			$this->session->set_userdata('email_',$this->input->post('EmailID') );
			
			

		//	$this->load->view('common/header4');
	//	$this->load->view('pages/home');
	//	$this->load->view('common/footer_h4');
	
			redirect('common/starter/load_home');
				}
			else{

			$msg = '<font color=red>Incorrect user name or password.</font><br />';
			$data2['msg'] = $msg;

			$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('common/login',$data2);
		$this->load->view('common/footer_grey');
		}		
	}
}
	?>