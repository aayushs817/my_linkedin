<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Action_request extends CI_Model{
	function __construct(){
		parent::__construct();
	}


		public function accept_request()
		{

			$this->db->where('To',$this->session->userdata('email_'));
			$this->db->where('From',$this->input->post('accp'));

			$this->db->delete('requests');

			$my=$this->session->userdata('email_');
			$re=$this->input->post('accp');
			$data_10 = array(
   				 'Email1' =>$my ,
  				  'Email2' => $re 
 				);

			$this->db->insert('friends', $data_10); 	

		}

		


		public function reject_request()
		{

			$this->db->where('To',$this->session->userdata('email_'));
			$this->db->where('From',$this->input->post('ign'));
			$this->db->delete('requests');

			
		}

		public function send_req(){


			$my=$this->session->userdata('email_');
			$re=$this->input->post('u_to_conn');
			$mms=$this->input->post('txt_msg_2');
							$data_10 = array(
   				 'To' =>$re ,
  				  'From' => $my, 
  				  'msg'=> $mms
 				);

			$this->db->insert('requests', $data_10); 	



		}

		public function cancel_request_db()
		{


				$this->db->where('To',$this->input->post('cnc'));
			$this->db->where('From',$this->session->userdata('email_'));
			$this->db->delete('requests');

		}

		public function disconnect_friend_db()
		{



			$this->db->where('Email1',$this->session->userdata('email_'));
			$this->db->where('Email2',$this->input->post('d_f'));
			$this->db->delete('friends');
			$this->db->where('Email2',$this->session->userdata('email_'));
			$this->db->where('Email1',$this->input->post('d_f'));
			$this->db->delete('friends');

		}

		public function give_req_count()
		{
				$this->db->like('To', $this->session->userdata('email_'));
				$this->db->from('requests');
				echo $this->db->count_all_results();
				echo "/";

		}

		public function show_connects_db(){





			
			$this->db->where('Email1',$this->session->userdata('email_'));
			
				$r_f_1=$this->db->get('friends');

				if($r_f_1->num_rows)
				{
			
					foreach ($r_f_1->result() as $row )
				{
					echo $row->Email2;
					echo "/";


				}

				}


			$this->db->where('Email2',$this->session->userdata('email_'));
		
			$r_f_2=$this->db->get('friends');
			if($r_f_2->num_rows)
				{
			
					foreach ($r_f_2->result() as $row )
				{
					echo $row->Email1;
					echo "/";


				}

				}





		}
}