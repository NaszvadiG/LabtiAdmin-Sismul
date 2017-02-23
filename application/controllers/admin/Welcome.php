<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_admin');
		if($this->session->userdata('logged_in')){
          if($this->session->userdata('role')==1){
            redirect('user/welcome');
          }
        }else{
          redirect('welcome');
        }
	}

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
		$data['item']       = $this->m_admin->getAllGambar();
		$this->load->view('Admin/core/content',$data);
	}


	public function video()
	{
		$data['content']	= 'admin/video';
		$data['judul']		= 'Video';
		$data['item']       = $this->m_admin->getAllVideo();
		$this->load->view('Admin/core/content',$data);
	}

	public function hapusGambar($itemId)
	{
		$delete = $this->m_admin->delete($itemId);
		if ($delete) {
			redirect("admin/welcome/gambar");
		}
	}

	public function hapusVideo($itemId)
	{
		$delete = $this->m_admin->delete($itemId);
		if ($delete) {
			redirect("admin/welcome/video");
		}
	}

	public function logout(){
      $this->session->sess_destroy();
      redirect('welcome','refresh');
   }
}
