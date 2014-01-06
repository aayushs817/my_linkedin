<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class newssfeed extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){}
	

	public function posting_status()
	{
		
			$this->load->model('home_page');


			if($_POST['atach_bit']==1)
			{
				//echo 1;
				$_FILES["mfile"]["tmp_name"];
			
					
				if($_FILES["mfile"]["tmp_name"]!="")
				{
					
				}

					

			}

			$ans=$this->home_page->add_status();

	}
	public function adding_comment()
	{
			$this->load->model('home_page');
			$ans=$this->home_page->add_comments();
	}
	public function display_page()
	{
			$this->load->model('home_page');
			$ans=$this->home_page->show_homepage();
	}
	 public function like_it()
	 {

	     $this->load->model('like');

            $this->like->like_it_db();
	}
    public function show_liked()
    {

	       $this->load->model('like');

            $this->like->like_by_db();


    }
    public function like_it_2()
	 {
	 	echo $this->input->post('ar');
	}

	public function get_end()
	{
		$this->load->model('home_page');
			$ans=$this->home_page->check_is_end();



	}
	public function show_connects(){



		  $this->load->model('action_request');

            $this->action_request->show_connects_db();


	}
	public function get_likes_count(){


	       $this->load->model('like');

            $this->like->likes_count();

	}

	}
?>
