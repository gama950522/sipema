<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{

    public function authenticate($data)
    {
        if (is_array($data))
        {
            $this->db->from('usuarios');
            $this->db->where('username', $data['username']);
            $this->db->where('password', $data['password']);
            $get         = $this->db->get()->row_array();
            if (is_null($get))
            {
                return FALSE;
            }
            $new_session = array(
                'id'        => $get['id'],
                'user'      => $get['username'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($new_session);
            return TRUE;
        }
    }

}

/* End of file Usuarios_model.php */
/* Location: ./application/models/Usuarios_model.php */