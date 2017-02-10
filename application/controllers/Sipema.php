<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sipema extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        //echo('ALGO');
        if (!$this->session->userdata('logged_in'))
        {
            redirect(site_url('login/'));
            //E9QE746DSF32GFH5J78KLI4K5JMN1BCV4F8GT7
        }
        $this->load->model('registros_model');
        $this->load->model('catalogos_model');
    }

    public function index()
    {
        $data['fields'] = $this->catalogos_model->get_sipema();
        $this->load->view('layout/header', $data);
        $this->load->view('sipema/mir');
        $this->load->view('layout/footer');
    }
   
    public function categoria($value = '')
    {
        if ($value === '')
        {
            redirect(site_url('welcome/mir/'));
        }
        else
        {
            $view = '';
            switch ($value)
            {
                case '9':
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
            //$this->load->view('layout/header');
            $this->load->view($view);
            $this->load->view('layout/footer');
        }
    }

    public function guardar_reg()
    {
        if($this->validacion_campos())
        {
            $data['success'] = ($this->registros_model->guardar_poas($this->get_data()) === NULL ? TRUE : FALSE);
        }
        else
        {
            $data['success'] = FALSE;
        }
        echo json_encode($data);
        // echo $this->algo();
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

     public function check_user()
    {
    //     $this->load->model('usuarios_model');
    //     $username = $this->input->post('srt_username');
    //     $password = (empty($this->input->post('psw_password')) ? '' : hash('sha256', $this->input->post('psw_password')));
    //     if ($this->session->userdata('user') === $username && $this->usuarios_model->is_same_password($password)) 
    //     {
    //         $this->session->set_userdata('check_after', TRUE);
             redirect(site_url('programas'));
    //     }
     }

// @_antecedentes text,
// @_result_obt text,
// @_justificacion text,
// @_fundamento_legal text,
// @_desc_prob text,
// @_obj_gral text,
// @_obj_esp text,
// @_fechaini date,
// @_fecha_fin date,
// @_sit_actual text,
// @_estrategias text,
// @_sit_esperada text,
// @_lineas_accion text,
// @_cobertura text,
// @_poblacion_bene text,
// @_poblacion_obj text,
// @_carac_poblacion text,
// @_prenatal_h int,
// @_ninos_h int,
// @_adolcesc_h int,
// @_joven_h int,
// @_adulto_h int,
// @_mayor_h int,
// @_prenatal_m int,
// @_ninos_m int,
// @_adolcesc_m int,
// @_joven_m int,
// @_adulto_m int,
// @_mayor_m int,
// @_impacto_soc text,
// @_monto_fin float,
// @_fuente_fin varchar(100),
// @_ene int,
// @_febr int,
// @_mzo int,
// @_abr int,
// @_may int,
// @_jun int,
// @_jul int,
// @_ago int,
// @_sep int,
// @_oct int,
// @_nov int,
// @_dic int,
// @_nom_indicador varchar(100),
// @_unidad_medida varchar(100),
// @_periodo_verif text,
// @_formula text,
// @_meta text,


}
