<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Programas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('check_after') === FALSE)
        // {
        //     redirect(site_url('sipema'));
        // }
        // $this->session->set_userdata('check_after', TRUE);
    }

    public function index()
    {
        $this->load->helper('smiley');
        $this->load->library('table');

        $image_array = get_clickable_smileys(site_url('public/images/svg/'), 'comments');
        $col_array = $this->table->make_columns($image_array, 8);

        $data['smiley_table'] = $this->table->generate($col_array);
        $this->load->view('smiley/table_smiley', $data);
    }

    public function FunctionName($value='')
    {

    }





    // public function programa($cat = '')
    // {
    //     if (!($cat === ''))
    //     {
    //         $view = '';
    //         switch ($cat)
    //         {
    //             case '5':
    //                 $view = 'sipema/division_programas';
    //                 break;
    //             default:
    //                 # code...
    //                 break;
    //         }
    //         $this->load->view('layout/header');
    //         $this->load->view($view);
    //         $this->load->view('layout/footer');
    //     }
    //     else
    //     {
    //         redirect(site_url('sipema/'));
    //     }
    // }

    // public function subprograma($num = '')
    // {
    //     if ($num === '')
    //     {
    //         redirect(site_url());
    //     }
    //     else
    //     {
    //         $view = '';
    //         switch ($num)
    //         {
    //             case '3':
    //                 $view = 'sipema/steps';
    //                 break;
    //             default:
    //                 redirect(site_url());
    //                 break;
    //         }
    //         //$this->load->view('layout/header');
    //         $this->load->view($view);
    //         $this->load->view('layout/footer');
    //     }
    // }

    // public function guardar_reg()
    // {
    //     if ($this->validacion_campos())
    //     {
    //         $data['success'] = ($this->registros_model->guardar_poas($this->get_data()) === NULL ? TRUE : FALSE);
    //     }
    //     else
    //     {
    //         $data['success'] = FALSE;
    //     }
    //     echo json_encode($data);
    //     // echo $this->algo();
    // }

}

/* End of file Porgrmas.php */
/* Location: ./application/controllers/Porgrmas.php */