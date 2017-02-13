<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends CI_Model
{

    public function guardar_poas($data)
    {
    	$data['_id_user'] = $this->session->userdata('id');
    	//$this->db->query('DECLARE	@res int');
    	$sql = "call sp_resgistro_poas(";
        for($i = 0; $i < count($data); $i++)
        {
            $sql .= '?,';
        }
        $sql = substr($sql, 0,-1);
        $sql .= ')';
        $result = $this->db->query($sql, $data);
        return $result->row();
    }
//call sp_resgistro_poas(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"
   

}

/* End of file Registros_model.php */
/* Location: ./application/models/Registros_model.php */