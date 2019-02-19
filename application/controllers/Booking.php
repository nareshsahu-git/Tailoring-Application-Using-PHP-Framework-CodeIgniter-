<?php 
class Booking extends CI_Controller
{
	// Book Service
	public function bookservice()
	{
		$data['title'] = 'Booking';

		$this->load->view('templates/header');
		$this->load->view('pages/bookservice', $data);
		$this->load->view('templates/footer');
	}
	public function registerserv()
	{

		$this->bookservice_modal->registerserv();
		redirect('/request_success');
	}
	
}



?>