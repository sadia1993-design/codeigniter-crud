<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_list extends CI_Controller
{
    public function index($id=NULL)
    {
        if(isset($id)){
            $data['user_data_edit'] = $this->User_list_model->get_user_by_id($id);
            
        }
        $data['user_list'] = $this->User_list_model->get_user();
        $this->load->view('header');
        $this->load->view('user_list', $data);
        $this->load->view('footer');
    }


    public function saveUser()
    {
         
         $all  = $this->input->post();
         if (isset($all['id'])) {
             $this->User_list_model->update_user($all, $all['id']);
         }
         else{
             $this->User_list_model->save_user($all);
         }
        
        redirect('User_list');
    }


    public function delete_user($id)
    {
        $this->User_list_model->delete_user($id);
        redirect('User_list');
    }
}