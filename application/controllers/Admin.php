<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$data['content']	= 'admin/dashboard';
		$data['judul']		= 'Dashboard';
		$this->load->view('Admin/core/content',$data);
	}
}
