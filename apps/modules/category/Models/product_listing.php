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
// 		log_message('debug', 'getProductListing - categoryName :'.$categoryName.', subCategoryName:'.$subCategoryName);
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
// 				log_message('debug', 'getProductListing - categoryId :'.$categoryObj->category_id);
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
		return $productListing;
	}
}