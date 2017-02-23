<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_admin extends CI_Model{


	public function gamabarUpload($user_id){
        $itemUpload		= $this->upload->data();
        $namaFile		= $itemUpload['file_name'];
        //$tipeGambar 	= $itemUpload['file_type'];
        $data = array(
                      
            'user_id'       => $user_id,
			'judul'	    	=> $namaFile,
			'deskripsi' 	=> $this->input->post('deskripsi'),
			'kategori' 		=> "gambar",
			'nama_file'     => $namaFile
    
		);
		$insert_data = $this->db->insert('post',$data);
		return $insert_data;
    }

    public function getAllGambar(){
    	$query = $this->db->get_where('post', array('kategori' => 'gambar'));
    	return $query->result();
    }

    public function getAllVIdeo(){
        $query = $this->db->get_where('post', array('kategori' => 'video'));
        return $query->result();
    }
}