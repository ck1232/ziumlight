<?php
class Sort{
	public $name;
	public $isActive = false;
}

class category_sort extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function getCategorySorts($selectedSortOption){
		$categorySort = array();
		$sortOptionList = $this->session->userdata('sortOption');
		if(isset($sortOptionList) && !empty($sortOptionList)){
			foreach ($sortOptionList as $sortOption){
				$sort = new Sort();
				$sort->name = $sortOption;
				if(isset($selectedSortOption) && strcmp($sortOption, $selectedSortOption) == 0){
					$sort->isActive = true;
				}
				array_push($categorySort, $sort);
			}
		}
		return $categorySort;
	}
}