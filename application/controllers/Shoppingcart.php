<?php
	class Shoppingcart extends CI_Controller{	
		public function index(){
			$data['title'] = 'Mijn winkelwagen';

			if($this->session->userdata('item_selected')){
				echo "welkom";
				//$data['products'] = $_SESSION['test'];
			}


			$this->load->view('_templates/header');
			$this->load->view('shoppingcart/index', $data);
			$this->load->view('_templates/footer');
		}
	}