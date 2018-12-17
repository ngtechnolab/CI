<?php

class Upload_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));

	}

	public function index()
	{
		$this->load->view('Upload_view',array('error'=>''));
	}

	public function do_upload()
	{
		$config['upload_path']=FCPATH.'/uploads/';
		// echo realpath(FCPATH.'/uploads/');
		// exit();
		$config['allowed_types']='gif|jpg|png|jpeg|doc|docx|pdf|txt|html';
		$config['max_size']=10000;
		$config['max_width']=1024;
		$config['max_height']=1038;

		$this->load->library('upload',$config);

		if ($this->upload->do_upload('userfile'))
		{
		 	$data=array('upload_data'=>$this->upload->data());
		 	$this->load->view('Upload_success',$data);
		}
		else
		{
		 	echo $config['allowed_types'];
		 	echo $config['upload_path'];
			$error=array('error'=>$this->upload->display_errors());
			$this->load->view('Upload_view',$error);
		}
	}
}

?>