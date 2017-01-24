<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('welcome_message');
        $this->load->view('layout/footer');
    }

    public function destruir()
    {
        $item_session = array('id','user');
        $this->session->set_userdata('logged_in',FALSE);
        $this->session->unset_userdata($item_session);
    }

    public function login()
    {
        if ($this->session->userdata('logged_in') === TRUE) 
        {
            redirect(site_url('welcome/mir/'));
        }
        else 
        {
            $this->load->view('layout/header');
            $this->load->view('sipema/login');
            $this->load->view('layout/footer');
        }
    }

    public function mir()
    {
        $this->load->view('layout/header');
        $this->load->view('sipema/mir');
        $this->load->view('layout/footer');
    }

    public function sipema($value = '')
    {
        if ($value === '')
        {
            redirect(site_url('index.php/welcome/mir/'));
        }
        else
        {
            $view = '';
            switch ($value)
            {

                case '8':
                    $view = 'sipema/subprogramas';
                    break;

                default:
                    redirect(site_url('index.php/welcome/mir/'));
                    break;
            }
            $this->load->view('layout/header');
            $this->load->view($view);
            $this->load->view('layout/footer');
        }
        //
    }

    public function division($sub = '', $div = '')
    {
        if ( ! ($sub === '' && $div === ''))
        {
            $this->load->view('layout/header');
            $this->load->view('sipema/division_programas');
            $this->load->view('layout/footer');
        }
        # code...
    }

    public function wizard()
    {
        $this->load->view('layout/header');
        $this->load->view('sipema/steps');
        $this->load->view('layout/footer');
    }

}
