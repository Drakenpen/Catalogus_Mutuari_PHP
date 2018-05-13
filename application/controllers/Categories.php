<?php
	class Categories extends CI_Controller{	
		public function index(){
			$data['title'] = 'Categorieën';

			$data['categories'] = $this->category_model->get_categories();
			
			$this->load->view('_templates/header');
			$this->load->view('categories/index', $data);
			$this->load->view('_templates/footer');
		}

		public function create(){
			//Check admin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'Categorie aanmaken';

			$data['categories'] = $this->category_model->get_categories();

			$this->form_validation->set_rules('name', 'Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('_templates/header');
				$this->load->view('categories/create', $data);
				$this->load->view('_templates/footer');
			} else {
				$this->category_model->create_category();

				//Message
				$this->session->set_flashdata('category_created', 'De categorie is aangemaakt');

				redirect('categories/create');
			}
		}

		public function products($id){
			$data['title'] = $this->category_model->get_category($id)->name;

			$data['products'] = $this->product_model->get_products_by_category($id);

			$this->load->view('_templates/header');
			$this->load->view('products/index', $data);
			$this->load->view('_templates/footer');
		}

		public function edit($id){
			//Check admin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['category'] = $this->category_model->get_category_row($id);

			if(empty($data['category'])){
				show_404();
			}
			$data['title'] = 'Categorie aanpassen';

			$this->load->view('_templates/header');
			$this->load->view('categories/edit', $data);
			$this->load->view('_templates/footer');	
		}

		public function update(){
			//Check admin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$this->category_model->update_category();

			//Message
			$this->session->set_flashdata('category_updated', 'De categorie is gewijzigd');

			redirect('categories/create');
		}	
	}