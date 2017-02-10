<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //$this->session->set_userdata('check_after', FALSE);
    }

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

        // $nombre = gethostname(); //puede imprimir: sandie
        // echo $nombre; 
        // $ip = gethostbyname($nombre); 
        // echo $ip; 
    }

    
    public function get()
    {
        $this->load->model('usuarios_model');
       // foreach($ as $row)
       // {
       //     echo $row->username . '<br>';
       //     echo $row->password;
       // }
        echo json_encode($this->usuarios_model->get_all());
    }
}
