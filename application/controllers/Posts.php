<?php
	class Posts extends CI_Controller{	
		public function index(){
			$data['title'] = 'Latest Posts';

			$data['posts'] = $this->post_model->get_posts(); 
			print_r($data['posts']);

			$this->load->view('_templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('_templates/footer');
		}
	}