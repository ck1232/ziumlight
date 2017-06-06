<?php
class menu extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('menu_category');
	}
	
	public function index(){
		$data['categories'] = $this->menu_category->testing();
		$data['text_category'] = 'Categories';
		$data['text_all'] = 'All text';
		$this->load->view("menu", $data);
	} 
}