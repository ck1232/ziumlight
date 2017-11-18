<?php
class Listing_Item{
	public $name;
	public $href = '#';
	public $image;
	public $discount_price;
	public $price;
	public $prd_code;
}

class product_listing extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('Service/ProductCategoryService');
		$this->load->model('Service/ProductService');
	}

	public function getProductListing($categoryName = null, $subCategoryName = null){
		log_message('debug', 'getProductListing - categoryName :'.$categoryName.', subCategoryName:'.$subCategoryName);
		$productListing= array();
		$subCategoryIdList = array();
		if($subCategoryName != null){
			$subCategoryObj = $this->ProductCategoryService->getProductSubCategoryBySubcategoryName($subCategoryName);
			if($subCategoryObj != null && isset($subCategoryObj->sub_category_id)){
				array_push($subCategoryIdList, $subCategoryObj->sub_category_id);
			}else{
				array_push($subCategoryIdList, 0);
			}
		}else if($categoryName != null){
			$categoryObj = $this->ProductCategoryService->getProductCategoryIdByCategoryName($categoryName);
			if($categoryObj != null && isset($categoryObj->category_id)){
				log_message('debug', 'getProductListing - categoryId :'.$categoryObj->category_id);
				$subCategoryObjList = $this->ProductCategoryService->getProductSubCategoryListByCategoryId($categoryObj->category_id);
				if($subCategoryObjList != null && !empty($subCategoryObjList)){
					foreach($subCategoryObjList as $subCategoryObject){
						if($subCategoryObject != null && isset($subCategoryObject->sub_category_id)){
							array_push($subCategoryIdList, $subCategoryObject->sub_category_id);
						}
					}
				}
			}
			if(empty($subCategoryIdList)){
				array_push($subCategoryIdList, 0);
			}
		}
		
		$productTOList = $this->ProductService->getProductTOBySubCategoryIdList($subCategoryIdList);
		
		if($productTOList != null && !empty($productTOList)){
			foreach ($productTOList as $productTO){
				$prd = new Listing_Item();
				$prd->name = $productTO->product_name;
				$prd->price = $productTO->unit_amt;
				$prd->image = 'img/catalog/shoe/ring_light.jpg';
				$prd->prd_code = $productTO->product_code;
				array_push($productListing, $prd);
			}
		}
		/* $prd1 = new Listing_Item();
		$prd1->name = 'prd1';
		$prd1->image = 'img/catalog/shoe/ring_light.jpg';
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
		
		
		array_push($productListing, $prd1, $prd2, $prd3, $prd4, $prd5, $prd6, $prd7); */
		return $productListing;
	}
}