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
	
	public function getBreadcrumb(){
		$homeCrumb = new Crumb();
		$homeCrumb->href = '#';
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
	
}