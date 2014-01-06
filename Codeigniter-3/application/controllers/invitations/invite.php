<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class invite extends CI_Controller
{
	public function get_requests()
	{
		$this->load->model('load_invitations_model');
		
		$data['count_requests'] = $this->load_invitations_model->get_count_of_invitations_requests();
		$data['results'] = $this->load_invitations_model->get_invitations_from_db();
		$this->load->view('common/header4');
		$this->load->view('pages/invitations',$data);
		$this->load->view('common/footer_h4');

	}
	public function accept_()
	{

		
		$this->load->model('action_request');
		$this->action_request->accept_request();
		
		//redirect(common/starter/load_invitations);

		$this->get_requests();
	}
	public function ignore_()
	{
			 $this->load->model('action_request');
		$this->action_request->reject_request();
		$this->get_requests();

	}
	public function rep_()
	{

			$this->input->post('rep');

	}

public function rps_()
	{

			$this->input->post('rps');

	}


	public function send_request()
	{

		
		$this->load->model('action_request');
		$this->action_request->send_req();
		
		//redirect('common/starter/load_advance_search');

		
	}

	public function cancel_request()
	{
 		$this->load->model('action_request');
		$this->action_request->cancel_request_db();
		


		
	}

	public function disconnect_friend()
	{

		$this->load->model('action_request');
		$this->action_request->disconnect_friend_db();


	}
	public function accept_from_ajax()
	{

		$this->load->model('action_request');
		$this->action_request->accept_request();


	}
	public function ignore_from_ajax()
	{

	 $this->load->model('action_request');
		$this->action_request->reject_request();
	}

	public function check_req()
	{


		 $this->load->model('action_request');
		$this->action_request->give_req_count();


	}

	public function jahaz()
	{

			$pp2="assets/img/upload/".$this->session->userdata('email_')."_3.jpg";
			 imagejpeg($this->input->post('iii')); 



	}
}