<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Semarnat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('nuevos_formularios/carta_descriptiva_proyecto');
        $this->load->view('layout/footer');
    }

    public function form()
    {
        $this->load->model('registros_model');
        $this->registros_model->add_data($this->input->post());

        // echo "-------------------------------------------------";
        // echo '<pre>';
        // print_r($this->input->post());
        // echo '</pre>';
        //echo count($this->input->post());
    }

}

/* End of file Semarnat.php */
/* Location: ./application/controllers/Semarnat.php */