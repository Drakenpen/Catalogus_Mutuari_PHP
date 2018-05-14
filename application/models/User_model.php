<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			//data
			$data = array(
				'name' => $this->input->post('name'),
				'employeenumber' => $this->input->post('employeenumber'),
				'email' => $this->input->post('email'),
				'password' => $enc_password
			);

			//insert user
			return $this->db->insert('users', $data);
		}

		//Log in
		public function login($employeenumber, $password){
			// Validate
			$this->db->where('employeenumber', $employeenumber);
			$this->db->where('password', $password);

			$result = $this->db->get('users');
			
			if($result->num_rows() == 1){
				return $result->row(0)->Id;
			} else {
				return false;
			}
		}

		public function get_loans($user_id){
			$this->db->join('product_items', 'product_items.Id = loans.product_item_id');
			$query = $this->db->get_where('loans', array('user_id' => $user_id));
			return $query->result_array();
		}

		// Check employeenumber
		public function check_employeenumber_exists($employeenumber){
			$query = $this->db->get_where('users', array('employeenumber' => $employeenumber));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
	}