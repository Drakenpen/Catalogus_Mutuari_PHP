<?php
	class Posts extends CI_Controller{	
		public function index(){
			$data['title'] = 'Latest Posts';

			$this->load->view('_templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('_templates/footer');
		}
	}