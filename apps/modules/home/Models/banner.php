<?php
class Banner_Item {
	public $link;
	public $image;
	public $title;
}
class banner extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function getHeroBanner(){
		$bannerArray = array();
		
		$banner1 = new Banner_Item();
		$banner1->link = "#";
		$banner1->image = "img/catalog/demo/banners/iPhone6.jpg";
		$banner1->title = "IPHONE";
		
		$banner2 = new Banner_Item();
		$banner2->link = "#";
		$banner2->image = "img/catalog/demo/banners/macBookAir.jpg";
		$banner2->title = "ANDROID";
		
		array_push($bannerArray, $banner1);
		array_push($bannerArray, $banner2);
		return $bannerArray;
	}
	
	public function getProductSilderItems(){
		$bannerArray = array();
	
		$banner1 = new Banner_Item();
		$banner1->link = "#";
		$banner1->image = "img/catalog/demo/banners/iPhone6.jpg";
		$banner1->title = "IPHONE";
	
		$banner2 = new Banner_Item();
		$banner2->link = "#";
		$banner2->image = "img/catalog/demo/banners/macBookAir.jpg";
		$banner2->title = "ANDROID";
	
		array_push($bannerArray, $banner1);
		array_push($bannerArray, $banner2);
		return $bannerArray;
	}
}