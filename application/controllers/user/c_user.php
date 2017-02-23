<?php 

class C_user extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('m_user');
    }

    function inputgambar(){
        $name = $_SESSION['username'];
        $a = $this->m_user->getId($name)->row();
        $id = $a->id;

        $date       = date("dmy");
        $imgname    = $id.$date;
        $imgname1   = $this->input->post('image');

        $input = array(
            'user_id'    =>$id,
            'judul'     =>$this->input->post('judul'),
            'deskripsi' =>$this->input->post('deskripsi'),
            'kategori'  =>('gambar'),
            'nama_file' =>$imgname.$imgname1,
        );

        $config['upload_path']      = 'assets/post';
        $config['allowed_types']    = 'jpg';
        $config['max_size']         = '5000';
        $config['max_width']        = '5000';
        $config['max_height']       = '5000';
        $config['file_name']        = $imgname.$imgname1;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image1')){
            echo "<script>alert('Gagal input gambar: Cek file upload!');history.go(-1);</script>";
        }
        else{
            $data = array('upload_data' => $this->upload->data());

            $this->m_user->inputgambar($input);

            redirect('user/welcome');            
        }
    }

    function inputvideo(){
        $name = $_SESSION['username'];
        $a = $this->m_user->getId($name)->row();
        $id = $a->id;

        $date       = date("dmy");
        $vidname    = $id.$date;
        $vidname1   = $this->input->post('video');

        $input = array(
            'user_id'    =>$id,
            'judul'     =>$this->input->post('judul'),
            'deskripsi' =>$this->input->post('deskripsi'),
            'kategori'  =>('video'),
            'nama_file' =>$vidname.$vidname1,
        );

        $config['upload_path']  = 'assets/post'; # check path is correct
        $config['max_size']     = '20000'; # max size 20mb on here
        $config['allowed_types']= 'wmv|mp4'; # add video extenstion on here
        $config['file_name']    = $vidname.$vidname1;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('video1')){
            echo "<script>alert('Gagal upload video: Cek file upload!');history.go(-1);</script>";
        }
        else{
            $data = array('upload_data' => $this->upload->data());

            $this->m_user->inputvideo($input);

            redirect('user/welcome');            
        }
    }
    function updatepost(){
        $input = array(
            'id_post'   =>$this->input->post('id'),
            'judul'     =>$this->input->post('judul'),
            'deskripsi' =>$this->input->post('deskripsi'),
        );
        $this->m_user->updatepost($input);
        redirect('user/welcome');            
    }
    function deletepost($id_post){
        $this->m_user->deletepost($id_post);
        redirect('user/welcome');            
    }
}