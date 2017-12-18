<?php
class home extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('category_items');
		$this->load->model('banner');
		/* $this->output->enable_profiler(TRUE);
		$config['queries'] = TRUE; */
	}
	
	public function index(){
		$data['main_content'] = 'index';
		$data['title'] = 'Ziumlight';
		$data['cards'] = array();
		//each card will get a row
		array_push($data['cards'], "home/hero");
		array_push($data['cards'], "home/list_category");
		array_push($data['cards'], "home/display_item");
		array_push($data['cards'], "home/itemSilder");
		$this->load->view('page', $data);
	}
	
	public function display_item(){
		$data['new_item'] = $this->category_items->getCategoriesItem();
		$this->load->view('display_item', $data);
	}
	
	public function hero(){
		$data['banners'] = $this->banner->getHeroBanner();
		$this->load->view("hero", $data);
	}
	
	public function itemSilder(){
		$data['productSilderItems'] = $this->banner->getProductSilderItems();
		$this->load->view("silder", $data);
	}
	
	public function list_category(){
		$data['categoryList'] = $this->category_items->getCategoriesItem();
		$this->load->view("list_category", $data);
	}
}