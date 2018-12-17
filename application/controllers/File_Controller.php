<?php

class File_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');

	}

	public function index()
	{
		$this->load->view('Upload_view',array('error'=>''));
	}

	public function do_upload()
	{
		$config['upload_path']=APPPATH.'/uploads/';
		$config['allowed_types']='gif|jpg|png|jpeg|doc|docx|pdf|txt|html';
		$config['max_size']=10000;
		$config['max_width']=1024;
		$config['max_height']=768;

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if (! $this->upload->do_upload('userfile'))
		 {
		 	echo $config['allowed_types'];
		 	echo $config['upload_path'];
			$error=array('error'=>$this->upload->display_errors());
			$this->load->view('Upload_view',$error);
		 }
		 else
		 {
		 	$data=array('upload_data'=>$this->upload->data());

		 	$path = $data['upload_data']['full_path'];

		 	$desc = $data['upload_data']['file_name']."<br>".
		 			$data['upload_data']['file_size']."<br>".
	 				$data['upload_data']['image_width']."<br>".
	 				$data['upload_data']['image_height'];

	 		$dataForDB = array(
	 							'img_path' => $path,
	 							'img_desc' => $desc
	 						);

	 		$this->load->database();

	 		$this->load->model('File_Model');
		 	$this->File_Model->AddToDB($dataForDB);

		 	$this->load->view('Upload_success',$data);
		 }
	}

}

?>