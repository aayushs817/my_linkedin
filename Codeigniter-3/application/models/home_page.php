<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home_page extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function index(){}
	public function check_is_end(){


		$this->db->select('id');
			$this->db->from('status');

			//$this->db->order_by('id','as');
			$this->db->limit(1);
			$ru=$this->db->get();
			foreach($ru->result() as $row)
					{
						if($row->id==$_POST['last_statusi'])
						{

							echo "1";
												}
						else
						{
							echo "0";
							

						}
					
					}

	}
	public function add_status(){


//$email=$this->session->userdata('email_');

									$status=$_POST['status_'];
									$time=$_POST['time'];
									$email=$_POST['email'];
									$priv=$_POST['privacy'];
									$atach_path=$_POST['attachment_path'];
									$is_attach=$_POST['atach_bit'];

		$data=array( // db names => variables

					'Email'=>$email,
					'status'=>$status,
					'time_uploading'=>$time,
					'is_attached'=>$is_attach,
					'privacy'=>$priv
				    );
		$this->db->insert('status',$data);
							echo $atach_path;		
						//in case of aattachment									
								if($is_attach==1)
									{
										$this->db->where('Email', $email);
										$this->db->where('time_uploading', $time);
	
										$this->db->from('status');
										$query=$this->db->get();
										$row_e=$query->row();

										$val=$row_e->id;


									$data=array( // db names => variables

												'id'=>$val,
												'path'=>$atach_path
											    );
									$this->db->insert('attachment',$data);
												
									
									}
							// returning status id	
								$this->db->from('status');
								$this->db->where('time_uploading',$time);
								$this->db->where('Email',$email);
								$query=$this->db->get();
								$row=$query->row();
								echo $row->id;



								}
	
//========================================================ADD COMNETS===============================================

								public function add_comments(){

									$s_id=$_POST['status_id'];
									$time=$_POST['time'];
									$from_email=$this->session->userdata('email_');
									//$from_email=$_POST['comenter_email'];
									$com_txt=$_POST['coment_txt'];
								//	$atach_path=$_POST['attachment_path'];
								//	$is_attach=$_POST['atach_bit'];
									$is_attach=0;

		$data=array( // db names => variables

					'From'=>$from_email,
					's_id'=>$s_id,
					'comment_txt'=>$com_txt,
					'time'=>$time,
					'is_attached'=>$is_attach,
					
				    );
		$this->db->insert('comment',$data);
									
						//in case of aattachment									
							/*	if($is_attach==1)
									{
										$this->db->where('From', $from_email);
										$this->db->where('time', $time);
										$this->db->where('s_id', $s_id);
	
										$this->db->from('comment');
										$query=$this->db->get();
										$row_e=$query->row();

										$val=$row_e->c_id;


									$data=array( // db names => variables

												'c_id'=>$val,
												'path'=>$atach_path
											    );
									$this->db->insert('comment_attachment',$data);
												
									}*/

							// returning coment id	
								$this->db->from('comment');
								$this->db->where('s_id',$s_id);
								$this->db->where('time',$time);
								$this->db->where('From',$from_email);
								$query=$this->db->get();
								$row=$query->row();
								echo $row->c_id;
								

								}
				//======================CHECKING FRIENDS ===================
public function is_connection( $E1, $E2)
{

				  $this->db->where('Email1', $E1);
				  $this->db->where('Email2', $E2);
				  
				  
				  $query_4 = $this->db->get('friends');

				  if($query_4->num_rows == 1)
				  {
				  	 return 1;
				  }
				  else
				  {

					 $this->db->where('Email1', $E2);
					 $this->db->where('Email2', $E1);
					  
					  
					 $query_5 = $this->db->get('friends');
						  if($query_5->num_rows == 1)
						  {
						   return 1;

						  }
				  }

				  return 0;

}

		//=======STATUS SHOWING N COMMENT DISPLAYING========
								public function show_homepage()
								{

									
									//$email=$_POST['email'];	
									$email=$this->session->userdata('email_');
									$limit=$_POST['limit'];
									$last_statusid=$this->input->post('last_statusid');

										$this->db->select('id');
										$this->db->from('status');
										//$wh_e_r_e = "privacy='2' OR Email='rao@rao.rao'";
										//$this->db->where($wh_e_r_e);
										
									
										if($last_statusid!=0)//means not 1st load
										{
											$arr_=array('id <' => $last_statusid);
													$this->db->where($arr_);
													$this->db->order_by('id','desc');
										}
										if($last_statusid==0)
										{	
												//$this->db->where("privacy ='2' OR Email='".$this->session->userdata('email_')."'");
												$this->db->order_by('id','desc');
									

										}

										$this->db->limit($limit);
										$query=$this->db->get();

										if($query->num_rows()>0)
											{
													foreach ($query->result() as $row )
														{
																	$this->display_a_record($row->id,$email);
																	echo "(*)@#(*)";
														}

											}
									
									}


