<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  advance_search extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function index(){}
	public function is_connection( $E1, $E2)
 {

 	$this->db->where('To',$E2);
 	$this->db->where('From',$E1);
 	 $query_7 = $this->db->get('requests');

  if($query_7->num_rows == 1)
  {
  	return 2;
}


$this->db->where('To',$E1);
 	$this->db->where('From',$E2);
 	 $query_8 = $this->db->get('requests');

  if($query_8->num_rows == 1)
  {
  	return 3;
}
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
	

	public function quick_search()
	{
		$key_word=$_REQUEST['search'];
			
		$this->db->like('FirstName',$key_word);
		$this->db->or_like('LastName',$key_word);
	
		$this->db->from('user');
		$this->db->join('user_demographic','user_demographic.Email=user.Email');
		$this->db->join('profile_pic','profile_pic.Email=user_demographic.Email');
		$ans=$this->db->get();
		
	if($ans->num_rows()>0)
		{
			foreach ($ans->result() as $row )
	{
			
		$state_check=$row->status;
		$email_check=$row->Email;

		switch ($state_check) 
		{
			// for employee
			case '1':
			{
					$this->db->from('user');
					$this->db->join('employed','employed.Email=user.Email');
					$this->db->where('employed.Email',$row->Email);
					$query=$this->db->get();
				if($query->num_rows()>0)
				{
					$row_e=$query->row();
					echo $row->FirstName." ".$row->LastName;
					echo "%";
					echo $row_e->Job_title;
					echo "%";
					echo $row_e->Company;
					echo "%";
					echo $row->is_upload;
					echo "%";

					echo $row->Email;

					echo "+";

				}
			break;
			}
			case '2':
			{
					$this->db->from('user');
					$this->db->join('job_seeker','job_seeker.Email=user.Email');
					$this->db->where('job_seeker.Email',$row->Email);
				$query=$this->db->get();
			if($query->num_rows()>0)
				{
					$row_e=$query->row();
					
					echo $row->FirstName." ".$row->LastName;
					echo "%";
					echo $row_e->recent_job_title;
					echo "%";
					echo $row_e->recent_company;
					echo "%";
					echo $row->is_upload;
					echo "%";

					echo $row->Email;
					echo "+";
				}
			break;
			
			} 
			case '3':
			{
					$this->db->from('user');
					$this->db->join('student','student.Email=user.Email');
					$this->db->where('student.Email',$row->Email);
					$query=$this->db->get();
			if($query->num_rows()>0)
				{
					$row_e=$query->row();
					echo $row->FirstName." ".$row->LastName;
					echo "%";
					echo "Student";
					echo "%";
					echo $row_e->institution;
					echo "%";
					echo $row->is_upload;
					echo "%";

					echo $row->Email;
					echo "+";
				}
			break;
			
			}
		}
	

	}

	    }

	    echo "^";

		//--done for searching the titles n names of componies n titles
		
		//---Employe---

				$this->db->like('Company',$key_word);
				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('employed','employed.Email=user_demographic.Email');
				$ans=$this->db->get();
		
		if($ans->num_rows()>0)
		{
				foreach ($ans->result() as $row )
				{
						echo $row->Company;
						echo "+";
				}
		}
				
			//--JOB SEEKER---
				
				$this->db->like('recent_company',$key_word);
				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('job_seeker','job_seeker.Email=user_demographic.Email');
				$ans=$this->db->get();

				if($ans->num_rows()>0)
				{
					foreach ($ans->result() as $row )
					{
							echo $row->recent_company;
							echo "+";	
					}
				}

				echo "^";

				$this->db->like('Industry',$key_word);
				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('employed','employed.Email=user_demographic.Email');
				$ans=$this->db->get();
		
				if($ans->num_rows()>0)
				{
						foreach ($ans->result() as $row )
						{
							echo $row->Industry;
							echo "+";
						
						}
				}

				//--JOB SEEKER---
				$this->db->like('Industry',$key_word);
				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('job_seeker','job_seeker.Email=user_demographic.Email');
				$ans=$this->db->get();

				if($ans->num_rows()>0)
				{
					foreach ($ans->result() as $row )
					{
							echo $row->Industry;
							echo "+";
					}
				}
				echo "^";

				//------INSTITIUTON----
				$this->db->like('institution',$key_word);
				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('student','student.Email=user_demographic.Email');
				$ans=$this->db->get();

				if($ans->num_rows()>0)
				{
					foreach ($ans->result() as $row )
					{
							echo $row->institution;
							echo "+";	
					}
				}

		}

























	/*public function quick_search()
	{
		$key_word=$_POST['searching'];
			
		$this->db->like('FirstName',$key_word);
		$this->db->or_like('LastName',$key_word);
	
		$this->db->from('user');
		$this->db->join('user_demographic','user_demographic.Email=user.Email');
		$ans=$this->db->get();
		
	if($ans->num_rows()>0)
		{
			foreach ($ans->result() as $row )
	{
			
		$state_check=$row->status;
		$email_check=$row->Email;

		switch ($state_check) 
		{
			// for employee
			case '1':
			{
					$this->db->from('user');
					$this->db->join('employed','employed.Email=user.Email');
					$query=$this->db->get();
				if($query->num_rows()>0)
				{
					$row_e=$query->row();
					echo $row->FirstName;
					echo $row->LastName;
					echo $row->Email;
					echo $row_e->Job_title;
					echo $row_e->Company;
				}
			break;
			}
			case '2':
			{
					$this->db->from('user');
					$this->db->join('job_seeker','job_seeker.Email=user.Email');
				$query=$this->db->get();
			if($query->num_rows()>0)
				{
					$row_e=$query->row();
					
					echo $row->FirstName;
					echo $row->LastName;
					echo $row->Email;
					echo $row->country;
					echo $row_e->recent_job_title;
					echo $row_e->recent_company;
				}
			break;
			
			} 
			case '3':
			{
					$this->db->from('user');
					$this->db->join('student','student.Email=user.Email');
					$query=$this->db->get();
			if($query->num_rows()>0)
				{
					$row_e=$query->row();
					echo $row->FirstName;
					echo $row->LastName;
					echo $row->Email;
					echo $row_e->institution;
				}
			break;
			
			}
		}
	

	}

	    }
		//--done for searching the titles n names of componies n titles
		
		//---Employe---

				$this->db->like('Company',$key_word);
				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('employed','employed.Email=user_demographic.Email');
				$ans=$this->db->get();
		
		if($ans->num_rows()>0)
		{
				foreach ($ans->result() as $row )
				{
						echo $row->Company;
				}
		}
				
			//--JOB SEEKER---
				
				$this->db->like('recent_company',$key_word);
				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('job_seeker','job_seeker.Email=user_demographic.Email');
				$ans=$this->db->get();

				if($ans->num_rows()>0)
				{
					foreach ($ans->result() as $row )
					{
							echo $row->recent_company;
					}
				}
				$this->db->like('Industry',$key_word);
				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('employed','employed.Email=user_demographic.Email');
				$ans=$this->db->get();
		
				if($ans->num_rows()>0)
				{
						foreach ($ans->result() as $row )
						{
							echo $row->Industry;
						}
				}

				//--JOB SEEKER---
				$this->db->like('Industry',$key_word);
				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('job_seeker','job_seeker.Email=user_demographic.Email');
				$ans=$this->db->get();

				if($ans->num_rows()>0)
				{
					foreach ($ans->result() as $row )
					{
							echo $row->Industry;
					}
				}
				//------INSTITIUTON----
				$this->db->like('institution',$key_word);
				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('student','student.Email=user_demographic.Email');
				$ans=$this->db->get();

				if($ans->num_rows()>0)
				{
					foreach ($ans->result() as $row )
					{
							echo $row->institution;	
					}
				}

		}
*/

































public function searching_database(){
	$count=0;
	$key_word=$_POST['key_word'];
	if (!empty( $_POST['key_word']))
	{		
		$this->db->like('FirstName',$key_word);
		$this->db->or_like('LastName',$key_word);
	}	
	else
	{
	if (!empty( $_POST['fname']))
		{$this->db->where('FirstName',$_POST['fname']);}
	if (!empty( $_POST['lname']))
		{$this->db->where('LastName',$_POST['lname']);}
	if (!empty( $_POST['email']))
		{$this->db->where('user.Email',$_POST['email']);}
	}
	if (!empty( $_POST['country']))
		$this->db->where('user_demographic.country',$_POST['country']);

		$this->db->from('user');
		$this->db->join('user_demographic','user_demographic.Email=user.Email');
		$this->db->join('profile_pic','profile_pic.Email=user_demographic.Email');
		$ans=$this->db->get();

		if($ans->num_rows()>0)
		{
			foreach ($ans->result() as $row ){
			
		$state_check=$row->status;
		$email_check=$row->Email;

		switch ($state_check) 
		{
			// for employee
			// aik condition has to be done.. n that is kae agr wo student k school 
			// ko enter kar dae to case 1 ar 2 ksi hal mae nae chalae gah.
			case '1':
			{
					$this->db->from('user');
					$this->db->join('employed','employed.Email=user.Email');
					$this->db->where('employed.Email',$row->Email);
						if (!empty( $_POST['title']))
							$this->db->where('employed.Job_title',$_POST['title']);
					$query=$this->db->get();
				if($query->num_rows()>0)
				{
					$row_e=$query->row();
					
					
					echo $row->FirstName." ".$row->LastName;
					echo "$";					
				
					echo $row_e->Job_title;
					echo "$";
					echo $row_e->Company;
					echo "$";
					
					echo $row->country;
					echo "$";
					echo $row_e->Industry;
					
					echo "$";

					echo $row->is_upload;
					echo "$";

					echo $row->Email;
					
$is_fr=$this->is_connection($this->session->userdata('email_'),$row->Email);
echo "$";
echo $is_fr;

					echo "/";
					$count++;
				}
			break;
			}
			case '2':
			{
					$this->db->from('user');
					$this->db->join('job_seeker','job_seeker.Email=user.Email');
					$this->db->where('job_seeker.Email',$row->Email);
					if (!empty( $_POST['title']))
					$this->db->where('job_seeker.recent_job_title',$_POST['title']);
				$query=$this->db->get();
			if($query->num_rows()>0)
				{
					$row_e=$query->row();
					
					
					echo $row->FirstName." ".$row->LastName;
					echo "$";
				
					echo $row_e->recent_job_title;
					echo "$";
					echo $row_e->recent_company;
					echo "$";
					echo $row->country;
					echo "$";
					echo $row_e->Industry;
					echo "$";
					echo $row->is_upload;
					echo "$";

					echo $row_e->Email;
					
$is_fr=$this->is_connection($this->session->userdata('email_'),$row->Email);
echo "$";
echo $is_fr;

					echo "/";
					$count++;
				}
			break;
			
			} 
			case '3':
			{
					$this->db->from('user');
					$this->db->join('student','student.Email=user.Email');
					$this->db->where('student.Email',$row->Email);
					$this->db->where('student.Email',$email_check);
					if (!empty( $_POST['instit']))
						$this->db->where('student.institution',$_POST['instit']);
				$query=$this->db->get();
			if($query->num_rows()>0)
				{
					$row_e=$query->row();

										
					echo $row->FirstName." ".$row->LastName;
					echo "$";
					echo "Student";
					echo "$";
					echo $row_e->institution;
					echo "$";
					echo $row->country;
					echo "$";
					echo " ";
					echo "$";
						//echo $row->Email;
					$count++;

					echo $row->is_upload;
					echo "$";

					echo $row_e->Email;
					
$is_fr=$this->is_connection($this->session->userdata('email_'),$row->Email);
echo "$";
echo $is_fr;


					echo "/";
				}

			break;
			
			}

	
			
	}

	
}
		}
		//--done for searching the titles n names of componies n titles
	if (!empty( $_POST['key_word']))
		{		
/*$this->db->like("(Job_title= '$key_word' OR Company = '$key_word' OR Industry = '$key_word') ");*/
				
				$this->db->like('Job_title',$key_word);
				$this->db->or_like('Company',$key_word);
				$this->db->or_like('Industry',$key_word);

				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('employed','employed.Email=user_demographic.Email');
				$this->db->join('profile_pic','profile_pic.Email=employed.Email');
				$ans=$this->db->get();
		
		if($ans->num_rows()>0)
		{
				foreach ($ans->result() as $row )
				{
					
						echo $row->FirstName." ".$row->LastName;
						echo "$";
					
						echo $row->Job_title;
						echo "$";
						echo $row->Company;
						echo "$";
						echo $row->country;
						echo "$";
						echo $row->Industry;
						echo "$";
					echo $row->is_upload;
					echo "$";

					echo $row->Email;
					$is_fr=$this->is_connection($this->session->userdata('email_'),$row->Email);
echo "$";
echo $is_fr;
						echo "/";
						$count++;
				}
		}
				//--JOB SEEKER---
				$this->db->like('recent_job_title',$key_word);
				$this->db->or_like('recent_company',$key_word);
				$this->db->or_like('Industry',$key_word);

				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('job_seeker','job_seeker.Email=user_demographic.Email');
				$this->db->join('profile_pic','profile_pic.Email=job_seeker.Email');
				$ans=$this->db->get();

				if($ans->num_rows()>0)
				{
					foreach ($ans->result() as $row )
					{
					
						echo $row->FirstName." ".$row->LastName;
						echo "$";
					
						echo $row->recent_job_title;
						echo "$";
						echo $row->recent_company;
						echo "$";
						echo $row->country;
						echo "$";
						echo $row->Industry;
						echo "$";
						echo $row->is_upload;
						echo "$";
						echo $row->Email;
					$is_fr=$this->is_connection($this->session->userdata('email_'),$row->Email);
echo "$";
echo $is_fr;

						echo "/";						
						$count++;

					}
				}

				//------STUDENT----

				$this->db->like('institution',$key_word);
				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('student','student.Email=user_demographic.Email');
				$this->db->join('profile_pic','profile_pic.Email=student.Email');
				$ans=$this->db->get();

				if($ans->num_rows()>0)
				{
					foreach ($ans->result() as $row )
					{
						echo $row->is_upload;
					echo "$";

					echo $row->Email;
					echo "$";
					
						echo $row->FirstName." ".$row->LastName;
						echo "$";
						echo "Student";
						echo "$";
						echo $row->institution;
						echo "$";
						echo $row->country;
						echo "$";
						echo " ";
						echo "$";
						echo $row->is_upload;
						echo "$";
						echo $row->Email;
$is_fr=$this->is_connection($this->session->userdata('email_'),$row->Email);
echo "$";
echo $is_fr;


							
						echo "/";
							$count++;
					}
				}

		}
		echo $count;
		echo "/";
	}















































































































































































	/*public function searching_database()
	{
	$count=0;
	$key_word=$_POST['key_word'];
	if (!empty( $_POST['key_word']))
	{		
		//$this->db->like("(FirstName= '$key_word' OR LastName = '$key_word') ");
		$this->db->like('FirstName',$key_word);
		$this->db->or_like('LastName',$key_word);
	}	
	else
	{
	if (!empty( $_POST['fname']))
		{$this->db->where('FirstName',$_POST['fname']);}
	if (!empty( $_POST['lname']))
		{$this->db->where('LastName',$_POST['lname']);}
	if (!empty( $_POST['email']))
		{$this->db->where('user.Email',$_POST['email']);}
	}
	if (!empty( $_POST['country']))
		$this->db->where('user_demographic.country',$_POST['country']);

		$this->db->from('user');
		$this->db->join('user_demographic','user_demographic.Email=user.Email');
		$ans=$this->db->get();

		if($ans->num_rows()>0)
		{
			foreach ($ans->result() as $row ){
			
		$state_check=$row->status;
		$email_check=$row->Email;

		switch ($state_check) 
		{
			// for employee
			// aik condition has to be done.. n that is kae agr wo student k school 
			// ko enter kar dae to case 1 ar 2 ksi hal mae nae chalae gah.
			case '1':
			{
					$this->db->from('user');
					$this->db->join('employed','employed.Email=user.Email');
						if (!empty( $_POST['title']))
							$this->db->where('employed.Job_title',$_POST['title']);
					$query=$this->db->get();
				if($query->num_rows()>0)
				{
					$row_e=$query->row();
					echo "			im a employe=======";	
					echo $row->FirstName;
					echo $row->LastName;
					echo $row->Email;
					echo $row->country;
					echo $row_e->Job_title;
					echo $row_e->Company;
					$count++;
				}
			break;
			}
			case '2':
			{
					$this->db->from('user');
					$this->db->join('job_seeker','job_seeker.Email=user.Email');
					if (!empty( $_POST['title']))
					$this->db->where('job_seeker.recent_job_title',$_POST['title']);
				$query=$this->db->get();
			if($query->num_rows()>0)
				{
					$row_e=$query->row();
					echo "		im a self employe======";
					
					echo $row->FirstName;
					echo $row->LastName;
					echo $row->Email;
					echo $row->country;
					echo $row_e->recent_job_title;
					echo $row_e->recent_company;
					$count++;
				}
			break;
			
			} 
			case '3':
			{
					$this->db->from('user');
					$this->db->join('student','student.Email=user.Email');
					$this->db->where('student.Email',$email_check);
					if (!empty( $_POST['instit']))
						$this->db->where('student.institution',$_POST['instit']);
				$query=$this->db->get();
			if($query->num_rows()>0)
				{
					$row_e=$query->row();
					echo "     im a std=====";
					echo $row->FirstName;
					echo $row->LastName;
					echo $row->Email;
					//echo $row->country;
					echo $row_e->institution;
					$count++;
				}
			break;
			
			}

	
			
	}
	echo "==========================================================end=====================================================";

}

		}
		//--done for searching the titles n names of componies n titles
	if (!empty( $_POST['key_word']))
		{		

				
				$this->db->like('Job_title',$key_word);
				$this->db->or_like('Company',$key_word);
				$this->db->or_like('Industry',$key_word);

				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('employed','employed.Email=user_demographic.Email');
				$ans=$this->db->get();
		
		if($ans->num_rows()>0)
		{
				foreach ($ans->result() as $row )
				{

						echo "*********************im a employe****************\t\t";
						echo $row->Email;
						echo $row->country;
						echo $row->Job_title;
						echo $row->Company;
						echo $row->Industry;
						$count++;
				}
		}
				//--JOB SEEKER---
				$this->db->like('recent_job_title',$key_word);
				$this->db->or_like('recent_company',$key_word);
				$this->db->or_like('Industry',$key_word);

				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('job_seeker','job_seeker.Email=user_demographic.Email');
				$ans=$this->db->get();

				if($ans->num_rows()>0)
				{
					foreach ($ans->result() as $row )
					{

							echo "************JOB SEKKEr***********\t\t";
							echo $row->Email;
							echo $row->country;
							echo $row->recent_job_title;
							echo $row->recent_company;
							$count++;
					}
				}
				//------STUDENT----

				$this->db->like('institution',$key_word);
				$this->db->from('user');
				$this->db->join('user_demographic','user_demographic.Email=user.Email');
				$this->db->join('student','student.Email=user_demographic.Email');
				$ans=$this->db->get();

				if($ans->num_rows()>0)
				{
					foreach ($ans->result() as $row )
					{

							echo "************Student***********\t\t";
							echo $row->Email;
							echo $row->country;
							echo $row->institution;
							$count++;
					}
				}

		}
		echo "total row were";
		echo $count;
	}*/
}
?>

