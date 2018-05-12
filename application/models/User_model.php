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
	}