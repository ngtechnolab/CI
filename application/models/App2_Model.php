<?php

class App2_Model extends CI_Model
{
	
	public function login($data)
	{

		$this->db->select("*");
		$this->db->from("App2_table");
		
		$this->db->where("username",$data['username']);
		$this->db->where("password",$data['password']);

		$rows = $this->db->get();

		if ($rows->num_rows()>0) 
		{
			$this->load->view('App2/login_details',$data);
		}
	}

}

?>