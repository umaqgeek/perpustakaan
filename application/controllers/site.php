<?php

class Site extends Controller{
	
	function index(){
		$this->load->model('lib_model');
		$data['rows'] = $this->lib_model->getAll();
		
		$this->load->view('libHome', $data);
	}
}

?>