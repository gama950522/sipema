<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sipema extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('sipema/mir');
        $this->load->view('layout/footer');
    }

    public function categoria($value = '')
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
                    redirect(site_url('sipema/'));
                    break;
            }
            $this->load->view('layout/header');
            $this->load->view($view);
            $this->load->view('layout/footer');
        }
    }

    public function programa($cat = '')
    {
        if ( ! ($cat === ''))
        {
            $view = '';
            switch ($cat)
            {
                case '5':
                    $view = 'sipema/division_programas';
                    break;
                default:
                    # code...
                    break;
            }
            $this->load->view('layout/header');
            $this->load->view($view);
            $this->load->view('layout/footer');
        }
        else
        {
            redirect(site_url('sipema/'));
        }
    }

    public function subprograma($num = '')
    {
        if ($num === '')
        {
            redirect(site_url());
        }
        else
        {
            $view = '';
            switch ($num)
            {
                case '3':
                    $view = 'sipema/steps';
                    break;
                default:
                    redirect(site_url());
                    break;
            }
            $this->load->view('layout/header');
            $this->load->view($view);
            $this->load->view('layout/footer');
        }
    }

    public function guardar_reg()
    {
        $data = $this->input->post();
        foreach ($data as $key => $value) 
        {
            $data[$key] = htmlentities($value);
        }
        echo json_encode($data);


    }

}
