<?php
	class Product_Items extends CI_Controller{
		public function create($post_id){
			$slug = $this->input->post('slug');
			$data['product'] = $this->product_model->get_posts($slug);
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('_templates/header');
				$this->load->view('products/view', $data);
				$this->load->view('_templates/footer');
			} else {
				$this->product_item_model->create_product_item($product_id);
				redirect('products/'.$slug);
			}
		}
	}