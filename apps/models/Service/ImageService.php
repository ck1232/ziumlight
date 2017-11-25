<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ImageService extends CI_Model{
	const table_file_link = 'file_link';
	const table_image_link_rs = 'image_link_rs';
	function __construct(){
		parent::__construct();
		$this->load->model('to/ImageTO');
	}
	
	public function getImage($ref_type, $ref_id){
		if(!isset($ref_type) || !isset($ref_id) || empty(trim($ref_id)) || empty(trim($ref_type))){
			return null;
		}
		$this->db->reconnect();
		$this->db->select(self::table_image_link_rs.'.*,'.self::table_file_link.'.file_path');
		$this->db->from(self::table_image_link_rs);
		$this->db->join(self::table_file_link, self::table_image_link_rs.'.image_link_id = '.self::table_file_link.'.file_link_id');
		$this->db->where(self::table_image_link_rs.'.delete_ind', 'N');
		$this->db->where(self::table_file_link.'.delete_ind', 'N');
		$this->db->where(self::table_image_link_rs.'.ref_id', $ref_id);
		$this->db->where(self::table_image_link_rs.'.ref_type', $ref_type);
		$this->db->order_by(self::table_image_link_rs.'.sequence', "asc");
		$query = $this->db->get();
		$imageTOList = $query->result('ImageTO');
		log_message('debug', 'ref_type:'.$ref_type.', ref_id:'.$ref_id);
		if($imageTOList != null && !empty($imageTOList)){
			foreach($imageTOList as $imageTO){
				log_message('debug', 'imagePath:'.$imageTO->file_path);
			}
		}
		return $imageTOList;
	}
	
}