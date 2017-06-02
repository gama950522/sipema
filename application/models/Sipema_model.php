<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sipema_model extends MY_Model
{

    public function get_carta_descriptiva()
    {
        $this->db->where('int_anio_reg', date('Y'));
        $query = $this->db->get('carta_descriptiva')->row_array();
        if ( ! is_null($query))
        {
	        foreach ($query as $key => $value)
	        {
	            $query[$key] = html_entity_decode($value);
	        }
        }
        return $query;
        // echo '<pre>';
        // print_r($query);
        // echo '</pre>';
        //return ()
    }

}

/* End of file Sipema_model.php */
/* Location: ./application/models/Sipema_model.php */