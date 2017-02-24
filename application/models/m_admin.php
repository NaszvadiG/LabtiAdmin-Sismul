<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_admin extends CI_Model{

    public function getUser($username)
    {
        $query = $this->db->get_where('user', array('username' => $username));
        return $query->row();
    }

    public function getAllGambar()
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('user', 'user.id = post.user_id');
        $this->db->where('kategori','gambar');
        $query = $this->db->get();
    	//$query = $this->db->get_where('post', array('kategori' => 'gambar'));
    	return $query->result();
    }

    public function getAllVIdeo()
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('user', 'user.id = post.user_id');
        $this->db->where('kategori','video');
        $query = $this->db->get();
        return $query->result();
    }

    public function countItem($kategori)
    {
        $this->db->where('kategori',$kategori);
        $this->db->from('post');
        $hitung = $this->db->count_all_results();
        return $hitung;
    }

    public function delete($itemId)
    {
        $this->db->delete('post', array('id_post' => $itemId));
        return true;
    }
}