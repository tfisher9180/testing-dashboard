<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php

	class Proctored_Exams extends CI_Controller {

		public function __construct() {
			parent::__construct();

			$this->load->model('proctored_exam');
		}

		public function view($site) {
			$this->load->library('pagination');

			echo ($this->input->post('name'));

			if ($this->input->get('page')) {
				$page = $this->input->get('page');
			} else {
				$page = 1;
			}
			$limit = 10;
			$offset = ($page-1)*$limit;

			$sidebar = array();
			$sidebar['current_page'] = 'proctored_exams';
			$sidebar['sub_page'] = $site;

			$data = array();
			$data['sub_page'] = $site;

			$select = array('status', 'site', 'first_name', 'last_name', 'exam_name', 'institution', 'date_received', 'date_due');

			$query_params = array(
				'site' => $site,
				'status' => 'open'
			);

			$order = array(
				'field' => 'date_received',
				'direction' => 'DESC'
			);

			$exams_data = $this->proctored_exam->get_exams($select, $query_params, $limit, $offset, $order);
			$data['exams'] = $exams_data['data'];

			$config['base_url'] = site_url('proctored_exams/'.$site);
			$config['total_rows'] = $exams_data['count'];
			$config['per_page'] = 10;
			$config['page_query_string'] = TRUE;
			$config['use_page_numbers'] = TRUE;
			$config['query_string_segment'] = 'page';
			$config['full_tag_open'] = '<div class="pull-right"><ul class="pagination">';
			$config['full_tag_close'] = '</ul></div><!--pagination-->';
			$config['first_link'] = '&laquo; First';
			$config['first_tag_open'] = '<li class="prev page">';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Last &raquo;';
			$config['last_tag_open'] = '<li class="next page">';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = 'Next &rarr;';
			$config['next_tag_open'] = '<li class="next page">';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '&larr; Previous';
			$config['prev_tag_open'] = '<li class="prev page">';
			$config['prev_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li class="page">';
			$config['num_tag_close'] = '</li>';
			// $config['display_pages'] = FALSE;
			$config['anchor_class'] = 'follow_link';

			$this->pagination->initialize($config);
			$data['pagination'] = $this->pagination->create_links();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar', $sidebar);
			$this->load->view('templates/topbar');
			$this->load->view('proctored_exams/view', $data);
			$this->load->view('templates/footer');
		}
	}

?>