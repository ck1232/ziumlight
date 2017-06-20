<?php
class hero extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('banner');
	}
	
	public function index(){
		$data['banners'] = $this->banner->getHeroBanner();
		$this->load->view("hero", $data);
	}
}