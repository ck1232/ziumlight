<?php
class category extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('breadcrumb');
		$this->load->model('category_menu');
	}

	public function index(){
		$data['main_content'] = 'category';
		$data['title'] = 'Category | Ziumlight';
		$this->load->view('page', $data);
	}

	public function category_menu(){
		$data['category_menu'] = $this->category_menu->getCategoryMenu();
		$this->load->view('category_menu', $data);
	}

	public function breadcrumb(){
		$data['breadcrumb'] = $this->breadcrumb->getBreadcrumb();
		$this->load->view('breadcrumb', $data);
	}
}