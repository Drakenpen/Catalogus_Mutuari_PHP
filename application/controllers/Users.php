<?php
	class Users extends CI_Controller{	
		public function index(){
			//Check admin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title'] = 'Mijn account';

			$user_id = $_SESSION['user_id'];
			$data['loans'] = $this->user_model->get_loans($user_id);

			//print_r($_SESSION['user_id']);
			print_r($data['loans']);

			$this->load->view('_templates/header');
			$this->load->view('users/index', $data);
			$this->load->view('_templates/footer');
		}

		//Registreren
		public function register(){
			//Check logged in
			if($this->session->userdata('logged_in')){
				redirect('users/index');
			}
			$data['title'] = 'Registreren';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('employeenumber', 'EmployeeNumber', 'required|callback_check_employeenumber_exists');
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

		//Inloggen
		public function login(){
			//Check logged in
			if($this->session->userdata('logged_in')){
				redirect('users/index');
			}
			$data['title'] = 'Inloggen';

			$this->form_validation->set_rules('employeenumber', 'EmployeeNumber', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			If($this->form_validation->run() === FALSE){
				$this->load->view('_templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('_templates/footer');				
			} else {

				//Get employeenumber
				$employeenumber = $this->input->post('employeenumber');
				//Get encrypted password
				$password = md5($this->input->post('password'));

				//Log in user
				$user_id = $this->user_model->login($employeenumber, $password);

				if($user_id){
						//Create session
						$user_data = array(
							'user_id' => $user_id,
							'employeenumber' => $employeenumber,
							'logged_in' => true,
						);

						//Start session
						$this->session->set_userdata($user_data);

						//Message log in success
						$this->session->set_flashdata('user_loggedin', 'Je bent ingelogd.');

						redirect('products');
				 } else {
						//Message log in fail
						$this->session->set_flashdata('login_failed', 'We konden je niet inloggen met de ingevulde informatie.');

						redirect('users/login');
				 	}
				 }
			}
		

		//Log out
		public function logout(){
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('employeenumber');

			//Message
			$this->session->set_flashdata('user_loggedout', 'Je bent uitgelogd.');

			redirect('users/login');
		}

		//Check for EmployeeNumber
		public function check_employeenumber_exists($employeenumber){
			$this->form_validation->set_message('check_employeenumber_exists', 'Dit personeelsnummer is al geregistreerd. Neem contact op met een beheerder.');
			if($this->user_model->check_employeenumber_exists($employeenumber)){
				return true;
			} else {
				return false;
			}
		}
}