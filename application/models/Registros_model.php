<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends CI_Model
{

    public function guardar_poas($data)
    {
    	$data['_id_user'] = $this->session->userdata('id');
    	//$this->db->query('DECLARE	@res int');
    	$sql = "exec sp_resgistro_poas ";
    	foreach ($data as $key => $value)
    	{
    		$sql .= "@$key = '$value',";
    	}
    	$sql = substr($sql, 0 ,-1);
        return $this->db->query($sql)->row_array();
    }

   

}

/* End of file Registros_model.php */
/* Location: ./application/models/Registros_model.php */