public function display_a_record($statusid,$email)
{
	
						$this->db->from('status');
						$this->db->where('id',$statusid);
						$query=$this->db->get();
						if($query->num_rows()>0)
						{
								$row=$query->row();
								// checks for own status , privacy of status is public, if in friends.(stautus email,sesion email)
				if( ($email==$row->Email) || ($row->privacy==2) || ( ($row->privacy==1) && ( ($this->is_connection($row->Email,$email))==1) ) )
								{

									echo $row->id; // echo status id
									echo "~/#$%&/~";
									
									//user table info 
									
									$this->db->from('user');
									$this->db->where('Email',$row->Email);
									$query_user=$this->db->get();
										if($query_user->num_rows()>0)
										{
												$row_user=$query_user->row();
												echo $row_user->FirstName;
												echo "~/#$%&/~";
	
												echo $row_user->LastName;
												echo "~/#$%&/~";
												
												echo $row_user->Email;
												echo "~/#$%&/~";
										}
									


									//profile pic info 
									
									$this->db->from('profile_pic');
									$this->db->where('Email',$row->Email);
									$query_pic=$this->db->get();
										if($query_pic->num_rows()>0)
										{
												$row_pic=$query_pic->row();
												$row_pic->is_upload; // bit of uploading pic 
											if($row_pic->is_upload==1){
												$pic_pathhh=$row_pic->Email."_2.jpg";
												echo $pic_pathhh;
												echo "~/#$%&/~";
											}
												else{
														echo "default.jpg";
													echo "~/#$%&/~	";
												}	

										}
							// status display
										echo $row->status;
										echo "~/#$%&/~";
										//echo $row->time_uploading;
										
										date_default_timezone_set("Asia/Karachi"); 
										$datetime1 = new DateTime($row->time_uploading);
  									
										$datetime2 = new DateTime(date('d-m-Y H:i:s'));

										$interval = $datetime2->diff($datetime1);
										
  									
										
										echo $interval->format('%H:%i:%s');
										//echo $datetime2->format('%Y-%m-%d %H:%i:%s');
										echo "~/#$%&/~";

									// checks for attachment bit.
										if($row->is_attached==0)
											{echo "0";echo "~/#$%&/~";}// no attachment
										else if($row->is_attached==1)
											{
												$this->db->from('attachment');
												$this->db->where('attachment.id',$row->id);
												$query_attach=$this->db->get();
												if($query_attach->num_rows()>0)
												{
														$row_attach=$query_attach->row();
														echo "1";
														echo "~/#$%&/~";
														echo $row_attach->path;
														echo "~/#$%&/~";
												}
											
											}
												
										echo "{**/}";

									// comments displaying
											$comment_to=0;

											$this->db->from('comment');
											$this->db->where('comment.s_id',$row->id);
											$query_comment=$this->db->get();
											if($query_comment->num_rows()>0)
												{
													foreach ($query_comment->result() as $row_comment )
													{
														$comment_to++;
														echo $row_comment->From;
														echo "~/#$%&/~";	
									
									// geting data of commenter from users n profile pic.

													//user table info 
															
															$this->db->from('user');
															$this->db->where('Email',$row_comment->From);
															$query_c_user=$this->db->get();
																if($query_c_user->num_rows()>0)
																{
																		$row_c_user=$query_c_user->row();
																		echo $row_c_user->FirstName;
																		echo "~/#$%&/~";	
																		echo $row_c_user->LastName;
																		echo "~/#$%&/~";
																}
															
													//profile pic info 
															
															$this->db->from('profile_pic');
															$this->db->where('Email',$row_comment->From);
															$query_c_pic=$this->db->get();
																if($query_c_pic->num_rows()>0)
																{
																		$row_c_pic=$query_c_pic->row();
																		if($row_c_pic->is_upload==1){
																			$pic_pathhh=$row_c_user->Email."_3.jpg";

																			echo $pic_pathhh;
																			echo "~/#$%&/~";}
																			else{
																					echo "default.jpg";
																					echo "~/#$%&/~";
																			}
																}


										//coment details other

														echo $row_comment->comment_txt;

														echo "~/#$%&/~";
														echo $row_comment->time;
														echo "~/#$%&/~";
													/*	//=== comments attachment..
														if($row_comment->is_attached==0)
															{echo " ";}// no attachment
														else if($row_comment->is_attached==1)
															{
																$this->db->from('comment_attachment');
																$this->db->where('comment_attachment.c_id',$row_comment->c_id);
																$query_comment_attach=$this->db->get();
																if($query_comment_attach->num_rows()>0)
																{
																		$row_comentattach=$query_comment_attach->row();
																		echo $row_comentattach->path;
																		echo "!";
																}
															
															}
															*/
															echo "=|+^|";
													}
													echo $comment_to;
													echo "|_|=|_=";
												}


								}


					}


	 }


}
?>