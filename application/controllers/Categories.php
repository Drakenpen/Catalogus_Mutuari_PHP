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
			$data['title'] = 'Categorie aanmaken';

			$this->form_validation->set_rules('name', 'Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('_templates/header');
				$this->load->view('categories/create', $data);
				$this->load->view('_templates/footer');
			} else {
				$this->category_model->create_category();
				redirect('categories');
			}
		}

		public function products($id){
			$data['title'] = $this->category_model->get_category($id)->name;

			$data['products'] = $this->product_model->get_products_by_category($id);

			$this->load->view('_templates/header');
			$this->load->view('products/index', $data);
			$this->load->view('_templates/footer');
		}	
	}