<?php
	class Lib_model extends CI_Model
	{
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
			}
		}
		
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
		
		function validStaffID($staffID , $password)
		{
			$q = $this->db->get("stafftable");
			if($q->num_rows() > 0)
			{
				foreach($q->result() as $row)
				{
					if($row->staffID == $staffID && $row->password == $password)
					{
						echo "huhu success";
					}
				}				
			}
		}
		
		function addUser($ic , $password , $name , $address )//staff access
		{
			$data = array(
			   'ic' => $ic ,
			   'password' => $password ,
			   'name' => $name ,
			   'numLoan' => '0'
			);			
			$this->db->insert('usertable', $data); 

		}
		
		function getUser($ic)
		{
			$q = $this->db->get("usertable");
			if($q->num_rows() > 0)
			{
				foreach($q->result() as $row)
				{
					if($row->ic == $ic)
					{
						echo "huhu success";
					}
				}				
			}
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
		
		function getAllLoan()
		{
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
	}
?>
