<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function validacion_campos()
    {
        $cont = 0;
        foreach ($this->input->post() as $key => $value)
        {
            if (substr($key, 0, 3) === 'txt')
            {
                $this->form_validation->set_rules($key, '', 'trim|required');
                //echo "texto" . "<br>";
            }
            elseif (substr($key, 0, 3) === 'int')
            {
                $this->form_validation->set_rules($key, '', 'trim|numeric');
                //echo "integer" . "<br>";
            }
            elseif (substr($key, 0, 3) === 'str')
            {
                $this->form_validation->set_rules($key, '', 'trim|required');
                //echo "string" . "<br>";
            }
            elseif (substr($key, 0, 3) === 'dte')
            {
                $this->form_validation->set_rules($key, '', 'trim|required');
                //echo "date" . "<br>";
            }
            elseif (substr($key, 0, 3) === 'dbl')
            {
                $this->form_validation->set_rules($key, '', 'trim|required');
                //echo "double" . "<br>";
            }
            else 
            {
                //$this->form_validation->set_rules($key, '', 'trim');
                //echo "entro al else" . "<br>";
            }
            //$cont++;
            //echo $key . "<br>";
        }
        //echo $cont;
        //$this->form_validation->set_error_delimiters('<p>','</p>');
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

    // public function algo()
    // {
    //     echo "string";
    // }

}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */