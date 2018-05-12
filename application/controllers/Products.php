<?php
	class Products extends CI_Controller{	
		public function index(){
			$data['title'] = 'Alle producten';

			$data['products'] = $this->product_model->get_products();
			//print_r($data['products']);

			$this->load->view('_templates/header');
			$this->load->view('products/index', $data);
			$this->load->view('_templates/footer');
		}

		public function view($slug = NULL){
			$data['product'] = $this->product_model->get_products($slug);

			$product_id = $data['product']['Id'];
			$data['product_items'] = $this->product_item_model->get_product_items($product_id);

			if(empty($data['product'])){
				show_404();
			}
			$data['title'] = $data['product']['title'];

			$this->load->view('_templates/header');
			$this->load->view('products/view', $data);
			$this->load->view('_templates/footer');		
		}

		public function create(){
			//Check admin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['products'] = $this->product_model->get_products();

			$data['title'] = 'Product toevoegen';

			$data['categories'] = $this->category_model->get_categories();

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('_templates/header');
				$this->load->view('products/create', $data);
				$this->load->view('_templates/footer');	
			} else{
				//Upload image
				$config['upload_path'] = './assets/images/products';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2048';
				$config['max_height'] = '2048';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$product_image = 'noimage.png';
				} else{
					$data = array('upload_data' => $this->upload->data());
					$product_image = $_FILES['userfile']['name'];
				}

				$this->product_model->create_product($product_image);

				//Message
				$this->session->set_flashdata('product_created', 'Het product is aangemaakt');

				redirect('products');
			}
		}

		public function delete($id){
			//Check admin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

				$this->product_model->delete_product($id);

				//Message
				$this->session->set_flashdata('product_deleted', 'Het product is verwijderd');

				redirect('products');
		}

		public function edit($slug){
			//Check admin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['product'] = $this->product_model->get_products($slug);
			$data['categories'] = $this->category_model->get_categories();

			if(empty($data['product'])){
				show_404();
			}
			$data['title'] = 'Product aanpassen';

			$this->load->view('_templates/header');
			$this->load->view('products/edit', $data);
			$this->load->view('_templates/footer');	
		}

		public function update(){
			//Check admin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->product_model->update_product();

			//Message
			$this->session->set_flashdata('product_updated', 'Het product is gewijzigd');

			redirect('products');
		}		
	}