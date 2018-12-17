<?php  

class App3_Model extends CI_Model
{
	public function register($data)
	{
		$this->db->insert('app3_table',$data);
	}
}

?>