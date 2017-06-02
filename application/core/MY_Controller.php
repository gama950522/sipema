<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Meter más validaciones correspondientes a cada campo
     * @return array
     */
    public function validacion_campos()
    {
        //$this->form_validation->set_message('requred', 'El campo es requerido para continuar.');
        //$this->form_validation->set_message('numeric', 'El campo solo debe contener valores numéricos.');
        foreach ($this->input->post() as $key => $value)
        {
            if (substr($key, 0, 3) === 'txt')
            {
                $this->form_validation->set_rules($key, '', 'trim');
            }
            elseif (substr($key, 0, 3) === 'int')
            {
                $this->form_validation->set_rules($key, '', 'trim|numeric');
            }
            elseif (substr($key, 0, 3) === 'str')
            {
                $this->form_validation->set_rules($key, '', 'trim');
            }
            elseif (substr($key, 0, 3) === 'dte')
            {
                $this->form_validation->set_rules($key, '', 'trim');
            }
            elseif (substr($key, 0, 3) === 'dbl')
            {
                $this->form_validation->set_rules($key, '', 'trim');
            }
            else
            {
                $this->form_validation->set_rules($key, '', 'trim');
            }
        }

        // $this->$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">','</div>');
        return $this->form_validation->run();
    }


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
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */