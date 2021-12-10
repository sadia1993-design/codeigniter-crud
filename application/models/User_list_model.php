<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_list_model extends CI_Model
{
    

    public function get_user()
    {
        return $this->db->select('*')->from('user')->get()->result();
    }

    public function save_user($data)
    {
        $this->db->insert('user', $data);
    }

    public function delete_user($id)
    {
        $this->db->where('id', $id)->delete('user');
    }

    public function get_user_by_id($id)
    {
        return $this->db->where('id', $id)->get('user')->row();
    }

    public function update_user($data, $id)
    {
        $this->db->where('id', $id)->update('user', $data);
    }

    
}