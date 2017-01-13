<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php

	class Proctored_Exam extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function get_exams($select = NULL, $params = NULL, $limit, $offset, $order = NULL) {
			if ($select) {
				$select_list = implode(', ', $select);
				$query = $this->db->select($select_list)
					->from('exams')
					->where($params)
					->order_by($order['field'], $order['direction']);
			} else {
				$query = $this->db->get_where('exams', $params)->order_by($order['field'], $order['direction']);
			}
			
			$tempdb = clone $this->db;

			$results['count'] = $tempdb->count_all_results();
			$results['data'] = $query->limit($limit, $offset)->get()->result();
			
			foreach ($results['data'] as $result) {
				$result->date_received = DateTime::createFromFormat('Y-m-d', $result->date_received)->format('F j, Y');
				$result->date_due = DateTime::createFromFormat('Y-m-d', $result->date_due)->format('F j, Y');
			}

			return $results;
		}

	}

?>