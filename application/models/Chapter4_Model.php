<?php  

class Chapter4_Model extends CI_Model
{
	public function registerToDB($data)
	{
		$this->db->insert('chapter4_table',$data);
	}
	public function loginFromDB($data)
	{
		$this->db->select('*');
		$this->db->from('chapter4_table');
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']); 
		$row = $this->db->get();
		if ($row->num_rows()>0) 
		{
			//echo "Login Soccessful";
			$this->load->library('session');
    		$this->session->set_userdata('username',$data['username']);
    		$this->session->set_userdata('password',$data['password']);
    		$session_data['name']=$this->session->userdata('username');
			$session_data['password']=$this->session->userdata('password');
    		return $session_data;
    		//$this->load->view('chapter4/dashboard', $session_data);
		}
		else
			echo "error";
	}
}

?>