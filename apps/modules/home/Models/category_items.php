<?php
class Category_item{
	public $id;
	public $href = 'category/';
	public $name;
	public $img = './image/category/';
}

class category_items extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('Service/ProductCategoryService');
		$this->load->model('to/ProductCategoryTO');
		$this->load->model('to/ImageTO');
		$this->load->model('Service/ImageService');
	}
	public function getCategoriesItem(){
		$categoryMenu = array();
		$categoryList = $this->ProductCategoryService->getAllProductCategory();
		$subCategoryList = $this->ProductCategoryService->getAllSubCategory();
		
		if(isset($categoryList) && !empty($categoryList)){
			foreach($categoryList as $categoryTO){
				$category = new Category_item();
				$category->name = $categoryTO->category_name;
				$category->href = $category->href.str_replace(" ", "_", $categoryTO->category_name);
				$category->img = $category->img.str_replace(" ", "_", $categoryTO->category_name);
				$categoryMenu[$categoryTO->category_id] = $category;
			}
		}
		return $categoryMenu;
	}
}

