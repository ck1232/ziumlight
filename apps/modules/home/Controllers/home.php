<?php
class home extends MX_Controller{
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['main_content'] = 'index';
		$data['title'] = 'Ziumlight';
		$this->load->view('page', $data);
	}
}