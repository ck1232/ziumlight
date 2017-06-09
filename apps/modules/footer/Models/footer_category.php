<?php
class footer_info{
	
	public $name;
	public $href;
	public $children = array();
	
	function __construct($name, $href=""){
		$this->name = $name;
		$this->href = $href;
	}
}
class footer_category extends CI_Model{
	public function getFooterCategory(){
		
		$info = new footer_info('Information', null);
		$info1 = new footer_info('About Us','About_Us');
		$info2 = new footer_info('Delivery Information','Delivery_Information');
		$info3 = new footer_info('Privacy Policy','Privacy_Policy');
		$info4 = new footer_info('Terms & Conditions','Terms_And_Conditions');
		array_push($info->children, $info1, $info2, $info3, $info4);
		
		$custService = new footer_info('Customer Service', null);
		$service1 = new footer_info('Contact Us', 'Contact_Us');
		$service2 = new footer_info('Returns', 'Returns');
		$service3 = new footer_info('Site Map', 'Site_Map');
		array_push($custService->children, $service1, $service2, $service3);
		
		$extras = new footer_info('Extras');
		$extras1 = new footer_info('Brands', 'Brands');
		array_push($extras->children, $extras1);
		
		$footer_array = array($info, $custService, $extras);
		return $footer_array;
	}
}