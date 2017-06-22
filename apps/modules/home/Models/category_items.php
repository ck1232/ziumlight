<?php
class Category_item{
	public $id;
	public $href;
	public $name;
	public $img;
}

class category_items extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function getCategoriesItem(){
		
		//parent category
		$category1 = new Category_item();
		$category1->href = "home";
		$category1->name = "Home";
		$category1->img = "img/catalog/shoe/ring_light.jpg";
		
		//parent category
		$category2 = new Category_item();
		$category2->href = "users";
		$category2->name = "Users";
		$category2->img = "img/catalog/shoe/ring_light.jpg";
		//parent category
		$category3 = new Category_item();
		$category3->href = "users";
		$category3->name = "Users";
		$category3->img = "img/catalog/shoe/ring_light.jpg";
		//parent category
		$category4 = new Category_item();
		$category4->href = "users";
		$category4->name = "Users";
		$category4->img = "img/catalog/shoe/ring_light.jpg";
		//parent category
		$category5 = new Category_item();
		$category5->href = "users";
		$category5->name = "Users";
		$category5->img = "img/catalog/shoe/ring_light.jpg";
		$categoryArray = array();
		array_push($categoryArray, $category1, $category2, $category3, $category4, $category5);
		return $categoryArray; // return array
	}
}

