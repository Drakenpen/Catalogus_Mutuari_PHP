<?php
	class Shoppingcart extends CI_Controller{	
		public function index(){
			$data['title'] = 'Mijn winkelwagen';
			
			if($this->session->userdata('item_selected')){
				$product_id = $_SESSION['product_item'];
				$data['products'] = $this->product_item_model->get_selected_products($product_id);
			}

			
			$this->load->view('_templates/header');
			$this->load->view('shoppingcart/index', $data);
			$this->load->view('_templates/footer');
		}

		//Clears item session
		public function empty_cart(){
			$this->session->unset_userdata('item_selected');
			$this->session->unset_userdata('product_item');

			//Message
			$this->session->set_flashdata('cart_emptied', 'De winkelkar is leeg');

			redirect('shoppingcart/index');
		}

		//Adds product_item to basket
		public function add_item(){
			$item_id = $this->input->post('product_item');
			$cart_data = array(
			        'product_item'  => $item_id,
			   		'item_selected'  => TRUE,
			);

			$this->session->set_userdata($cart_data);
			//Message log in success
			$this->session->set_flashdata('item_added', 'Product toegevoegd');

			redirect('shoppingcart/index');
    	}
	}