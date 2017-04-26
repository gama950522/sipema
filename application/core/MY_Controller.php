<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * 
     * @return array
     */
    public function validacion_campos()
    {
        
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
//        echo '<pre>';
//        print_r(form_error());
//        echo '</pre>';
        return $this->form_validation->run();
    }

}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */