<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File_upload extends CI_Controller
{
    public function index()
    {
        $this->load->view('file_upload');
    }

    public function upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg|webp';
        $config['remove_spaces'] = true;
        $config['detect_mime'] = true;
        $config['mod_mime_fix'] = true;
        // $config['overwrite'] = true;



        $this->upload->initialize($config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('msg' => $this->upload->display_errors());
            $this->load->view('file_upload', $error);
        } 
        else
         {
           $data =  $this->upload->data();
           $conf['image_library'] = 'gd2';
           $conf['source_image'] = './uploads/'.$data['file_name'];
            $conf['width'] = 600;
            $conf['height']= 600;
            $conf['maintain_ratio'] = false;
            $conf['master_dim'] = 'width';
            $conf['quality'] = '70%';
            $this->image_lib->initialize($conf);
            $this->image_lib->resize();

            $this->load->view('file_upload', $data);
            redirect('file_upload');
        }
    }
}