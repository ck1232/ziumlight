<?php
class product extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('product_image');
		$this->load->model('product_info');
		$this->load->model('product_spec');
	}
	
	public function index(){
		$data['main_content'] = 'product';
		$data['title'] = 'Product | Ziumlight';
		$data['cards'] = array();
		$data['scripts'] = array();
		$data['scripts'][0] = 'js/custom/product.js';
		//each card will get a row
		/* array_push($data['cards'], "home/hero");
		array_push($data['cards'], "home/display_item");
		array_push($data['cards'], "home/itemSilder"); */
		$this->load->view('page', $data);
	}
	
	public function product_image(){
		$data['image_list'] = $this->product_image->getProductImage();
		$this->load->view('product_image', $data);
	}
	
	public function product_info(){
		$data['productInfo'] = $this->product_info->getProductInfo();
		$this->load->view('product_info', $data);
	}
	
	public function product_spec(){
		$data['productSpec'] = $this->product_spec->getProductSpec();
		$this->load->view('product_spec', $data);
	}
	
	public function similar_product(){
		$data['similarProduct'] = $this->product_spec->getProductSpec();
		$this->load->view('similar_product', $data);
	}
}