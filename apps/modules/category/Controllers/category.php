<?php
class category extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('breadcrumb');
		$this->load->model('category_menu');
		$this->load->model('category_sort');
		$this->load->model('product_listing');
	}

	public function index(){
		$data['main_content'] = 'category';
		$data['title'] = 'Category | Ziumlight';
		$data['cards'] = array();
		array_push($data['cards'], 'category/category_title');
		array_push($data['cards'], 'category/category_sort');
		array_push($data['cards'], 'category/category_listing');
		$this->load->view('page', $data);
	}

	public function category_menu(){
		$data['category_menu'] = $this->category_menu->getCategoryMenu();
		$this->load->view('category_menu', $data);
	}

	public function breadcrumb(){
		$data['breadcrumb'] = $this->breadcrumb->getBreadcrumb();
		$this->load->view('breadcrumb', $data);
	}
	
	public function category_title(){
		$data['category_title'] = 'Testing1';
		$data['category_description'] = 'Shop Laptop feature only the best laptop deals on the market. By comparing laptop deals from the likes of PC World, Comet, Dixons, The Link and Carphone Warehouse, Shop Laptop has the most comprehensive selection of laptops on the internet. At Shop Laptop, we pride ourselves on offering customers the very best laptop deals. From refurbished laptops to netbooks, Shop Laptop ensures that every laptop - in every colour, style, size and technical spec - is featured on the site at the lowest possible price.';
		$this->load->view('category_title', $data);
	}
	
	public function category_sort(){
		$data['sorts'] = $this->category_sort->getCategorySorts();
		$this->load->view('category_sort', $data);
	}
	
	public function category_listing(){
		$data['category_listing'] = $this->product_listing->getProductListing();
		$this->load->view('category_listing', $data);
	}
}