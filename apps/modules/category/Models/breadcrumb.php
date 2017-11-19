<?php
class Crumb{
	public $href;
	public $text;
	public $isIcon = false;
}
class breadcrumb extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function getHomeCrumb(){
		$homeCrumb = new Crumb();
		$homeCrumb->href = 'home';
		$homeCrumb->isIcon = true;
		$homeCrumb->text = 'fa fa-home';
		return $homeCrumb;
	}
	
	public function getBreadcrumb(){
		$homeCrumb = new Crumb();
		$homeCrumb->href = 'home';
		$homeCrumb->isIcon = true;
		$homeCrumb->text = 'fa fa-home';

		$crumb1 = new Crumb();
		$crumb1->href = '#';
		$crumb1->text = 'testing';

		$crumb2 = new Crumb();
		$crumb2->href = '#';
		$crumb2->text = 'test';

		$breadcrumb = array();
		array_push($breadcrumb, $homeCrumb, $crumb1, $crumb2);
		return $breadcrumb;
	}
	
	public function getCategoryBreadcrumb($categoryName, $subCategoryName){
		$breadcrumb = array();
		$homeCrumb = $this->getHomeCrumb();
		array_push($breadcrumb, $homeCrumb);
		if(isset($categoryName)){
			$categoryCrumb = new Crumb();
			$categoryCrumb->text = $categoryName;
			array_push($breadcrumb, $categoryCrumb);
			if(isset($subCategoryName)){
				$categoryCrumb->href = 'category/'.$categoryName;
			}
		}
		if(isset($subCategoryName)){
			$subCategoryCrumb = new Crumb();
			$subCategoryCrumb->href = null;
			$subCategoryCrumb->text = $subCategoryName;
			array_push($breadcrumb, $subCategoryCrumb);
		}
		return $breadcrumb;
	}
	
}