<?php
	class Lib_model_book extends CI_Model
	{	
		function dbReg($data == null)//version 1.0
		{
			$this->db->where($data);
			$q = $this->db->get('booktable');//nama table
			if ($q->num_rows > 0)//betul jika ada
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		function updateOrInsert($data, $bool = true)//true = insert
		{
			if ($bool)
			{		
					/*$data = array(
			   			"BooksType" => $data['BooksType'],//left=db, right=input 
						"BooksNAme" => $data['BooksName'],
						"Author" => $data['AuthorsName'],
						"bookID" => $data['No'],
						"Purchase" => $data['rm'],
						"Q_book" => $data['Q_book']
						);*/
					$this->db->insert('booktable', $data);
					echo "the book you entered has been add";
			}
			else
			{
				$where = "BooksType = '".$data['BooksType']."' AND BooksNAme = '".$data['BooksName']."' AND Author = '".$data['AuthorsName']."' AND bookID = '".$data['No']."' ";
				$Q = $this->db->get("booktable");
				if($Q->num_rows() > 0)
				{
					foreach($Q->result() as $row)
					{
						$arr = array("Q_book" => $data["Q_book"] + $row->Q_book);
						$this->db->where($where);
						$this->db->update('booktable', $arr);
					}
					echo "the book you entered has been update";
				}
			}
		}
		//>>>>>>>>Book Function>>>>>>>>>>
/*		function insertBooks($Type, $Bname, $author, $BooksID, $Purchase, $Q_book)
		{			
			$data = array(
			   'BooksType' => $Type ,
			   'BooksNAme' => $Bname ,
			   'Author' => $author ,
			   'bookID' => $BooksID ,
			   'Purchase' => $Purchase,
			   'Q_book' => $Q_book
			);
			$this->db->where('bookID', $BooksID);
			$q = $this->db->get("booktable");
			$row = $this->scanID($BooksID);
			$r = $this->scanName($Bname);
			if($row==true)//($q->num_rows() == 0)
			{
				if ($r==true)
				$row->Q_book = $row->Q_book + $data['Q_book'];
				print_r($row);
				$this->db->where('bookID', $row->bookID);
				$this->db->update('booktable', $row);
			}
			else{
				$this->db->insert('booktable', $data); 
				return true;				
				
				//$row = $this->scanName($Bname);
				
			}
		}
				
		Public function getAllBook()
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
		Public function scan($bookID, $BooksNAme)
		{
			$s = $this->db->get("booktable");
			if($s->num_rows() > 0)
			{
				foreach($s->result() as $row)
				{
					if($row->bookID == $bookID && $row->BooksNAme == $BooksNAme)
					{
						return $row;
					}
				}
				echo "book not found";
			}
		}
		
		Public function scanID($bookID)
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
		
		Public function scanName($Bname)
		{
			$n = $this->db->get("booktable");
			if($n->num_rows() > 0)
			{
				foreach($n->result() as $row)
				{
					if($row->BooksNAme == $Bname)
					{
						return $row;
					}
				}
				echo "book not found";
			}
		}
	*/	
		
	}
?>