<?php
class category extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('breadcrumb');
		$this->load->model('category_menu');
		$this->load->model('category_sort');
		$this->load->model('product_listing');
		$sortOption = array('Featured', 'Shipping', 'Price', 'Popular');
		$this->load->library('session');
		$data = array('sortOption'=>$sortOption);
		$this->session->set_userdata($data);
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
		$category = $this->revertString($this->uri->segment(2));
		$subCategory = $this->revertString($this->uri->segment(3));
		$data['category_menu'] = $this->category_menu->getCategoryMenu($category, $subCategory);
		$this->load->view('category_menu', $data);
	}

	public function breadcrumb(){
		$data['breadcrumb'] = $this->breadcrumb->getBreadcrumb();
		$this->load->view('breadcrumb', $data);
	}
	
	public function category_title(){
		$category = $this->revertString($this->uri->segment(2));
		$subCategory = $this->revertString($this->uri->segment(3));
		if($subCategory != null){
			$data['category_title'] = $subCategory;
		}else if($category != null){
			$data['category_title'] = $category;
		}else{
			$data['category_title'] = "Category";
		}
		
		$data['category_description'] = 'Shop Laptop feature only the best laptop deals on the market. By comparing laptop deals from the likes of PC World, Comet, Dixons, The Link and Carphone Warehouse, Shop Laptop has the most comprehensive selection of laptops on the internet. At Shop Laptop, we pride ourselves on offering customers the very best laptop deals. From refurbished laptops to netbooks, Shop Laptop ensures that every laptop - in every colour, style, size and technical spec - is featured on the site at the lowest possible price.';
		$this->load->view('category_title', $data);
	}
	
	public function category_sort(){
		$sortOption = null;
		if(isset($_POST['sortOption'])){
			$sortOption = $_POST['sortOption'];
		}
		log_message('debug', 'category_sort - sortOption :'.$sortOption);
		$data['sorts'] = $this->category_sort->getCategorySorts($sortOption);
		$this->load->view('category_sort', $data);
	}
	
	public function category_listing(){
		$sortOption = null;
		if(isset($_POST['sortOption'])){
			$sortOption = $_POST['sortOption'];
		}
		$category = $this->revertString($this->uri->segment(2));
		$subCategory = $this->revertString($this->uri->segment(3));
		log_message('debug', 'category_listing - categoryName :'.$category.', subCategoryName:'.$subCategory);
		$data['category_listing'] = $this->product_listing->getProductListing($category, $subCategory);
		$this->load->view('category_listing', $data);
	}
	
	public function displayCategoryListing($category, $subCategory=null){
// 		$category = $this->uri->segment(2);
// 		$subCategory = $this->uri->segment(3);
		log_message('debug', 'Category:'.$category);
		log_message('debug', 'SubCategory:'.$subCategory);
		$this->index();
	}
	
	public function revertString($str){
		if($str != null){
			return str_replace("_", " ", $str);
		}
		return $str;
	}
}