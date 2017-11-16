<?php
class Category_Menu_Item{
	public $text;
	public $href = '#';
	public $isActive = false;
	public $children = array();
}

class category_menu extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Service/ProductCategoryService');
	}

	public function getCategoryMenu(){
		/* $item1 = new Category_Menu_Item();
		$item1->text = "test1";
		$item1->isActive = true;
		
		$sub1 = new Category_Menu_Item();
		$sub1->text = "sub1";
		$sub1->isActive = true;

		$sub2 = new Category_Menu_Item();
		$sub2->text = "sub2";

		$sub3 = new Category_Menu_Item();
		$sub3->text = "sub3";

		$sub4 = new Category_Menu_Item();
		$sub4->text = "sub4";

		$sub5 = new Category_Menu_Item();
		$sub5->text = "sub5";

		$sub6 = new Category_Menu_Item();
		$sub6->text = "sub6";

		array_push($item1->children, $sub1, $sub2, $sub3, $sub4, $sub5, $sub6);

		$item2 = new Category_Menu_Item();
		$item2->text = "test2";

		$item3 = new Category_Menu_Item();
		$item3->text = "test3";

		$item4 = new Category_Menu_Item();
		$item4->text = "test4";

		$item5 = new Category_Menu_Item();
		$item5->text = "test5";

		$item6 = new Category_Menu_Item();
		$item6->text = "test6";

		$categoryMenu = array();
		array_push($categoryMenu, $item1, $item2, $item3, $item4, $item5, $item6);
		return $categoryMenu; */
		$categoryMenu = array();
		$categoryList = $this->ProductCategoryService->getAllProductCategory();
		$subCategoryList = $this->ProductCategoryService->getAllSubCategory();
		
		if(isset($categoryList) && !empty($categoryList)){
			foreach($categoryList as $categoryTO){
				$category = new Category_Menu_Item();
				$category->text = $categoryTO->category_name;
				$categoryMenu[$categoryTO->category_id] = $category;
			}
		}
		
		if(isset($subCategoryList) && !empty($subCategoryList)){
			foreach($subCategoryList as $subCategoryTO){
				if(array_key_exists($subCategoryTO->category_id, $categoryMenu)){
					log_message('debug', 'SubCategoryVO:'.$subCategoryTO->name);
					$subCategory = new Category_Menu_Item();
					$subCategory->text = $subCategoryTO->name;
					array_push($categoryMenu[$subCategoryTO->category_id]->children, $subCategory);
				}
			}
		}
		
		return $categoryMenu;
	}
}