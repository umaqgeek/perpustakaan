<?php
	class Lib_model extends CI_Model
	{
		//>>>>>>>>User Function>>>>>>>>>>
		function getAllUser()
		{
			$q = $this->db->get("usertable");
			if($q->num_rows() > 0)
			{
				foreach($q->result() as $row)
				{
					$data[] = $row;
				}
				return $data;
			}else
				echo "Database Empty";
		}							
		function getUser($ic = null , $password = null , $search = false)
		{
			echo $ic;
			echo $password;
			$q = $this->db->get("usertable");
			if($q->num_rows() > 0)
			{
				if(empty($password))//approval & search
				{					
					foreach($q->result() as $row)
					{
						if($row->ic == $ic)
						{
							if(!search)
							{
								echo "user is valid";
								if($row->penalty == 0 && $row->numLoan <= 5)
								{								
									echo "<br>Loan Approved";
									return true;
								}
								else
								{
									echo "<br>Loan not Approved";
									return false;
								}
							}
							else
								return $row;
						}
					}
					echo "Register First";
					return false;
				}
				else//login process for user access
				{					
					if($q->num_rows() > 0)
					{
						foreach($q->result() as $row)
						{
							if($row->ic == $ic && $row->password == $password)
							{
								return true;
							}
						}
						return false;				
					}
				}
			}else
				echo "Database Empty";
		}		
		function setUser1($ic , $name, $password , $address , $numLoan)// staff access
		{
			$data = array(
               'name' => $name,
			   'password' => $password,
               'address' => $address,
               'numLoan' => $numLoan
            );
			$this->db->where('ic', $ic);
			$this->db->update('usertable', $data); 
		}		
		function setUser2($ic , $password , $name , $address)// user access
		{
			$data = array(
               'name' => $name,
			   'password' => $password,
               'address' => $address
               
            );
			$this->db->where('ic', $ic);
			$this->db->update('usertable', $data); 
		}
		
		function insertUser($ic,$password,$name,$address)//staff access
		{			
			$data = array(
			   'ic' => $ic ,
			   'password' => $password ,
			   'name' => $name ,
			   'address' => $address
			);			
			$this->db->insert('usertable', $data); 
			return true;
		}
		
		//>>>>>>>>Borrow Function>>>>>>>>>>
		function getAllLoan()
		{
			$this->db->order_by("loanDate", "asc");
			$q = $this->db->get("borrowtable");
			if($q->num_rows() > 0)
			{
				foreach($q->result() as $row)
				{
					$data[] = $row;
				}
				return $data;
			}
		}
		function getLoan($ic = null , $bookID = null)
		{
			$this->db->order_by("loanDate", "asc");//desc
			$q = $this->db->get("borrowtable");
			if($q->num_rows() > 0)
			{
				foreach($q->result() as $row)
				{
					if($row->ic == $ic && $row->bookID == $bookID)
					{					
						return $row;					
					}
				}
				echo "Not Found";
				return null;
			}
			else
				echo "Database Empty";
		}
		function insertLoan($userID , $bookID)
		{
			$data = array(
			   	'ic' => $userID ,
			   	'bookID' => $bookID 			   			   
			);//date default to current date			
			$this->db->insert('borrowtable', $data); 
			echo "<br />update borrowtable done";
		}
		function deleteLoan($data)
		{	
			$this->db->limit(1);
			//print_r($data);
			$this->db->where($data);
			$this->db->delete('borrowtable');			
			echo "<br />Delete borrowtable done";
		}
		
		//>>>>>>>>Book Function>>>>>>>>>>
		function getAllBook()
		{
			$q = $this->db->get("booktable");
			if($q->num_rows() > 0)
			{
				foreach($q->result() as $row)
				{
					$data[] = $row;
				}
				return $data;
			}
		}
		function searchBook($bookID)
		{
			$q = $this->db->get("booktable");
			if($q->num_rows() > 0)
			{
				foreach($q->result() as $row)
				{
					if($row->bookID == $bookID)
					{
						return $row;
					}
				}
				echo "book not found";
			}
		}
		function setBookAvailable($data , $num)
		{
			$data->available = $data->available + $num;			
			$this->db->where('bookID', $data->bookID);
			$this->db->update('booktable', $data);			
		}
		
		//>>>>>>>>Staff Function>>>>>>>>>>
		function getAllStaff()
		{
			$q = $this->db->get("stafftable");
			if($q->num_rows() > 0)
			{
				foreach($q->result() as $row)
				{
					$data[] = $row;
				}
				return $data;
			}
		}
		function getStaff($ic = null , $password = null)
		{
			echo $ic;
			echo $password;
			$q = $this->db->get("stafftable");
			if($q->num_rows() > 0)
			{
				if(empty($password))//searching staff only staff access
				{					
					foreach($q->result() as $row)
					{
						if($row->ic == $ic)
						{
							echo "huhu success";
							//return $row;
						}
					}
				}
				else//login process for staff access
				{					
					if($q->num_rows() > 0)
					{
						foreach($q->result() as $row)
						{
							if($row->staffID == $ic && $row->password == $password)
							{
								return true;
							}
						}
						return false;				
					}
				}
			}else
				echo "Database Empty";
		}		
	}
?>