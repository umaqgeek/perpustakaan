<?php

class Library extends CI_Controller
{
	function index()
	{
		$this->load->view("libHome");		
	}
	
	//>>>>>>>>Staff Function>>>>>>>>>>
	function loginStaff()
	{
		echo "hai login staff";
		$this->load->view("staffLogin");
	}
	function loginStaffProcess()// for staff login
	{
		$this->load->model("lib_model");
		if($this->lib_model->getStaff($this->input->post('name'),$this->input->post('pass')))
		{
			$this->load->view("staffPage");
		}		
	}
	
	//>>>>>>>>User Function>>>>>>>>>>	
	function loginUser()
	{
		echo "hai login user";
		$this->load->view("userLogin");
	}
	function loginUserProcess()
	{
		$this->load->model("lib_model");
		if($this->lib_model->getUser($this->input->post('name'),$this->input->post('pass'),false))
		{
			$this->load->view("userPage");
		}		
	}
	function registerUser()
	{
		$userID = $this->input->post('userID');
		$password = $this->input->post('pass');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$this->load->model("lib_model");
		if($this->lib_model->insertUser($userID,$password, $name , $address))
			echo "<br />Register Done";
		else
			echo "<br>Register Error";
	}

	
	function searchUser()//staff access
	{
		$userID = $this->input->post('userID');
		$search = $this->input->post("search");
		$searchAll = $this->input->post('listAll');
		$this->load->model('lib_model');
		if($search)
		{
			$data['result'] = $this->lib_model->getUser($userID , null,true);
		}
		else
		{
			$data['result'] = $this->lib_model->getAllUser();
		}
		$this->load->view('userList' , $data);
	}
	function viewUserProfile()
	{
		$userID = $this->input->post("userID");
		$this->load->model('lib_model');
		$data['result'] = $this->lib_model->getUser($userID, null , true);		
		$this->load->view('userEditPage',$data);
	}
	function updateUserProfile($level)//case true : staff else false
	{
		$ic = $this->input->post('userID');
		$password = $this->input->post('pass');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$numLoan = $this->input->post('numLoan');
		$penalty = $this->input->post('penalty');	
		$this->load->model('lib_model');
		if($level)
			$this->lib_model->setUser($ic , $password , $name , $address , $numLoan ,$penalty);
		else
			$this->lib_model->setUser($ic , $password , $name , $address);
		echo "update done\n";
		$this->load->view('staffPage');
	}
	
	function deleteUser()
	{
		$userID = $this->input->post("userID");
		$data = array(
			"ic" => $userID
		);
		$this->load->model("lib_model");
		$this->lib_model->deleteUser($data);
		$this->load->view('staffPage');
	}
	//>>>>>>>>>BooksRegister>>>>>>>>>>>>
	function AddBook()
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
		$this->load->model("lib_model");
		if($this->lib_model->insertBooks($Type, $Bname, $author, $BooksID, $Purchase, $Q_book))
			echo "<br />The book has been add";
		else
			echo "<br />Insert failed!";
	}
	
	//>>>>>>>>Borrow Function>>>>>>>>>>	
	function approvalLoanProcess()
	{
		$userID = $this->input->post('userID');
		$bookID = $this->input->post('bookCode');
		$this->load->model("lib_model");
		if($this->lib_model->getUser($userID,null,false))
		{
			$row = $this->lib_model->searchBook($bookID);
			if($row->available != 0)
			{
				$this->lib_model->setBookAvailable($row , -1);
				$this->lib_model->insertLoan($userID , $bookID);
			}
			else
			{
				echo "Book was Not available";	
			}
		}
	}	
	function returnProcess()
	{
		$userID = $this->input->post('userID');
		$bookID = $this->input->post('bookCode');
		$this->load->model("lib_model");
		$data = $this->lib_model->getLoan($userID,$bookID);
		$this->load->helper("date");
		$loanDayTime = $data->loanDate;	
		$today = new DateTime(date("y-m-d",now()));
		$loanDayTime = new DateTime($loanDayTime);
		$loanDay = new DateTime($loanDayTime->format("y-m-d"));//remove time "h:i:s		
		$diff = $loanDay->diff($today);
		$diff = $diff->format("%a days");//%R for +ve , %a for diff
		$data = array(
			"userID" => $userID,
			"bookID" => $bookID,
			"loanDay" => $loanDay->format("d-m-y"),
			"loanDayTime" => $data->loanDate,
			"amountOFDay" =>$diff
			);
		$this->load->view("returnApprovePage",$data);		
		//date_timestamp_get(date_create());
		//echo date_default_timezone_get();
	}
	function deleteBorrowProcess()
	{
		$userID = $this->input->post('userID');
		$bookID = $this->input->post('bookID');
		$loanDate = $this->input->post('loanDayTime');
		$data = array(
			   	'ic' => $userID ,
			   	'bookID' => $bookID ,
				'loanDate' => $loanDate			   			   
			);
		$this->load->model("lib_model");
		$this->lib_model->deleteLoan($data);
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
	function directRegisterPage()
	{
		$this->load->view("registerPage");
	}
	function directReturnPage()
	{
		$this->load->view("returnPage");
	}
	function directSearchPage()
	{
		$this->load->view("searchPage");
	}
	function directListPage()
	{
		$this->load->view("userList");
	}
	function directBooksRegister()
	{
		$this->load->view("BooksRegister");
	}
	function test()
	{
		$this->load->view("test");
	}
}

?>