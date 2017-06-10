<?php
class menu2 extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('menu_category2');
	}
	
	public function index(){
		$data['categories'] = $this->menu_category2->testing();
		$data['text_category'] = 'Categories';
		$data['text_all'] = 'Show All';
		$this->load->view("menu2", $data);
	} 
}