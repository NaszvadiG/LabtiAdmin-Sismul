<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminModel extends CI_Model{


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

    public function getAllGambar($user_id){
    	$query = $this->db->get_where('post', array('user_id' => $user_id));
    	return $query->result();
    }
}