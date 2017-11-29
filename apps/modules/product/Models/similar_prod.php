<?php
class Similar_Product{
	public $id;
	public $href;
	public $name;
	public $img;
	public $price;
	public $discount_price;
}

class similar_prod extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function getSimilarProduct(){
		$prd1 = new Similar_Product();
		$prd1->name = 'Product 1';
		$prd1->price = '45.00';
		$prd1->img = "img/catalog/light/light2.jpg";
		$similarPrdArray = array();
		for($i=1;$i<9;$i++){
			
			$prd = new Similar_Product();
			if($i%2 == 0){
				$prd->discount_price = '30.00';
			}
			$prd->name = 'Product'.$i;
			$prd->price = '45.00';
			$prd->img = "img/catalog/light/light1.png";
			$prd->href = '#';
			array_push($similarPrdArray, $prd);
		}
		return $similarPrdArray; // return array
	}
}