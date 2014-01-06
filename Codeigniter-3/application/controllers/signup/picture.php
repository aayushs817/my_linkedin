<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Picture extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	

	public function index()
	{
		 $this->load->model('upload_pic_db');

		$_FILES["mfile"]["tmp_name"];
				session_start();	
					
				if($_FILES["mfile"]["tmp_name"]!="")
				{


					if (move_uploaded_file($_FILES["mfile"]["tmp_name"], "assets/img/upload/".$this->session->userdata('email_').".jpg"))
					{
					

												$this->session->set_userdata('pic_path',"".$this->session->userdata('email_').".jpg");
												$this->session->set_userdata('pic_path_2',"".$this->session->userdata('email_')."_2.jpg");



			// File and new size
			$filename = "assets/img/upload/".$this->session->userdata('email_').".jpg";
			$percent = 0.025;

			// Content type
			header('Content-Type: image/jpeg');

			// Get new sizes
			list($width, $height) = getimagesize($filename);
			$newwidth =70;
			$newheight =85;
			
			// Load
			$thumb = imagecreatetruecolor($newwidth, $newheight);
			$source = imagecreatefromjpeg($filename);

			imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


		
				//imagejpeg($thumb);

			$pp2="assets/img/upload/".$this->session->userdata('email_')."_2.jpg";
			 imagejpeg($thumb,$pp2, 200); 

			 $filename_4 = "assets/img/upload/".$this->session->userdata('email_').".jpg";
			$percent_4 = 0.025;

			// Content type
			header('Content-Type: image/jpeg');

			// Get new sizes
			list($width_4, $height_4) = getimagesize($filename_4);
			$newwidth_4 =40;
			$newheight_4 =50;
			
			// Load
			$thumb_4 = imagecreatetruecolor($newwidth_4, $newheight_4);
			$source_4 = imagecreatefromjpeg($filename_4);

			imagecopyresized($thumb_4, $source_4, 0, 0, 0, 0, $newwidth_4, $newheight_4, $width_4, $height_4);


		
				//imagejpeg($thumb);

			$pp2_4="assets/img/upload/".$this->session->userdata('email_')."_3.jpg";
			 imagejpeg($thumb_4,$pp2_4, 200); 










						  
                  $this->upload_pic_db->load_pic_in_database( $this->session->userdata('email_'));
					
					}
				}
				else
				{
					if($this->session->userdata('pic_path')==false)
					{

						$this->session->set_userdata('pic_path',"default.jpg");
						$this->session->set_userdata('pic_path_2',"default_2.jpg");
					}


				}





				
				
					










				redirect('common/starter/load_home');

	}

	public function is_pic_exist()
	{

/*
		$this->load->model('upload_pic_db');
		$data["pic_exist"] =$this->upload_pic_db->is_pic_flag_up();
		$this->load->view('common/header4');
		$this->load->view('pages/home');
		$this->load->view('common/footer_h4');
*/
	}


	}

	?>