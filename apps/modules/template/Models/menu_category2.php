<?php
class MenuCategory{
	public $id;
	public $href;
	public $name;
	public $children;
	public $column = 1;
}

class menu_category2 extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('service/ProductCategoryService');
	}
	public function testing(){
		
		//parent category
		$category1 = new MenuCategory();
		$category1->href = "home";
		$category1->name = "Home";
		
		//child category
		$subcategory1 = new MenuCategory();
		$subcategory1->name = "Test";
		$subcategory1->href = "Test";
		
		//child category
		$subcategory3 = new MenuCategory();
		$subcategory3->name = "Test 1";
		$subcategory3->href = "Test 1";
		
		$category1->children = array($subcategory1, $subcategory3); //init child category to children attribute of $category1
		$category1->column = 1; // no of columns for each parent
		
		//parent category
		$category2 = new MenuCategory();
		$category2->href = "users";
		$category2->name = "Users";
		
		//child category
		$subcategory2 = new MenuCategory();
		$subcategory2->name = "testing parent 2";
		$subcategory2->href = "Test parent 2";
		
		$category2->children = array($subcategory2); //init child category to children attribute of $category2
		$category2->column = 1;
		
		
		//add all category to array
		$category = array($category1, $category2);
		$categoryDbList = $this->ProductCategoryService->getAllProductCategory();
		$subCategoryDbList = $this->ProductCategoryService->getAllSubCategory();
		
		$categoryArray = array();
		if(isset($categoryDbList) && !empty($categoryDbList)){
			foreach ($categoryDbList as $categoryDb){
				if(strcmp($categoryDb->display_ind , 'Y') == 0 && strcmp($categoryDb->is_parent, 'Y') == 0){
					$category = $this->convertCategoryDbToCategory($categoryDb);
					if(isset($category)){
						$categoryArray[$category->id] = $category;
					}
				}
			}
		}
		
		if(isset($subCategoryDbList) && !empty($subCategoryDbList)){
			foreach ($subCategoryDbList as $subCategoryDb){
				if(strcmp($subCategoryDb->display_ind , 'Y') == 0){
					$subCategory = $this->convertSubCategoryDbToSubCategory($subCategoryDb);
					if(isset($subCategory) && array_key_exists($subCategoryDb->category_id,$categoryArray)){
						array_push($categoryArray[$subCategoryDb->category_id]->children , $subCategory);
// 						$categoryArray[$subCategoryDb->category_id]->column++;
					}
				}
			}
		}
		return $categoryArray; // return array
	}
	
	private function convertCategoryDbToCategory($categoryDb){
		if(isset($categoryDb)){
			$category = new MenuCategory();
			$category->name = $categoryDb->category_name;
			$category->id = $categoryDb->category_id;
			$category->href = $categoryDb->category_name;
			$category->children = array();
			return $category;
		}
		return null;
	}
	
	private function convertSubCategoryDbToSubCategory($subCategoryDb){
		if(isset($subCategoryDb)){
			$subCategory = new MenuCategory();
			$subCategory->name = $subCategoryDb->name;
			$subCategory->id = $subCategoryDb->sub_category_id;
			$subCategory->href = $subCategoryDb->name;
			return $subCategory;
		}
		return null;
	}
}

