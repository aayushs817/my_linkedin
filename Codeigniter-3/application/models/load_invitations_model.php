<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Load_invitations_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}



	public function get_invitations_from_db()
	{
		$my_id = $this->session->userdata('email_');

		$this->db->select('*');
		$this->db->from('requests r');
		$this->db->join('user u', 'u.Email = r.From');
		$this->db->join('student s','u.Email=s.Email','left');
		$this->db->join('employed e','u.Email=e.Email','left');
		$this->db->join('job_seeker j','u.Email=j.Email','left');
		$this->db->join('profile_pic p','u.Email = p.Email','left');
		$this->db->order_by("r.time", "desc"); 
			
		$this->db->where('r.To =',$my_id);
		$query=$this->db->get();	

		if( $query->num_rows() )
		{

			return $query->result();
		}
			

	}
	public function get_count_of_invitations_requests()
	{
		$my_id2 = $this->session->userdata('email_');

		return $this->db->where('To =', $my_id2)->count_all_results('requests');
	}






}
?>