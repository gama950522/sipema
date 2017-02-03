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

        foreach ($this->input->post() as $key => $value)
        {
            if (substr($key, 0, 3) === 'txt')
            {
                $this->form_validation->set_rules($key, 'fieldlabel', 'trim|required|min_length[5]|max_length[12]');
            }
            elseif (substr($key, 0, 3) === 'int')
            {
                # code...
            }
            elseif (TRUE)
            {
                
            }
        }
        return $this->form_validation->run();
    }

    public function algo()
    {
        echo "string";
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
?>