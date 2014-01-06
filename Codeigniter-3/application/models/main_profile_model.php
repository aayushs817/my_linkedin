<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main_profile_model extends CI_Model{
	function __construct(){
		parent::__construct();
							}
	public function index(){}
	public function placing_input_database()

	{
		
		$country_ = $this->security->xss_clean($this->input->post('countryCode'));// name using
		$postal_code=$this->security->xss_clean($this->input->post('postal_Code_'));// name using
		$status=$this->security->xss_clean($this->input->post('status_chooser'));// name using 1-employe 2-job 3-std

		session_start();

		$data=array( // db names => variables

					'country'=>$country_,
					'postal_code'=>$postal_code,
					'status'=>$status,
					'Email'=>$_SESSION['email_id'],
				    );
		$this->db->insert('user_demographic',$data);

switch ($status) {
			// for employee
			case '1':
			{
				$job_title_=$this->security->xss_clean($this->input->post('job_employe_input'));// name using
				$company_=$this->security->xss_clean($this->input->post('company_input'));
				$industry_=$this->security->xss_clean($this->input->post('industryChooser_name_e'));

				$data=array(
							
						'Job_title'=>$job_title_,
						'Company'=>$company_,
						'Industry'=>$industry_,
						'Email'=>$_SESSION['email_id'],
						  );
				$this->db->insert('employed',$data);
				break;
			}
			// job seeker
			case '2':
			{
				
				$recent_job_title_=$this->security->xss_clean($this->input->post('recent_job_done'));// name using
				$recent_company_=$this->security->xss_clean($this->input->post('recent_comp_done'));
				$recent_industry_=$this->security->xss_clean($this->input->post('industryChooser_name'));
				$time_start_=$this->security->xss_clean($this->input->post('startYear_0'));// name using
				$time_end_=$this->security->xss_clean($this->input->post('endYear_0'));// name using
				
				$data=array(
							
						'recent_job_title'=>$recent_job_title_,
						'recent_company'=>$recent_company_,
						'Industry'=>$recent_industry_,
						'time_start'=>$time_start_,
						'time_end'=>$time_end_,
						'Email'=>$_SESSION['email_id'],
						  );
				$this->db->insert('job_seeker',$data);
				break;
			}	
			// student
			case '3':
			{
				$instit_=$this->security->xss_clean($this->input->post('insti'));
				
				$time_start1_=$this->security->xss_clean($this->input->post('startYear_0_'));// name using
				$time_end1_=$this->security->xss_clean($this->input->post('endYear_0_'));// name using
				
				// email from the session !
				$data=array(
							
						'institution'=>$instit_,
						'start_time'=>$time_start1_,
						'end_time'=>$time_end1_,
						'Email'=>$_SESSION['email_id'],
						  );
				$this->db->insert('student',$data);
				break;
			}
			
			
		}


	
	redirect('signup/search/pageload');	

	
	}

}

	?>