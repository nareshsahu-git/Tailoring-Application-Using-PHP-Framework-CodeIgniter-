<?php
class Bookservice_modal extends CI_Model
{
	public function registerserv()
	{
		// Service data array
		$data = array(
					'name'		=>	$this->input->post('name'),
					'address'	=>	$this->input->post('address'),
					'phone'		=>	$this->input->post('phone'),
					'landmark'	=>	$this->input->post('landmark'),
					'city'		=>	$this->input->post('city'),
					'pincode'	=>	$this->input->post('pincode')
		);
		// Insert service data
		return $this->db->insert('servicedata',$data);
	}
}
?>