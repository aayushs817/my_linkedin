public function searching_database()
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
/*$this->db->like("(Job_title= '$key_word' OR Company = '$key_word' OR Industry = '$key_word') ");*/
				
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
	}