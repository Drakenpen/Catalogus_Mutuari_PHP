<?php
	class Product_Item_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function get_product_items($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('product_items.Id', 'DESC');
				$this->db->join('products', 'products.Id = product_items.product_id');
				$query = $this->db->get('product_items');
				return $query->result_array();
			}

			$query = $this->db->get_where('product_items', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_product_item($product_id){
			$slug = url_title($this->input->post('title'));

			$data = array(
				// 'product_id' => $product_id,
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'product_id' => $this->input->post('product_id'),
			);
			return $this->db->insert('product_items', $data);
		}

		public function delete_product_item($id){
			$this->db->where('Id', $id); 
			$this->db->delete('product_items'); 
			return true;
		}

		public function update_product_item(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'product_id' => $this->input->post('product_id'),			
			);

			$this->db->where('Id', $this->input->post('Id'));
			return $this->db->update('product_items', $data); 
		}

		//Used specifically to call product_items in the product controller
		 public function get_child_products($product_id){
		 	$query = $this->db->get_where('product_items', array('product_id' => $product_id));
			return $query->result_array();
		 }

		public function get_items(){
				$this->db->order_by('Id', 'DESC');
				$query = $this->db->get('product_items');
				return $query->result_array();
		}

		//Used to receive items from shopping cart session
		 public function get_selected_products($product_id){
		 	$query = $this->db->get_where('product_items', array('Id' => $product_id));
			return $query->result_array();
		 }
	}