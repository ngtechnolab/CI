<?php  

class File_Model extends CI_Model
{
	public function AddToDB($dataForDB)
	{
		if ($this->db->insert('practical_exam', $dataForDB))
		{
			return;
		}
		else
		{
			echo "error while inserting into database..!!";
		}
	}
}

?>