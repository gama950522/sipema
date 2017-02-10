<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * falata agregara mas tipos de validaciones
     * @return type
     */
    public function validacion_campos()
    {
        foreach ($this->input->post() as $key)
        {
            if (substr($key, 0, 3) === 'txt')
            {
                $this->form_validation->set_rules($key, '', 'trim|required');
            }
            elseif (substr($key, 0, 3) === 'int')
            {
                $this->form_validation->set_rules($key, '', 'trim|numeric');
            }
            elseif (substr($key, 0, 3) === 'str')
            {
                $this->form_validation->set_rules($key, '', 'trim|required');
            }
            elseif (substr($key, 0, 3) === 'dte')
            {
                $this->form_validation->set_rules($key, '', 'trim|required');
            }
            elseif (substr($key, 0, 3) === 'dbl')
            {
                $this->form_validation->set_rules($key, '', 'trim|required');
            }
            else 
            {
            }
        }
        return $this->form_validation->run();
    }

    public function get_data()
    {
        $data = array();
        foreach ($this->input->post() as $key => $value) 
        {
            $data[substr($key, 3)] = htmlentities($value);
        }
        return $data;
    }

}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */