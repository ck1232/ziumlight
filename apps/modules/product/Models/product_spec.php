<?php
class Prd_Spec{
	public $product_info;
	public $delivery_info;
	public $qna;
	public $review;
}

class product_spec extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function getProductSpec(){
		$prd = new Prd_Spec();
		$prd->product_info = $this->getProductInfo();
		$prd->delivery_info = 'Info';
		$prd->qna = 'Q & A';
		$prd->review = 'Review';
		return $prd;
	}
	
	public function getProductInfo(){
		return "<span>Specification</span>";
	}
}