<?php
class Category_item{
	public $id;
	public $href = 'category/';
	public $name;
	public $img = './img/';
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
				$imageList = $this->ImageService->getImage('product_category',$categoryTO->category_id);
				if(isset($imageList) && !empty($imageList)){
					$imageTO = $imageList[0];
					$category->img = $category->img.$imageTO->file_path;
				}else{
					$category->img = $category->img."catalog/shoe/ring_light.jpg";
				}
				$categoryMenu[$categoryTO->category_id] = $category;
			}
		}
		
		/* if(isset($subCategoryList) && !empty($subCategoryList)){
			foreach($subCategoryList as $subCategoryTO){
				if(array_key_exists($subCategoryTO->category_id, $categoryMenu)){
					log_message('debug', 'SubCategoryVO:'.$subCategoryTO->name);
					$subCategory = new Category_Menu_Item();
					$subCategory->text = $subCategoryTO->name;
					$subCategory->href = $categoryMenu[$subCategoryTO->category_id]->href."/".str_replace(" ", "_",$subCategoryTO->name);
					if($selectedSubCategory != null && $selectedCategory != null){
						if($selectedCategory != null && strcasecmp($categoryMenu[$subCategoryTO->category_id]->text, $selectedCategory) == 0 &&
						$selectedSubCategory != null && strcasecmp($subCategory->text, $selectedSubCategory) == 0){
							$subCategory->isActive = true;
						}
					}
					array_push($categoryMenu[$subCategoryTO->category_id]->children, $subCategory);
				}
			}
		} */
		
		return $categoryMenu;
	}
}

