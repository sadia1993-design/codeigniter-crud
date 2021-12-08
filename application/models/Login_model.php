<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function get_user_inform()

    {       
        $userdata = array();
        $userdata['username'] = $this->input->post('username',true);
        $userdata['email'] = $this->input->post('email',true);
        $userdata['password'] = md5($this->input->post('password',true));
        $userdata['text'] = $this->input->post('text',true);
        return $this->db->insert('user', $userdata);
    }

    public function getUserList()
    {
        return $this->db->select('*')->from('user')->get()->result_array();
    }

    public function deleteRow($id)
    {
        return $this->db->where('id', $id)->from('user')->delete();
    }

    public function getUser($id)
    {
        return $this->db->where('id', $id)->get('user')->row();
    }

    public function updateUser($data,$id)
    {
        return $this->db->where('id', $id)->update('user', $data);
    }
    
    
}