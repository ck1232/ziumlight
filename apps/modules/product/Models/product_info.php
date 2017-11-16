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
	const table_product = 'product';
	function __construct(){
		parent::__construct();
		$this->load->model('to/ProductTO');
		$this->load->model('Service/ProductService');
	}
	public function getProductInfo($productCode){
		
		/* $this->db->reconnect();
		$this->db->where('delete_ind', 'N');
		if($productCode != null && !is_null($productCode)){
			$this->db->where('product_code', $productCode);
		}
		$query = $this->db->get(self::table_product);
		$productTOList = $query->result('ProductTO'); */
		$productTOList = $this->ProductService->getProductTO($productCode);
		if(!isset($productTOList) || empty($productTOList)){
			return null;
		}
		$productTO = $productTOList[0];
		$prd = new Prd_Info();
		$prd->name = $productTO->product_name;
		$prd->brand = 'Apple';
		$prd->stock = 3;
		$prd->discountPercent = '35%';
		$prd->discountPrice = '45.00';
		$prd->price = $productTO->unit_amt;
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