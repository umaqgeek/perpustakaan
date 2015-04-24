<?php

class Lib_book extends CI_Controller
{	
	//>>>>>>>>>BooksRegister>>>>>>>>>>>>
	function AddBook()
	{
		echo "hai staff";
		$this->load->view("BooksRegister");
	}
	function getReg()
	{
		$data = $this->input->post();
		$arr = array (
				"BooksType" => $data['BooksType'],//left=db, right=input 
				"BooksName" => $data['BooksName'],
				"Author" => $data['AuthorsName'],
				"bookID" => $data['No'],
				"Purchase" => $data['rm'],
				"Q_book" => $data['Q_book']
				);
				
		$this->load->model('lib_model_book');//nama model
		$this->lib_model_book->updateOrInsert($data, $this->lib_model_book->dbReg($arr));
	}
	/*function AddBook()
	{
		echo "hai staff";
		$this->load->view("BooksRegister");
	}
	function BooksRegisterProcess()
	{
		$Type = $this->input->post('BooksType');
		$Bname = $this->input->post('BooksName');
		$author = $this->input->post('AuthorsName');
		$BooksID = $this->input->post('No');
		$Purchase = $this->input->post('rm');
		$Q_book = $this->input->post('Q_book');
		$this->load->model("lib_model_book");
		if($this->lib_model_book->insertBooks($Type, $Bname, $author, $BooksID, $Purchase, $Q_book))
			echo "<br />The book has been add";
		else
			echo "<br />Insert failed!";
	}
*/
}

?>