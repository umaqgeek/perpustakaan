<?php

class Site extends CI_Controller
{
	function index(){
		//$data['myValue'] = "Some string";
		//$data['anotherValue'] = "Another string";
		$this->load->model("site_model");
		$data["records"] = $this->site_model->getAll();
		$this->load->view('home',$data);
		echo "hello world";
	}
	
	/*function doSomething(){
		echo "doing something";
	}*/
	
	function about(){
		$this->load->view("about");
	}
}
