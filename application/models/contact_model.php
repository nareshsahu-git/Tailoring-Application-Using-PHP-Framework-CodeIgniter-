<?php 
class Contact_model extends CI_Model
{
	public function contact()
	{
		// User data for contact
		$data = array(
					'name'		=>	$this->input->post('name'),
					'email'		=>	$this->input->post('email'),
					'message'	=>	$this->input->post('message')
		);
		
		// Insert data
		return $this->db->insert('contactus',$data);
	}
}


?>