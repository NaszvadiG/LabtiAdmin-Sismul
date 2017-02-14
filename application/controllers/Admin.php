<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$data['content']	= 'admin/dashboard';
		$data['judul']		= 'Dashboard';
		$this->load->view('Admin/core/content',$data);
	}


	public function gambar()
	{
		$data['content']	= 'admin/gambar';
		$data['judul']		= 'Gambar';
		$this->load->view('Admin/core/content',$data);
	}


	public function musik()
	{
		$data['content']	= 'admin/musik';
		$data['judul']		= 'Musik';
		$this->load->view('Admin/core/content',$data);
	}


	public function video()
	{
		$data['content']	= 'admin/video';
		$data['judul']		= 'Video';
		$this->load->view('Admin/core/content',$data);
	}

	// CRUD FILE
	public function do_upload()
	{
		$user_id=3;
		// if($this->session->userdata('login')==FALSE)
  //       {
  //           redirect('admin/login');
  //       }

		$config['upload_path']          = './Assets/img/menu/$user_id';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload_form', $error);
			}
		else
			{
				$data = array('upload_data' => $this->upload->data());
				$this->load->view('upload_success', $data);
			}
	}
}
