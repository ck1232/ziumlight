<?php
class Image extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Service/ProductService');
		$this->load->model('Service/ImageService');
		$this->output->enable_profiler(TRUE);
		$config['queries'] = TRUE;
	}
	
	public function category_product_image($prdCode = null){
		log_message('debug', 'categoryProductImage - prdCode:'.$prdCode);
		$name = 'img/catalog/shoe/ring_light.jpg';
		if(isset($prdCode) && $prdCode != null && !empty(trim($prdCode))){
			$productTOList = $this->ProductService->getProductTO($prdCode);
			if($productTOList != null && !empty($productTOList)){
				$productTO = $productTOList[0];
				$prdId = $productTO->product_id;
				$imageTOList = $this->ImageService->getImage('product', $prdId);
				if($imageTOList != null && !empty($imageTOList)){
					$imageTO = $imageTOList[0];
					log_message('debug', 'env:'.ENVIRONMENT);
					switch (ENVIRONMENT){
						case 'development':$name = 'd:\\\\images\\'.$imageTO->file_path;break;
						case 'production': ;
						default:$name = 'd:\\\\images\\'.$imageTO->file_path;break;
					}
					
					$name = 'd:\\\\images\\'.$imageTO->file_path;
				}
			}
		}
		try{
			$fp = fopen($name, 'rb');
		}catch (Exception $e){
			$name = 'img/catalog/shoe/ring_light.jpg';
			$fp = fopen($name, 'rb');
		}
		
		header("Content-Type: image/jpg");
		header("Content-Length: " . filesize($name));
		
		fpassthru($fp);
	}
}