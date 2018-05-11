<?php
	class Product_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_products($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('products.id', 'DESC');
				$this->db->join('categories', 'categories.id = Products.category_id');
				$query = $this->db->get('products');
				return $query->result_array();
			}

			$query = $this->db->get_where('products', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_product($product_image){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'category_id' => $this->input->post('category_id'),
				'product_image' => $product_image
		);

			return $this->db->insert('products', $data); 
		}

		public function delete_product($id){
			$this->db->where('Id', $id); 
			$this->db->delete('products'); 
			return true;
		}

		public function update_product(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'category_id' => $this->input->post('category_id'),				
			);

			$this->db->where('Id', $this->input->post('Id'));
			return $this->db->update('Products', $data); 
		}

		public function get_products_by_category($category_id){
				$this->db->order_by('products.id', 'DESC');
				$this->db->join('categories', 'categories.id = Products.category_id');
				$query = $this->db->get_where('products', array('category_id' => $category_id));
				return $query->result_array();
		}
		
	}