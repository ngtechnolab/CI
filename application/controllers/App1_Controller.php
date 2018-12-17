<?php  

class App1_Controller extends CI_Controller
{
	public function index()
	{
		$this->load->view("App1/profile_form");
	}
	public function show()
	{
		$data = array(
						'fname' => $this->input->post('fname'),
						'mname' => $this->input->post('mname'),
						'lname' => $this->input->post('lname'),
						'contact' => $this->input->post('contact'),
						'city' => $this->input->post('city'),

					);
		$this->load->view("App1/view_profile",$data);
	}
}

?>