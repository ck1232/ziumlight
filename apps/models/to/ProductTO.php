<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class ProductTO extends BaseTO{
	function __construct(){
		parent::__construct();
	}
	public $product_id;
	public $product_name;
	public $unit_amt;
	public $weight;
	public $sub_category_id;
	public $description;
	public $product_code;
	public $paypal_id;
	
	//non db obj
	

}