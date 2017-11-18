<?php
class Category_Menu_Item{
	public $text;
	public $href = 'category/';
	public $isActive = false;
	public $children = array();
}

class category_menu extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Service/ProductCategoryService');
	}

	public function getCategoryMenu($selectedCategory = null, $selectedSubCategory = null){
		$categoryMenu = array();
		$categoryList = $this->ProductCategoryService->getAllProductCategory();
		$subCategoryList = $this->ProductCategoryService->getAllSubCategory();
		
		if(isset($categoryList) && !empty($categoryList)){
			foreach($categoryList as $categoryTO){
				$category = new Category_Menu_Item();
				$category->text = $categoryTO->category_name;
				$category->href = $category->href.str_replace(" ", "_", $categoryTO->category_name);
				if($selectedSubCategory == null){
					if($selectedCategory != null && strcasecmp($category->text, $selectedCategory) == 0){
						$category->isActive = true;
					}
				}
				$categoryMenu[$categoryTO->category_id] = $category;
			}
		}
		
		if(isset($subCategoryList) && !empty($subCategoryList)){
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
		}
		
		return $categoryMenu;
	}
}