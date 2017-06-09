<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class ProductCategoryTO extends BaseTO{
	function __construct(){
		parent::__construct();
	}
	public $sub_category_id;
	public $name;
	public $category_id;
	public $category_name;
	public $display_ind;
	public $is_parent;

}