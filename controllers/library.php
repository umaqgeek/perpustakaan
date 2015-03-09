<?php

class Library extends CI_Controller
{
	function index()
	{
		$this->load->view("libHome");		
	}	
	function loginStaff()
	{
		echo "hai login staff";
		$this->load->view("staffLogin");
	}
	function loginStaffProcess()
	{
		$this->load->model("lib_model");
		if($this->lib_model->getUser($this->input->post('name'),$this->input->post('pass')))
		{
			$this->load->view("staffPage");
		}		
	}
	function loginUser()
	{
		echo "hai login user";
		$this->load->view("userLogin");
	}
	function loginUserProcess()
	{
		$this->load->model("lib_model");
		if($this->lib_model->getUser($this->input->post('name'),$this->input->post('pass')))
		{
			$this->load->view("userPage");
		}		
	}
	function approvalLoanProcess()
	{
		$userID = $this->input->post('userID');
		$bookID = $this->input->post('bookCode');
		$this->load->model("lib_model");
		if($this->lib_model->getUser($userID,null))
		{
			$row = $this->lib_model->searchBook($bookID);
			if($row->available != 0)
			{
				$this->lib_model->setBookAvailable($row);
				$this->lib_model->insertLoan($userID , $bookID);
			}
			else
			{
				echo "Book was Not available";	
			}
		}
	}
	
	//>>>>>>>>>>>>>>>>>>>>>Direct page>>>>>>>>>>>>>>>>>>>>>
	
	function directUserPage()
	{
		$this->load->view("userPage");
	}
	function directStaffPage()
	{
		$this->load->view("staffPage");
	}
	function directLoanPage()
	{
		$this->load->view("loanPage");
	}
}

?>
