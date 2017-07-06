<?php
class Prd_Info{
	public $name;
	public $price;
	public $brand;
	public $stock;
	public $additionalInfo;
	public $discountPercent;
	public $discountPrice;
}

class product_info extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function getProductInfo(){
		$prd = new Prd_Info();
		$prd->name = 'MacBook';
		$prd->brand = 'Apple';
		$prd->stock = 3;
		$prd->discountPercent = '35%';
		$prd->discountPrice = '45.00';
		$prd->price = '70.00';
		$prd->additionalInfo = array();
		array_push($prd->additionalInfo, 'Free Delivery');
		return $prd;
	}
	
}