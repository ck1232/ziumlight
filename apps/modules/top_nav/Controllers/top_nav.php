<?php
class top_nav extends MX_Controller{
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['telephone'] = 'Telephone';
		$data['logged'] = false;
		$data['text_account'] = 'Account';
		$data['text_order'] = 'Order';
		$data['text_transaction'] = 'Transaction';
		$data['text_download'] = 'Download';
		$data['text_logout'] = 'Logout';
		$data['text_register'] = 'Register';
		$data['text_login'] = 'Login';
		$data['text_wishlist'] = 'Wishlist';
		$data['text_shopping_cart'] = 'Shopping Cart';
		$data['text_checkout'] = 'Checkout';
		$data['name'] = 'Ziumlight';
		$data['logo'] = base_url('img/catalog/logo.png');
		$this->load->view("top_nav", $data);
	}
}