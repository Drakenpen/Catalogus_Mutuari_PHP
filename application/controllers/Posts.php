<?php
	class Posts extends CI_Controller{	
		public function index(){
			$data['title'] = 'Gebruikers feedback';

			$data['posts'] = $this->post_model->get_posts();
			//$data['categories'] = $this->post_model->get_categories(); 
			//print_r($data['posts']);

			$this->load->view('_templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('_templates/footer');
		}

		public function view($slug = NULL){
			$data['post'] = $this->post_model->get_posts($slug);

			if(empty($data['post'])){
				show_404();
			}
			$data['title'] = $data['post']['title'];

			$this->load->view('_templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('_templates/footer');		
		}

		public function create(){
			$data['title'] = 'Create Post';

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('_templates/header');
				$this->load->view('posts/create', $data);
				$this->load->view('_templates/footer');	
			} else{
				//Upload image
				$config['upload_path'] = './assets/images/posts';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '500';
				$config['max_height'] = '500';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.png';
				} else{
					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
				}

				$this->post_model->create_post($post_image);

				//Message
				$this->session->set_flashdata('post_created', 'Je feedback is verzonden!');

				redirect('posts');
			}
		}

		public function delete($id){
			//Check admin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
				$this->post_model->delete_post($id);
				redirect('posts');
		}

		public function edit($slug){
			//Check admin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['post'] = $this->post_model->get_posts($slug);

			if(empty($data['post'])){
				show_404();
			}
			$data['title'] = 'Edit post';

			$this->load->view('_templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('_templates/footer');	
		}

		public function update(){
			//Check admin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}			
			$this->post_model->update_post();
			redirect('posts');
		}		
	}