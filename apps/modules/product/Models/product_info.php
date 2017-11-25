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
		$this->load->model('Service/ProductOptionService');
		$this->load->model('to/ProductSubOptionRsTO');
		$this->load->model('to/ProductSubOptionTO');
		$this->load->model('to/ProductOptionTO');
	}
	public function getProductInfo($productCode){
		
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
		$prd->discountPrice = $productTO->unit_amt;
		$prd->price = $productTO->unit_amt;
		$prd->optionsList = $this->getProductOptionsList($productTO->product_id);
		$prd->additionalInfo = array();
		array_push($prd->additionalInfo, 'Free Delivery');
		return $prd;
	}
	
	public function getProductOptionsList($prdId){
		$options = array();
		$src = 'img/catalog/shoe/option.png';
		$productOptionTOList = $this->ProductOptionService->getOption($prdId);
		if(isset($productOptionTOList) && !empty($productOptionTOList)){
			foreach ($productOptionTOList as $productOptionTO){
				$option = new Prd_Options($productOptionTO->name);
				$productSubOptionListTO = $productOptionTO->subOptionList;
				if(!empty($productSubOptionListTO)){
					foreach($productSubOptionListTO as $subOptionTO){
						$subOption = new Prd_SubOption($subOptionTO->name, $src);
// 						log_message('debug', 'add suboption:'.$subOptionTO->name.' to :'.$option->name);
						array_push($option->options, $subOption);
					}
				}
				array_push($options, $option);
			}
		}
		
		/* $options1 = new Prd_Options('Colour');
		array_push($options1->options, new Prd_SubOption('Red', $src), new Prd_SubOption('Green', $src));
		$options2 = new Prd_Options('Model');
		array_push($options2->options, new Prd_SubOption('Square', $src), new Prd_SubOption('Circle', $src));
		array_push($options, $options1, $options2); */
		return $options;
	}
	
}