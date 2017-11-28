<?php
class Prd_Image{
	public $name;
	public $href = '#';
	public $src;
}

class product_image extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function getProductImage(){
		$prd1 = new Prd_Image();
		$prd1->name = 'prd1';
		$prd1->src = "img/catalog/light/light1.png";
		
		$prd2 = new Prd_Image();
		$prd2->name = 'prd2';
		$prd2->src = "img/catalog/light/light2.jpg";
		
		$prd3 = new Prd_Image();
		$prd3->name = 'prd3';
		$prd3->src = "img/catalog/light/light3.png";
		
		$prd4 = new Prd_Image();
		$prd4->name = 'prd4';
		$prd4->src = "img/catalog/light/light4.jpg";
		
		$prd5 = new Prd_Image();
		$prd5->name = 'prd5';
		$prd5->src = "img/catalog/light/light5.jpg";
		
		$prd6 = new Prd_Image();
		$prd6->name = 'prd6';
		$prd6->src = "img/catalog/light/light6.gif";
		
		$prd7 = new Prd_Image();
		$prd7->name = 'prd7';
		$prd7->src = "img/catalog/light/light7.PNG";
		
		$productListing= array();
		array_push($productListing, $prd1, $prd2, $prd3, $prd4, $prd5, $prd6, $prd7);
		return $productListing;
	}
}