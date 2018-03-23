<?php
class Pages extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('client_model');
	}
	public function view($page = 'main')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
				// Whoops, we don't have a page for that!
				show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'E-mail', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('components/heading', $data);
			$this->load->view('pages/'.$page, $data);
			if ($page === 'main' ){
			$this->load->view('pages/newsletter', $data);
			}
			$this->load->view('components/footing');

		}
		else
		{
			$this->client_model->enter_newsletter();
			$this->load->view('components/heading', $data);
			$this->load->view('pages/success');
			$this->load->view('pages/main', $data);
			$this->load->view('components/footing');
		}
	}

	public function signup()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Client Questionaire';

		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('components/heading', $data);
			$this->load->view('client/client');
			$this->load->view('components/footing');

		}
		else
		{
			$this->client_model->enter_client();
			$this->load->view('components/heading', $data);
			$this->load->view('client/success');
			$this->load->view('client/client');
			$this->load->view('components/footing');
		}
	}
}
?>