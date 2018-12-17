<?php  

class App3_Controller extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('App3/registration_form');
	}

	public function register()
	{
		$data = array(
						'name' => $this->input->post('name'),
						'gender' => $this->input->post('gender'),
						'email' => $this->input->post('email'),
						'mobile' => $this->input->post('mobile'),
						'address' => $this->input->post('address'),
						'city' => $this->input->post('city'),
						'pincode' => $this->input->post('pincode')
					);

		$this->load->database();
		
		$this->load->model('App3_Model');
		$this->App3_Model->register($data);

	}
}

?>