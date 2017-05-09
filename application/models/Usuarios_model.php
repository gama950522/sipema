<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends MY_Model
{

    public function authenticate($data)
    {
        if (is_array($data))
        {
            $data = $this->get_values($data);
            $this->db->from('usuario');
            $this->db->where('username', $data['username']);
            $this->db->where('password', $data['password']);
            $get = $this->db->get()->row_array();
            if (is_null($get))
            {
                return FALSE;
            }
            $new_session = array(
                'id'         => $get['id'],
                'user'       => $get['username'],
                'logged_in'  => TRUE,
            );
            $this->session->set_userdata($new_session);
            //print_r($data);
            return TRUE;
        }
    }

    public function get_all()
    {
        return $this->db->get('usuario')->result();
    }

    public function is_same_password($val = '')
    {
        if ($val !== '') 
        {
            $this->db->select('password');
            $this->db->from('usuario');
            $this->db->where('username', $this->session->userdata('user'));
            $result = $this->db->get();
            if ($result->row()->password === $val) 
            {
                return TRUE;
            }
        }
        return FALSE;
    }
}

/* End of file Usuarios_model.php */
/* Location: ./application/models/Usuarios_model.php */