<?php
class Category{
	public $href;
	public $name;
	public $children;
	public $column = 0;
}

class menu_category extends CI_Model{
	public function testing(){
		
		//parent category
		$category1 = new Category();
		$category1->href = "home";
		$category1->name = "Home";
		
		//child category
		$subcategory1 = new Category();
		$subcategory1->name = "Test";
		$subcategory1->href = "Test";
		
		//child category
		$subcategory3 = new Category();
		$subcategory3->name = "Test 1";
		$subcategory3->href = "Test 1";
		
		$category1->children = array($subcategory1, $subcategory3); //init child category to children attribute of $category1
		$category1->column = 1; // no of columns for each parent
		
		//parent category
		$category2 = new Category();
		$category2->href = "users";
		$category2->name = "Users";
		
		//child category
		$subcategory2 = new Category();
		$subcategory2->name = "testing parent 2";
		$subcategory2->href = "Test parent 2";
		
		$category2->children = array($subcategory2); //init child category to children attribute of $category2
		$category2->column = 1;
		
		
		//add all category to array
		$category = array($category1, $category2);
		return $category; // return array
	}
}

