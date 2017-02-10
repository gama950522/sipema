<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuarios_model');
        $this->session->set_userdata('check_after', FALSE);
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') === TRUE)
        {
            redirect(site_url('sipema/'));
        }
        else
        {
            $this->load->view('layout/header');
            $this->load->view('sipema/login');
            $this->load->view('layout/footer');
            
        }
    }

    public function inicio_sesion()
    {
        $data_user['username'] = $this->input->post('inp_username');
        $data_user['password'] = hash('sha256', $this->input->post('psw_password'));
        
        $res['action']         = $this->usuarios_model->authenticate($data_user);
        if ($res['action'] === FALSE)
        {
            # code...
        }
        $res['href']  = site_url('sipema/');
        $res['items'] = $data_user;
        echo json_encode($res);
    }

    public function destruir()
    {
        $item_session = array('id', 'user');
        $this->session->set_userdata('logged_in', FALSE);
        $this->session->unset_userdata($item_session);
        redirect(site_url('login/'));
    }

}

/* End of file Authentication.php */
/* Location: ./application/controllers/Authentication.php */