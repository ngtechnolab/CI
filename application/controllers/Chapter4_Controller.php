<?php  

class Chapter4_Controller extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('chapter4/homepage');
	}
	public function login_form()
	{
		$this->load->view('chapter4/login_form');
	}
	public function register_form()
	{
		$this->load->view('chapter4/register_form');
	}
	public function register()
	{
		$data = array(
						'username' => $this->input->post('username'),
						'email' => $this->input->post('email'),
						'password' => $this->input->post('password')
					);

		$this->load->database();
		$this->load->model('Chapter4_Model');
		$this->Chapter4_Model->registerToDB($data);

	}

	public function login()
	{
		$data = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password')
					);

		$this->load->database();
		$this->load->model('Chapter4_Model');
		$sdata = $this->Chapter4_Model->loginFromDB($data);

		$this->load->view('chapter4/dashboard',$sdata);
	}

	public function logout()
	{
		
	}
}

?>