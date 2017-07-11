<?php
class Prd_Info{
	public $name;
	public $price;
	public $brand;
	public $stock;
	public $additionalInfo;
	public $discountPercent;
	public $discountPrice;
	public $optionsList;
}

class Prd_Options{
	public $name;
	public $options = array();
	function __construct($optionName){
		$this->name = $optionName;
	}
}

class Prd_SubOption{
	public $name;
	public $src;
	
	function __construct($subOptionName, $srcPath){
		$this->name = $subOptionName;
		$this->src = $srcPath;
	}
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
		$prd->optionsList = $this->getProductOptionsList();
		$prd->additionalInfo = array();
		array_push($prd->additionalInfo, 'Free Delivery');
		return $prd;
	}
	
	public function getProductOptionsList(){
		$options = array();
		$src = 'img/catalog/shoe/option.png';
		$options1 = new Prd_Options('Colour');
		array_push($options1->options, new Prd_SubOption('Red', $src), new Prd_SubOption('Green', $src));
		$options2 = new Prd_Options('Model');
		array_push($options2->options, new Prd_SubOption('Square', $src), new Prd_SubOption('Circle', $src));
		array_push($options, $options1, $options2);
		return $options;
	}
	
}