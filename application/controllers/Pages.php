<?php
	class Pages extends CI_Controller{
		
		public function view($page = 'about'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('_templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('_templates/footer');
		}
	}