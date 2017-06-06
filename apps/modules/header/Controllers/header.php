<?php
class header extends MX_Controller{
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['scripts'] = array();
		$data['scripts'][0] = 'js/custom/menu.js';
		$this->load->view('header', $data);
	}
}