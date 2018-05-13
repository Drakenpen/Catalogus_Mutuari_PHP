<?php
	class Category_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		//Used specifically to call categories in the product controller
		public function get_categories(){
				$this->db->order_by('name');
				$query = $this->db->get('categories');
				return $query->result_array();
				}

		public function get_category_row(){
				$this->db->order_by('name');
				$query = $this->db->get('categories');
				return $query->row_array();
				}

		public function create_category(){
			$data = array(
				'name' => $this->input->post('name')
			);

			return $this->db->insert('categories', $data);
		}

		public function get_category($id){
			$query = $this->db->get_where('categories', array('id' => $id));
			return $query->row();
		}

		public function update_category(){
			$data = array(
				'name' => $this->input->post('name'),			
			);

			$this->db->where('Id', $this->input->post('Id'));
			return $this->db->update('Categories', $data); 
		}
	}