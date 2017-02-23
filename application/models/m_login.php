<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class m_login extends CI_Model {
    //untuk login admin dan menyimpan sesi untuk admin
    function cek_login($username,$password) {
        $query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
        return $query;
    }
}