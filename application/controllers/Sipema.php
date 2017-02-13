<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sipema extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in'))
        {
            redirect(site_url('login/'));
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
        $ids     = $this->catalogos_model->get_idcatalogo('cat_sipema');
        $columns = array_column($ids, 'id');
        if ($value !== '' && in_array($value, $columns))
        {
            $data['info']      = $this->catalogos_model->get_programas($value);
            $data['categoria'] = $this->catalogos_model->get_nombre_categoria($value);
            $this->load->view('layout/header', $data);
            $this->load->view('sipema/subprogramas');
            $this->load->view('layout/footer');
        }
        else
        {
            redirect(site_url('sipema/'));
        }
    }

    public function programa($value = '')
    {
        $ids     = $this->catalogos_model->get_idcatalogo('cat_programas');
        $columns = array_column($ids, 'id');
        if ($value !== '' && in_array($value, $columns))
        {
            $data['info'] = $this->catalogos_model->get_subprogramas($value);
            $this->load->view('layout/header', $data);
            $this->load->view('sipema/division_programas');
            $this->load->view('layout/footer');
        }
        else
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function subprograma($value = '')
    {
        $ids     = $this->catalogos_model->get_idcatalogo('cat_sub_programas');
        $columns = array_column($ids, 'id');
        if ($value !== '' && in_array($value, $columns))
        {
            $data['info']          = $this->catalogos_model->get_subprogramas($value);
            $data['idsubprograma'] = $value;
            $this->load->view('layout/header', $data);
            $this->load->view('sipema/steps');
            $this->load->view('layout/footer');
        }
        else
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function guardar_reg()
    {
        if ($this->validacion_campos())
        {
            $data['success'] = $this->registros_model->guardar_poas($this->get_data())->result;
            $data['url']     = $_SERVER['HTTP_REFERER'];
        }
        else
        {
            $data['success'] = FALSE;
        }
        echo json_encode($data);
    }

    public function check_user()
    {
        $this->load->model('usuarios_model');
        $username = $this->input->post('str_username');
        $password = (empty($this->input->post('psw_password')) ? '' : hash('sha256', $this->input->post('psw_password')));
        $value    = $this->input->post('hid_idprograma');
        $ids      = $this->catalogos_model->get_idcatalogo('cat_programas');

        if ($this->session->userdata('user') === $username && $this->usuarios_model->is_same_password($password) && in_array($value, array_column($ids, 'id')))
        {
            $this->session->set_userdata('check_after', TRUE);
            $data['url']     = site_url('sipema/programa/' . $value . '/');
            $data['success'] = TRUE;
        }
        else
        {
            $data['url']     = $_SERVER['HTTP_REFERER'];
            $data['success'] = FALSE;
        }
        echo json_encode($data);
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
