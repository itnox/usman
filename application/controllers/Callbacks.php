<?php 
	/**
	 * 
	 */
	class Callbacks extends CI_Controller
	{
		
		public function index()
		{
			if ($this->session->userdata('logged_in')) {
				
				$data['title'] = 'Latest Callbacks';

				$data['callbacks'] = $this->callback_model->get_callbacks();

				$this->load->view('templates/header');
				$this->load->view('callbacks/index', $data);
				$this->load->view('templates/footer');
			} else {
				redirect('users/login');
			}
			
		}

		public function view($slug = NULL)
		{
			$data['callback'] = $this->callback_model->get_callbacks($slug);

			if (empty($data['callback'])) 
			{
				show_404();	
			}

			$data['title'] = $data['callback']['businessName'];

			$this->load->view('templates/header');
			$this->load->view('callbacks/view', $data);
			$this->load->view('templates/footer');
		}

		public function create()
		{
			$data['title'] = 'Add Callback';

			$data['categories'] = $this->callback_model->get_categories();

			$this->form_validation->set_rules('businessName', 'Business Name', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('callbacks/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->callback_model->create_callback();

				// Set Message
				$this->session->set_flashdata('callback_created', 'Your Callback has been Created!');

				redirect('callbacks');
			}
		}

		public function delete($id)
		{
			$this->callback_model->delete_callback($id);

			// Set Message
			$this->session->set_flashdata('callback_deleted', 'Your Callback has been Deleted!');

			redirect('callbacks');
		}

		public function edit($slug)
		{
			$data['callback'] = $this->callback_model->get_callbacks($slug);

			$data['categories'] = $this->callback_model->get_categories();

			if (empty($data['callback'])) 
			{
				show_404();	
			}

			$data['title'] = 'Edit Callback';

			$this->load->view('templates/header');
			$this->load->view('callbacks/edit', $data);
			$this->load->view('templates/footer');	
		}

		public function update()
		{
			$this->callback_model->update_callback();

			// Set Message
			$this->session->set_flashdata('callback_updated', 'Your Callback has been updated!');

			redirect('callbacks');
		}
	}