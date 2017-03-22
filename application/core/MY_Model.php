<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	protected function get_current_data($array, $id, $index_id)
    {
        $insert = array();
        while (TRUE)
        {
            foreach ($array as $key => &$value)
            {
                if (($datos[$key] = current($value)) === FALSE)
                {
                    break 2;
                }
            }

            $datos[$index_id] = $id;
            $insert[]    = $datos;
            foreach ($array as $key => &$value)
            {
                next($value);
            }
        }
        return $insert;
    }

    protected function insert_multiple_data($table, $data)
    {
        foreach ($data as $value) 
        {
            $this->db->insert($table, $value);
        }
    }

    protected function get_values(array $array, $key='')
    {
        foreach ($array as $clave => $valor) 
        {
        	if (is_array($valor)) 
        	{
        		$array[$clave] = $this->get_values($valor, $clave);
        		continue;
        	}
        	if ((substr($clave, 0, 3) === 'int' OR substr($clave, 0, 3) === 'dbl') 
        		OR (substr($key, 0, 3) === 'int' OR substr($key, 0, 3) === 'dbl')) 
        	{
	        	$array[$clave] = empty($valor) ? 0 : htmlentities($valor, ENT_QUOTES);
        	}
        	else 
        	{
          		$array[$clave] = empty($valor) ? NULL :  htmlentities(mb_strtoupper($valor), ENT_QUOTES);
        	}
        }

        return $array;
    }

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */