<?php 
	/**
	 * 
	 */
	class Callback_model extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}

		public function get_callbacks($slug = FALSE)
		{
			if ($slug === FALSE)
			{
				$this->db->order_by('callbacks.id', 'DESC');
				$this->db->join('categories', 'categories.id = callbacks.category_id');
				$query = $this->db->get('callbacks');
				return $query->result_array();
			}

			$query = $this->db->get_where('callbacks', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_callback()
		{
			$slug = url_title($this->input->post('businessName'));

			$data = array(
				'customerName' => $this->input->post('customerName'),
				'slug' => $slug,
				'businessName' => $this->input->post('businessName'),
				'mobileNumber' => $this->input->post('mobileNumber'),
				'landLineNumber' => $this->input->post('landLineNumber'),
				'address' => $this->input->post('address'),
				'postCode' => $this->input->post('postCode'),
				'bankName' => $this->input->post('bankName'),
				'accountNumber' => $this->input->post('accountNumber'),
				'sortCode' => $this->input->post('sortCode'),
				'comments' => $this->input->post('comments'),
				'category_id' => $this->input->post('category_id')
			);

			return $this->db->insert('callbacks', $data);
		}

		public function delete_callback($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('callbacks');
			return true;
		}

		public function update_callback()
		{
			$slug = url_title($this->input->post('businessName'));
			date_default_timezone_set("Asia/Karachi");
			$modified = date("Y-m-d h-m-s");

			$data = array(
				'customerName' => $this->input->post('customerName'),
				'slug' => $slug,
				'businessName' => $this->input->post('businessName'),
				'mobileNumber' => $this->input->post('mobileNumber'),
				'landLineNumber' => $this->input->post('landLineNumber'),
				'address' => $this->input->post('address'),
				'postCode' => $this->input->post('postCode'),
				'bankName' => $this->input->post('bankName'),
				'accountNumber' => $this->input->post('accountNumber'),
				'sortCode' => $this->input->post('sortCode'),
				'comments' => $this->input->post('comments'),
				'category_id' => $this->input->post('category_id'),
				'modifiedAt' => $modified
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('callbacks', $data);
		}

		public function get_categories()
		{
			$this->db->order_by('name');
			$query = $this->db->get('categories');
			return $query->result_array();
		}

		public function get_callback_by_category($category_id)
		{
			$this->db->order_by('callbacks.id', 'DESC');
			$this->db->join('categories', 'categories.id = callbacks.category_id');
			$query = $this->db->get_where('callbacks', array('category_id' => $category_id));
			return $query->result_array();
		}
	}