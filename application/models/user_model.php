<?php
class User_model extends CI_Model
{
	public function signup()
	{
		// Encrypt password
		$enc_password = md5($this->input->post('password'));
		// User data forsign up
		$data = array(
					'firstname'		=>	$this->input->post('firstname'),
					'lastname'		=>	$this->input->post('lastname'),
					'email'			=>	$this->input->post('email'),
					'password'		=>	$enc_password
		);
		// Insert data
		return $this->db->insert('users',$data);
	}
	// User Login
	public function loginuser($email, $password)
	{
		// Validate
		$this->db->where('email', $email);
		$this->db->where('password', $password);

		$result = $this->db->get('users');
		if($result->num_rows() == 1) 
		{
			return $result->row(0)->id;
		}
	}
	// Check email exists
	public function check_email_exists($email)
	{
		$query = $this->db->get_where('users', array('email' => $email));
		if(empty($query->row_array()))
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