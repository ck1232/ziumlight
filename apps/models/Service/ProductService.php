<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class ProductService extends CI_Model{
	const table_product = 'product';
	
	function __construct(){
		parent::__construct();
		$this->load->model('to/ProductTO');
	}
	
	public function getProductTO($productCode){
		if(!isset($productCode) || empty(trim($productCode))){
			return null;
		}
		$this->db->reconnect();
		$this->db->where('delete_ind', 'N');
		if($productCode != null && !is_null($productCode)){
			$this->db->where('product_code', $productCode);
		}
		$query = $this->db->get(self::table_product);
		$productTOList = $query->result('ProductTO');
		return $productTOList;
	}
	
	public function getProductTOBySubCategoryIdList($subCategoryIdList = null){
		$this->db->reconnect();
		$this->db->where('delete_ind', 'N');
		if($subCategoryIdList != null && !empty($subCategoryIdList)){
			$this->db->where_in('sub_category_id', $subCategoryIdList);
		}
		
		$query = $this->db->get(self::table_product);
		$productTOList = $query->result('ProductTO');
		return $productTOList;
	}
}