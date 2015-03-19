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
	function loginStaffProcess()
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
		$data['result'] = $this->lib_model->getUser($userID, null , false);
		$this->load->view('userEditPage.php',$data);
		
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
		$row = $this->lib_model->searchBook($bookID);
		$this->lib_model->setBookAvailable($row , 1);
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
}

?>