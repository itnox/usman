<?php 
	/**
	 * 
	 */
	class Categories extends CI_Controller
	{
		
		public function index()
		{
			$data['title'] = 'Categories';

			$data['categories'] = $this->category_model->get_categories();

			$this->load->view('templates/header');
			$this->load->view('categories/index', $data);
			$this->load->view('templates/footer');
		}

		public function callbacks($id)
		{
			$data['title'] = $this->category_model->get_category($id)->name;

			$data['callbacks'] = $this->callback_model->get_callback_by_category($id);

			$this->load->view('templates/header');
			$this->load->view('callbacks/index', $data);
			$this->load->view('templates/footer');
		}
	}