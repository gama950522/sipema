<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends CI_Model
{

    public function guardar_poas($data)
    {
        if (is_array($data))
        {
            $this->db->query('call sp_resgistro_poas(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', $data);
        }
        return FALSE;
    }

}

/* End of file Registros_model.php */
/* Location: ./application/models/Registros_model.php */