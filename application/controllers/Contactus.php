<?php
class Contactus extends CI_Controller
{
	public function contact()
	{
		$this->contact_model->contact();
		redirect('/request_success');
	}
}


?>