
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class starter extends CI_Controller{

	function __construct(){
		parent::__construct();
		
	}
	public function index(){
		
		//$this->load_advance_search();

		
			$this->load->view('common/header2');
                $this->load->view('common/nav3');
                $this->load->view('common/main_page');
                $this->load->view('common/footer');

                

			
                //$this->load->view('She');

		/*$this->load->view('common/header-m');
		$this->load->view('linkedin/searchnav');
		$this->load->view('linkedin/searchbody');*/
		//$this->load->view('common/footer_white');
		
		
	
	
		}

		public function show_contacts(){
			$this->load->view('common/header4');
			$this->load->view('pages/contacts');
			



		}
public function news_fed()
		{
		$this->load->view('common/header4');
		$this->load->view('newsfeed/newsfeednav');
		$this->load->view('newsfeed/newsfeedbody');
		$this->load->view('newsfeed/newsfeedfooter');
}
		public function load_congratulation(){
			$this->load->view('congratulation');


		}
		public function load_doyouknow()
		{

			$this->load->view('doyouknow');

		}
		public function bycountry(){


			$this->load->view('common/header');
			$this->load->view('common/nav');
			$this->load->view('common/main_page_browsecountry');
			$this->load->view('common/footer_white');


		}
		public function whats_linkedin(){


			$this->load->view('common/header');
			$this->load->view('common/nav');
			$this->load->view('common/nav');
			$this->load->view('common/whats_linkedin');
		
			

		}

		public function login_page(){

			$this->load->view('common/header');
			$this->load->view('common/nav');
			$this->load->view('common/login');
			$this->load->view('common/footer_grey');
		
		}
		public function change_password_page(){
			$this->load->view('common/header');
			$this->load->view('common/nav');
			$this->load->view('common/change_password');
			$this->load->view('common/footer_white');
		

		}
		public function main_page2(){

			$this->load->view('common/header');
		//	$this->load->view('common/nav2');
			$this->load->view('common/main_page2');
			$this->load->view('common/footer3');

  }
  	public function cookie_policy(){

			$this->load->view('common/header');
			$this->load->view('common/nav');
			$this->load->view('common/cookie_policy');
			//$this->load->view('common/footer3');
		}
		public function build_profile(){
			$this->load->view('common/header');
			$this->load->view('common/build_profile1');
		}

		public function load_home(){


		$this->load->model('upload_pic_db');
		$data["pic_exist"] =$this->upload_pic_db->is_pic_flag_up();	
			$this->load->view('common/header4');
		$this->load->view('pages/home',$data);
		$this->load->view('common/footer_h4');
		
		}

		public function load_advance_search(){



			$this->load->view('common/header4');
		$this->load->view('pages/advance_search');
		$this->load->view('common/footer_h4');
		}

		public function logout_(){

			$this->session->unset_userdata('email_');
			$this->session->sess_destroy();

			


				$this->load->view('common/header2');
                $this->load->view('common/nav3');
                $this->load->view('common/main_page');
                $this->load->view('common/footer');



		}
		public function load_p_pic(){




			$this->load->view('pic_up');
		}
		public function load_invitations(){

		redirect(invitations/invite/get_requests);

		}


		public function load_edit_profile(){

$this->load->model('upload_pic_db');
		$data["pic_exist"] =$this->upload_pic_db->is_pic_flag_up();	
			$this->load->view('common/header4');
			$this->load->view('pages/prof',$data);
			$this->load->view('common/footer_h4');
		}

}


?>
