<?php
class footer extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('footer_category');
	}
	
	public function index(){
		$data['categories'] = $this->footer_category->getFooterCategory();
		$data['powered'] = 'Powered By Ziumlight<br/>Copyright &copy; 2017';
		$this->load->view('footer', $data);
	}
}