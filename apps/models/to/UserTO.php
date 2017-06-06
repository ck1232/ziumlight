<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserTO extends BaseTO{
	public $user_id;
	
	public $user_name;
	
	public $password;
	
	public $status;
	
	public $name;
	
	public $email_address;
	
	public $last_login;
	
	public $enabled;
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function insert_user($data){
		if(parent::isClass($data, "UserTO")){
			log_message('debug','true');
		}else{
			log_message('debug','false');
		}
	}
}