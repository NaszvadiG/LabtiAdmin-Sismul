<?php
class Login extends CI_Controller {
	/* Konstructor : wajib ada !!  */
    function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }
    
    //fungsi untuk pengecekan data
    function cek_login() {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $a = $this->m_login->cek_login($username, $password)->row();
        $level = $a->level;
        if ($level == "1") {
            $sess_array = array();
            $sess_array = array('username' => $a->username, 'logged_in' => true, 'role' => 1);
            $this->session->set_userdata($sess_array);
            $status = array('status' => true);
            redirect('user/welcome');
        }
        elseif ($level == "2") {
            $sess_array = array();
            $sess_array = array('username' => $a->username, 'logged_in' => true, 'role' => 2);
            $this->session->set_userdata($sess_array);
            $status = array('status' => true);
            redirect('admin/welcome');
        }       
        else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }
}