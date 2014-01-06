<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Like extends CI_Model{
	function __construct(){
		parent::__construct();
	}


	public function likes_count()
 {
 
   $this->db->where('status_id',$this->input->post('status_c'));
   $this->db->where('From',$this->session->userdata('email_'));
   $q_re_3=$this->db->get('likes');



	if($q_re_3->num_rows()==0)
	{

		echo 0;
		echo "$";
		echo 0;
	}
	else
	{
		echo 1;
		echo "$";
		echo 1;
	}

	
   echo "$";
   
  				 $this->db->where('status_id', $this->input->post('status_c'));
				$this->db->from('likes');
				echo $this->db->count_all_results();
   
   echo "$";
   
}
	public function did_i_like(){

		$this->db->where('status_id',$this->input->post('like_status'));
			$this->db->where('From',$this->session->userdata('email_'));
			$q_re_3=$this->db->get('likes');

			if($q_re_3->num_rows()==0)
			{ return 0;
			}
			else
			{
				return 1;

			}


	}

		public function like_it_db(){


/*			$this->db->where('Email2',$this->session->userdata('email_'));
			$this->db->where('Email1',$this->input->post('d_f'));
			$this->db->delete('friends');

*/

			if($this->input->post('curr_txt')=="unlike")
			{
				$this->db->where('status_id',$this->input->post('like_status'));
			$this->db->where('From',$this->session->userdata('email_'));
			$this->db->delete('likes');



			}
			else
			{



			$this->db->where('status_id',$this->input->post('like_status'));
			$this->db->where('From',$this->session->userdata('email_'));
			$q_re=$this->db->get('likes');

			if($q_re->num_rows()==0)
			{ 

		 			 			$my=$this->session->userdata('email_');
			$re=$this->input->post('like_status');
			$data_11 = array(
   				 'status_id' =>$re ,
  				  'From' => $my
 				);

			$this->db->insert('likes', $data_11);
			}
		 	}
		}


		public function like_by_db(){


			$this->db->where('status_id',$this->input->post('like_b'));
		
			$q_re_2=$this->db->get('likes');

			if($q_re_2->num_rows)
		{
			
			foreach ($q_re_2->result() as $row )
			{
					echo $row->From;
					echo "/";


			}

		}
	}


}

?>