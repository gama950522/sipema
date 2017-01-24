<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuarios_model');
        //Do your magic here
    }
    public function index()
    {
    }

    public function inicio_sesion()
    {
        $data_user['username'] = $this->input->post('inp_username');
        $data_user['password'] = hash('sha256', $this->input->post('psw_password'));
        $res['action'] = $this->usuarios_model->authenticate($data_user);
        if ($res['action'] === FALSE) 
        {
            # code...
        }
        $res['href'] = site_url('welcome/mir/');
        $res['items']  = $data_user;
        echo json_encode($res);
    }

}

/* End of file Authentication.php */
/* Location: ./application/controllers/Authentication.php */