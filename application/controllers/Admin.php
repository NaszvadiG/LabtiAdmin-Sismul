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
}
