<?php
class template extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('menu_category2');
		$this->load->model('footer_category');
	}
	public function index(){}
	public function header(){
		$data['menu_scripts'] = array();
		$data['menu_scripts'][0] = 'js/custom/menu.js';
		$this->load->view('header', $data);
	}
	
	public function menu(){
		$data['categories'] = $this->menu_category2->testing();
		$data['text_category'] = 'Categories';
		$data['text_all'] = 'Show All';
		$this->load->view("menu2", $data);
	}
	
	public function footer(){
		$data['categories'] = $this->footer_category->getFooterCategory();
		$data['powered'] = 'Powered By Ziumlight<br/>Copyright &copy; 2017';
		$this->load->view('footer', $data);
	}
	
	public function backToTop(){
		$this->load->view('backToTop');
	}
	
	
}