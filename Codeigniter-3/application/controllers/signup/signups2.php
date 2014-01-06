<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class signups2 extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){}
	public function load_user(){






		$this->load->model('main_join_model');
		
		$result = $this->main_join_model->signUP_validation();
		
		if(! $result){
			
			
			$this->main_join_model->signUP();

			$this->session->set_userdata('f_name_',$this->input->post('FirstName') );
			$this->session->set_userdata('l_name_',$this->input->post('LastName') );
			$this->session->set_userdata('email_',$this->input->post('EmailID') );

			$this->session->set_userdata('UserName',$this->input->post('FirstName')+$this->input->post('LastName'));
			$this->load->view('common/header');
			$this->load->view('common/build_profile1');
			
			

		}else{

			$msg = '<font color=red>Account Already exists.</font><br />';
			$data2['msg']=$msg;
			$this->load->view('common/header');
	//	$this->load->view('common/nav2');
		$this->load->view('common/main_page2',$data2);
		$this->load->view('common/footer3');
		}		
	





	








	}

	}
	?>