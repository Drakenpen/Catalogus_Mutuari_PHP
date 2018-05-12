<?php
	class Shoppingcart extends CI_Controller{	
		public function index(){
			$data['title'] = 'Mijn winkelwagen';

			//print_r($data['products']);

			$this->load->view('_templates/header');
			$this->load->view('shoppingcart/index', $data);
			$this->load->view('_templates/footer');
		}
	}