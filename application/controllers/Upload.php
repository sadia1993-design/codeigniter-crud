<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller {


    public function index($id = NULL)
    {

        if (isset($id)) {
            $userData['userListEdit'] = $this->Login_model->getUser($id);
        }
        $userData['userList'] = $this->Login_model->getUserList();  
        $this->load->view('header');
        $this->load->view('login_form', $userData);
        $this->load->view('footer');

    }

    public function store_image()
    {
        $this->form_validation->set_rules('username', 'Username: ', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'valid_email|trim|required|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('text', 'Text', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class=error>', '</span>');

       

        if($this->form_validation->run() == FALSE)
        {
            $userData['userList'] = $this->Login_model->getUserList();
            $this->load->view('header');
            $this->load->view('login_form', $userData);
            $this->load->view('footer');
        }
        else
        {
            $data = $this->input->post();
            if(isset($data['id'])){
                $this->Login_model->updateUser($data, $data['id']);
                $dData = array();
                $dData['msg'] = 'user Updated successfully';
                $dData['color'] = 'success';
                $this->session->set_userdata($dData);
                redirect(base_url('Upload/index'));
            }
            else{
                $this->Login_model->get_user_inform();
                $dData = array();
                $dData['msg'] = 'user added successfully';
                $dData['color'] = 'success';
                $this->session->set_userdata($dData);
                redirect(base_url('Upload/index'));
            }
            
            
        }
    }

    public function deleteRow($id)
    {
        $this->Login_model->deleteRow($id);
        $dData = array();
        $dData['msg'] = 'user deleted successfully';
        $dData['color'] = 'danger';
        $this->session->set_userdata($dData);
        redirect(base_url());
    }


    public function editRow($id)
    {
        echo $id;
    }

}