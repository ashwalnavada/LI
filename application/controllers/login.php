<?php

class Login extends CI_Controller
{
	
	function index()
	{
		$data['main_content'] = 'login_form';
		$this->load->view('includes/template', $data);
	}

	function validate_credentials()
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();

		if($query) // if user's credentials are validated
		{
			$data = array(
					'email' => $this->input->post('email'),
					'is_logged_in' => true
				);
			$this->session->set_userdata($data);
			redirect('site/members_area');
		}

		else
		{
			$this->index();
		}
	}

	function signup()
	{
		$data['main_content']='signup_view';
		$this->load->view("includes/template",$data);
	}
}