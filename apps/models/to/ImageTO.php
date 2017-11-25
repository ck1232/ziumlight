<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class ImageTO extends BaseTO{
	function __construct(){
		parent::__construct();
	}
	
	public $image_link_rs_id;
	public $ref_type;
	public $ref_id;
	public $image_link_id;
	public $sequence;
	public $file_link_id;
	public $file_path;
}