<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class BaseTO extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	
	public $version;
	
	public $created_by;
	
	public $created_on;
	
	public $updated_by;
	
	public $updated_on;
	
	public $delete_ind;
	
	public function isClass($data, $className){
		if(!$this->isNullOrEmpty($data)){
			return false;
		}else if(is_array($data)){
			foreach($data as $obj){
				if(strcmp(get_class($data), $className) != 0){
					return false;
				}
			}
			return true;
		}else {
			if(strcmp(get_class($data), $className) == 0){
				return true;
			}else{
				return false;
			}
		}
	}
		
	public function isNullOrEmpty($data){
		if(is_null($data)){
			return true;
		}else if(is_array($data)){
			return empty($data);
		}else{
			return isset($data);
		}
	}
}