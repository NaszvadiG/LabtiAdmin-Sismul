<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
   public function __construct() {

        parent::__construct();
        $this->load->model('m_user');

        if($this->session->userdata('logged_in')){
          if($this->session->userdata('role')==2){
            redirect('admin/welcome');
          }
        }else{
          redirect('welcome');
        }
    }
   public function index(){
      $data['record'] = $this->m_user->getPost();

      $name = $_SESSION['username'];
      $a = $this->m_user->getId($name)->row();
      $id = $a->id;
      $data['record1'] = $this->m_user->getPostMe($id);
      
      $this->load->view('user/header');
      $this->load->view('user/index',$data);
      $this->load->view('user/footer');
    }
   public function about(){
      $this->load->view('user/header');
      $this->load->view('user/about');
      $this->load->view('user/footer');
   }
   function logout(){
      $this->session->unset_userdata('logged_in');
      redirect('welcome','refresh');
   }

   function hapus(){
    $this->session->sess_destroy();
   }
}