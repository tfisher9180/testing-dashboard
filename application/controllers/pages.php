<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php

	class Pages extends CI_Controller {

		public function view($page = 'dashboard') {

			if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			}

			$sidebar = array();
			$sidebar['current_page'] = $page;
			$sidebar['sub_page'] = '';

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar', $sidebar);
			$this->load->view('templates/topbar');
			$this->load->view('pages/'.$page);
			$this->load->view('templates/footer');

		}

	}

?>