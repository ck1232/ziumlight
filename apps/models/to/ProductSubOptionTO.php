<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class ProductSubOptionTO extends BaseTO{
	function __construct(){
		parent::__construct();
	}

	public $product_suboption_id;
	public $product_id;
	public $product_option_id;
	public $name;
	public $display_ind;
	public $code;
	
}