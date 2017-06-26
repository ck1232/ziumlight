<?php
class Sort{
	public $name;
	public $href = '#';
	public $isActive = false;
}

class category_sort extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function getCategorySorts(){
		$sort1 = new Sort();
		$sort1->name = 'Featured';
		$sort1->isActive = true;
		$sort2 = new Sort();
		$sort2->name = 'Shipping';
		$sort3 = new Sort();
		$sort3->name = 'Price';
		$sort4 = new Sort();
		$sort4->name = 'Popular';
		$categorySort = array();
		array_push($categorySort, $sort1, $sort2, $sort3, $sort4);
		return $categorySort;
	}
}