<?php
class home extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('category_items');
	}
	
	public function index(){
		$data['main_content'] = 'index';
		$data['title'] = 'Ziumlight';
		$data['cards'] = array();
		//each card will get a row
		array_push($data['cards'], "hero");
		array_push($data['cards'], "home/display_item");
		$this->load->view('page', $data);
	}
	
	public function display_item(){
		$data['categories_item'] = $this->category_items->getCategoriesItem();
		$this->load->view('display_item', $data);
	}
}