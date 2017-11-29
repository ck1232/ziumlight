<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class ProductOptionService extends CI_Model{
	const table_product_option = 'product_option';
	const table_product_sub_option = 'product_suboption';
	const table_product_sub_option_rs = 'product_suboption_rs';
	
	function __construct(){
		parent::__construct();
		$this->load->model('to/ProductTO');
		$this->load->model('to/ProductSubOptionRsTO');
		$this->load->model('to/ProductSubOptionTO');
		$this->load->model('to/ProductOptionTO');
	}
	
	public function getOption($prdId){
		if(is_null($prdId) || empty(trim($prdId))){
			return null;
		}
		
		$productSubOptionRsList = $this->getProductSubOptionRs($prdId);
		$productSubOptionIdList = array();
		if(!is_null($productSubOptionRsList) && !empty($productSubOptionRsList)){
			foreach($productSubOptionRsList as $productSubOptionRs){
				$subOption1Id = $productSubOptionRs->suboption1_id;
				$subOption2Id = $productSubOptionRs->suboption2_id;
				$subOption3Id = $productSubOptionRs->suboption3_id;
				if(!is_null($subOption1Id) && !empty(trim($subOption1Id)) && !array_key_exists($subOption1Id,$productSubOptionIdList)){
					$productSubOptionIdList[$subOption1Id] = $subOption1Id;
				}
				if(!is_null($subOption2Id) && !empty(trim($subOption2Id)) && !array_key_exists($subOption2Id,$productSubOptionIdList)){
					$productSubOptionIdList[$subOption2Id] = $subOption2Id;
				}
				if(!is_null($subOption3Id) && !empty(trim($subOption3Id)) && !array_key_exists($subOption3Id,$productSubOptionIdList)){
					$productSubOptionIdList[$subOption3Id] = $subOption3Id;
				}
			}
		}
		
		if(!is_null($productSubOptionIdList) && !empty($productSubOptionIdList)){
			$productSubOptionList = $this->getProductSubOption($productSubOptionIdList);
			
			$productSubOptionArrayById = array();
			$productOptionIdList = array();
			if(!empty($productSubOptionList)){
				foreach($productSubOptionList as $productSubOption){
					$productSubOptionArrayById[$productSubOption->product_suboption_id] = $productSubOption;
					array_push($productOptionIdList, $productSubOption->product_option_id);
				}
			}
			//check if all the suboption is found
			foreach ($productSubOptionIdList as $productSubOptionId){
				$productSubOption = $productSubOptionArrayById[$productSubOptionId];
				if(is_null($productSubOption)){
					//TODO throw exception
				}
			}
			
			if(!empty($productOptionIdList)){
				//get option
				$productOptionArrayById = array();
				$productOptionList = $this->getProductOption($productOptionIdList);
				if(!empty($productOptionList)){
					foreach($productOptionList as $productOption){
						$productOptionArrayById[$productOption->product_option_id] = $productOption;
					}
				}
				//check if all the option is found
				foreach ($productOptionIdList as $productOptionId){
					$productOption = $productOptionArrayById[$productOptionId];
					if(is_null($productOption)){
						//TODO throw exception
					}
				}
				
				//insert suboption into option
				foreach($productSubOptionList as $productSubOption){
					$productOption = $productOptionArrayById[$productSubOption->product_option_id];
					if(!is_null($productOption)){
						array_push($productOption->subOptionList, $productSubOption);
// 						log_message('debug', 'add suboption:'.$productSubOption->name.' to :'.$productOptionArrayById[$productSubOption->product_option_id]->name);
					}else{
						//TODO throw option cannot be found exception
					}
				}
				return $productOptionList;
			}
		}
		return null;
	}
	
	public function getProductSubOptionRs($prdId){
		$this->db->reconnect();
		$this->db->where('delete_ind', 'N');
		if($prdId != null && !is_null($prdId)){
			$this->db->where('product_id', $prdId);
		}
		$query = $this->db->get(self::table_product_sub_option_rs);
		$productSubOptionRsList = $query->result('ProductSubOptionRsTO');
		return $productSubOptionRsList;
	}
	
	public function getProductSubOption($productSubOptionIdList){
		$this->db->reconnect();
		$this->db->where('delete_ind', 'N');
		$this->db->where_in('product_suboption_id', $productSubOptionIdList);
			
		$query = $this->db->get(self::table_product_sub_option);
		$productSubOptionList = $query->result('ProductSubOptionTO');
		return $productSubOptionList;
	}
	
	public function getProductOption($prdOptionList){
		$this->db->reconnect();
		$this->db->where('delete_ind', 'N');
		if($prdOptionList != null && !is_null($prdOptionList)){
			$this->db->where_in('product_option_id', $prdOptionList);
		}
		$query = $this->db->get(self::table_product_option);
		$productOptionList = $query->result('ProductOptionTO');
		return $productOptionList;
	}
}