<?php
class Users extends CI_Controller
{
	public function signup()
	{
		$data['title']	= 'Sign Up';

		$this->load->view('templates/header');
		$this->load->view('users/signup', $data);
		$this->load->view('templates/footer');
		
	}
	public function registeruser()
	{
		// Validate form
		$this->form_validation->set_rules('firstname','Firstname','trim|required');
		$this->form_validation->set_rules('lastname','Lastname','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|callback_check_email_exists');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('password2','Cinfirm Password','trim|matches[password]');

		if(!$this->form_validation->run())
		{
				$data['title']	= 'Sign Up';

				$this->load->view('templates/header');
				$this->load->view('users/signup', $data);
				$this->load->view('templates/footer');	
		}
		else
		{
				$this->user_model->signup();		
				redirect('/signup_success');
		}	
	}
	public function login()
	{
		$data['title']	= 'Login';

		$this->load->view('templates/header');
		$this->load->view('users/login', $data);
		$this->load->view('templates/footer');
	}

	// Login User
	public function loginuser()
	{
		$data['title'] = 'Login';

		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('users/login', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			// Login User
			// Get Username
			$email = $this->input->post('email');
			// Get and encrypt password
			$password = md5($this->input->post('password'));
			// Login User
			$user_id = $this->user_model->loginuser($email, $password);

			if($user_id)	//if username and password has matched
			{
				// Create Session
				$user_data = array(
						'user_id' => $user_id,
						'email'=> $email,
						'logged_in'=> true 
				);
				// Now we can use $user_data, wherever we want to use
				$this->session->set_userdata($user_data);	
				// Set message
			$this->session->set_flashdata('user_loggedin','You are logged in!');
			redirect('/login_success');
			}
			else
			{
				// Set message
			$this->session->set_flashdata('login_failed','Login Invalid!');
			redirect('users/login');
			}
		}
	}
		// End login
		// User Logout
	public function logout()
	{
		// Unset User data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

		//Set message
		$this->session->set_flashdata('user_logged_out','You are logged out!');
		redirect('users/login');
	}
	// Check if email exists. 
	public function check_email_exists($email)
	{
			$this->form_validation->set_message('check_email_exists','This email is taken, please choose a different one');
			if($this->user_model->check_email_exists($email))
			{
				return true;
			}
			else
			{
				return false;
			}
	}
}

?>