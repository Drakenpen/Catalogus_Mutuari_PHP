<?php
	class Product_Item_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create_product_item($product_id){
			$data = array(
				'product_id' => $product_id,
				'title' => $this->input->post('title'),
				'body' => $this->input->post('body')
			);
			return $this->db->insert('product_items', $data);
		}

		public function get_product_items($product_id){
			$query = $this->db->get_where('product_items', array('product_id' => $product_id));
			return $query->result_array();
		}

		public function get_items(){
				$this->db->order_by('Id', 'DESC');
				$query = $this->db->get('product_items');
				return $query->result_array();
		}
	}