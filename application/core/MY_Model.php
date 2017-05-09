<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    /**
     * Permite retornar los valores correspondientes a los registros de inserción múltiple
     * @param array $array entrada de los registros desordenados
     * @param int $id valor de la llave foránea de la tabla relacionada
     * @param string $name_id Nombre de la columna que contendrá el valor id
     * @return array
     */
    protected function get_current_data($array, $id, $name_id) {
        $insert = array();
        while (TRUE) {
            foreach ($array as $key => &$value) {
                if (($datos[$key] = current($value)) === FALSE) {
                    break 2;
                }
            }
            $datos[$name_id] = $id;
            $insert[] = $datos;
            foreach ($array as $key => &$value) {
                next($value);
            }
        }
        return $insert;
    }

    /**
     * Método que hace incisiones simultáneas a la base de datos 
     * sobre una misma tabla.
     * @param string $table  Nombre de la tabla a la cual se va a hecer la inserción
     * @param array  $data   Datos que se van a insertar
     */
    protected function insert_multiple_data($table, $data) {
        foreach ($data as $value) 
        {
            $this->db->insert($table, $value);
        }
    }

    /**
     * Función que permite remplazar los caracteres especiales en la entrada 
     * de datos dentro del formulario.
     * @param array $array 
     * @param string $key
     * @return array
     */
    protected function get_values(array $array, $key = '') {
        foreach ($array as $clave => $valor) {
            if (is_array($valor)) {
                $array[$clave] = $this->get_values($valor, $clave);
                continue;
            }
            if ((substr($clave, 0, 3) === 'int' 
                OR substr($clave, 0, 3) === 'dbl')
                OR (substr($key, 0, 3) === 'int' 
                OR substr($key, 0, 3) === 'dbl')) {
                $array[$clave] = empty($valor) ? 0 : htmlentities($valor, ENT_QUOTES);
            } else {
                $array[$clave] = empty($valor) ? NULL : htmlentities(mb_strtoupper($valor), ENT_QUOTES);
            }
        }
        return $array;
    }

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */