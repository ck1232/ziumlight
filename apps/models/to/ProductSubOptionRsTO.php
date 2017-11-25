<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class ProductSubOptionRsTO extends BaseTO{
	function __construct(){
		parent::__construct();
	}
	
	public $product_suboption_rs_id;
	public $product_id;
	public $suboption1_id;
	public $suboption2_id;
	public $suboption3_id;
}