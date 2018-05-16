<?php
	class Product_Items extends CI_Controller{
		public function view($slug = NULL){
			$data['product_item'] = $this->product_item_model->get_product_items($slug);

			if(empty($data['product_item'])){
				show_404();
			}
			$data['title'] = $data['product_item']['title'];

			$this->load->view('_templates/header');
			$this->load->view('product_items/view', $data);
			$this->load->view('_templates/footer');		
		}

		//Controleert of de titel en content zijn ingevult en roept vervolgens create_post aan in de product_model
		public function create(){
			//Check 'admin' (Mmomenteel nog log in)
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['product_items'] = $this->product_item_model->get_product_items();

			$data['title'] = 'Product exemplaar toevoegen';

			$data['products'] = $this->product_model->get_parent_products();

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('_templates/header');
				$this->load->view('product_items/create', $data);
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
					$product_item_image = 'noimage.png';
				} else{
					$data = array('upload_data' => $this->upload->data());
					$product_item_image = $_FILES['userfile']['name'];
				}

				$this->product_item_model->create_product_item($product_item_image);

				//Message
				$this->session->set_flashdata('product_item_created', 'Het product exemplaar is aangemaakt');

				redirect('products');
			}
		}

		//Roept delete_product_item uit de product_item_model gebaseert op het product_item id
		public function delete($id){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
				$this->product_item_model->delete_product_item($id);
				//Message
				$this->session->set_flashdata('product_item_deleted', 'Het product exemplaar is verwijderd');

				redirect('products');
		}

		//Stuurt je naar de edit view voor een product_item gebaseert op de url slug
		public function edit($slug){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['product_item'] = $this->product_item_model->get_product_items($slug);
			$data['products'] = $this->product_model->get_parent_products();

			if(empty($data['product_item'])){
				show_404();
			}
			$data['title'] = 'Exemplaar aanpassen';

			$this->load->view('_templates/header');
			$this->load->view('product_items/edit', $data);
			$this->load->view('_templates/footer');	
		}

		public function update(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->product_item_model->update_product_item();

			//Message
			$this->session->set_flashdata('product_item_updated', 'Het product exemplaar is gewijzigd');

			redirect('products');
		}		
	}