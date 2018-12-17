<?php

class Main_Controller extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->view("Main_View");
	}
}

?>