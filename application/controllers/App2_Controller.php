<?php

class App2_Controller extends CI_Controller
{

	public function index()
	{
		$this->load->view('App2/login_form');
	}

	public function login()
	{
		$this->load->database();

		$data = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password') 
					);

		$this->load->model('App2_Model');
		$this->App2_Model->login($data);
	}

}

?>