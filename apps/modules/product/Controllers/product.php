<?php
class product extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('product_image');
		$this->load->model('product_info');
		$this->load->model('product_spec');
		$this->load->model('similar_prod');
	}
	
	public function index(){
		$prdCode = $this->revertString($this->uri->segment(2));
		if(isset($prdCode) && !empty(trim($prdCode))){
			$data['main_content'] = 'product';
			$data['title'] = 'Product | Ziumlight';
			$data['cards'] = array();
			$data['scripts'] = array();
			$data['scripts'][0] = 'js/custom/product.js';
			$this->load->view('page', $data);
		}else{
			redirect('/home', 'refresh');
		}
		
	}
	
	public function product_image(){
		$data['image_list'] = $this->product_image->getProductImage();
		$this->load->view('product_image', $data);
	}
	
	public function product_info(){
		$prdCode = $this->revertString($this->uri->segment(2));
		$productInfo = $this->product_info->getProductInfo($prdCode);
		if($productInfo != null){
			$data['productInfo'] = $productInfo;
			$this->load->view('product_info', $data);
		}
		else{
			redirect('/home', 'refresh');
		}
	}
	
	public function product_spec(){
		$data['productSpec'] = $this->product_spec->getProductSpec();
		$this->load->view('product_spec', $data);
	}
	
	public function similar_product(){
		$data['similarProduct'] = $this->similar_prod->getSimilarProduct();
		$this->load->view('similar_product', $data);
	}
	
	public function display_product($prd_code){
		if(isset($prd_code) && !empty(trim($prd_code))){
			$this->index();
		}else{
			redirect('/home', 'refresh');
		}
	}
	public function revertString($str){
		if($str != null){
			return str_replace("_", " ", $str);
		}
		return $str;
	}
}