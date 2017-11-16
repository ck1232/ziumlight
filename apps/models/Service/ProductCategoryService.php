<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProductCategoryService extends CI_Model{
	const table_product_category = 'product_category';
	const table_product_sub_category = 'product_sub_category';
	function __construct(){
		parent::__construct();
		$this->load->model('to/ProductCategoryTO');
	}
	
	public function getAllProductCategory(){
		try{
			$this->db->reconnect();
			$this->db->where('delete_ind', 'N');
			$this->db->where('display_ind', 'Y');
			$query = $this->db->get(self::table_product_category);
			
			$categoryObjList = $query->result('ProductCategoryTO');
			foreach($categoryObjList as $category){
				log_message('debug', 'Category :'.$category->category_name);
			}
			
			return $categoryObjList;
		}catch(Exception $ex){
			log_message('error',$ex->getMessage());
		}
		return null;
	}
	
	public function getAllSubCategory(){
		try{
			$this->db->where('delete_ind', 'N');
			$this->db->where('display_ind', 'Y');
			$query = $this->db->get(self::table_product_sub_category);
			$subCategoryObjList = $query->result('ProductCategoryTO');
			
			foreach($subCategoryObjList as $subCategory){
				log_message('debug', 'SubCategory:'.$subCategory->name);
			}
				
			return $subCategoryObjList;
		}catch(Exception $ex){
			log_message('error', $ex->getMessage());
		}
		
		return null;
	}
}