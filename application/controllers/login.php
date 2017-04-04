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

		if($query) // checking if user's credentials validated
		{
			$data = array(
					'fname' => $this->input->post('fname'),
					'is_logged_in' => true
				);
			$this->load->library('Session');
			$this->session->set_userdata($data);
			redirect('site/members_area');
		}

		else
		{
			$this->index();
		}
	}

	function signup() //Registration for new users
	{
		$data['main_content']='signup_view';
		$this->load->view("includes/template",$data);
	}
}