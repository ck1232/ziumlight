<?php
class Listing_Item{
	public $name;
	public $href = '#';
	public $image;
	public $discount_price;
	public $price;
}

class product_listing extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function getProductListing(){
		$prd1 = new Listing_Item();
		$prd1->name = 'prd1';
		$prd1->image = 'img/catalog/shoe/ring_light.jpg';
		/* $prd1->discount_price = '20'; */
		$prd1->price = '40';
		
		$prd2 = new Listing_Item();
		$prd2->name = 'prd2';
		$prd2->image = "img/catalog/shoe/ring_light.jpg";
		$prd2->discount_price = '20';
		$prd2->price = '40';
		
		$prd3 = new Listing_Item();
		$prd3->name = 'prd3';
		$prd3->image = "img/catalog/shoe/ring_light.jpg";
		$prd3->discount_price = '20';
		$prd3->price = '40';
		
		$prd4 = new Listing_Item();
		$prd4->name = 'prd4';
		$prd4->image = "img/catalog/shoe/ring_light.jpg";
		$prd4->discount_price = '20';
		$prd4->price = '40';
		
		$prd5 = new Listing_Item();
		$prd5->name = 'prd5';
		$prd5->image = "img/catalog/shoe/ring_light.jpg";
		$prd5->discount_price = '20';
		$prd5->price = '40';
		
		$prd6 = new Listing_Item();
		$prd6->name = 'prd6';
		$prd6->image = "img/catalog/shoe/ring_light.jpg";
		$prd6->discount_price = '20';
		$prd6->price = '40';
		
		$prd7 = new Listing_Item();
		$prd7->name = 'prd7';
		$prd7->image = "img/catalog/shoe/ring_light.jpg";
		$prd7->discount_price = '20';
		$prd7->price = '40';
		
		$productListing= array();
		array_push($productListing, $prd1, $prd2, $prd3, $prd4, $prd5, $prd6, $prd7);
		return $productListing;
	}
}