<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class ProductOptionTO extends BaseTO{
	function __construct(){
		parent::__construct();
	}

	public $product_option_id;
	public $name;
	public $display_ind;
	public $subOptionList = array();
}