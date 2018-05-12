<?php
	class Users extends CI_Controller{	
		public function register(){
			$data['title'] = 'Registreren';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('employeenumber', 'EmployeeNumber', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			If($this->form_validation->run() === FALSE){
				$this->load->view('_templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('_templates/footer');				
			} else {
				//Encryptie
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				//Message
				$this->session->set_flashdata('user_registered', 'Je account is geregistreerd.');

				redirect('products');
			}
		}
}