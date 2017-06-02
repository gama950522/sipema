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
        $this->load->model('sipema_model');
        $this->load->model('personal_model');
    }

    public function index()
    {
        $perfil           = $this->catalogos_model->get_permisos();
        $data['personal'] = $this->personal_model->get_nombre_personal();
        $data['programa'] = $this->catalogos_model->get_programa();
        if ($perfil['nombre'] === 'Secretario')
        {
            $this->load->view('layout/header_static', $data);
            $this->load->view('sipema/acceso/secretario');
        }
        else if ($perfil['nombre'] === 'Director (a)')
        {

            $this->load->view('layout/header_static', $data);
            $this->load->view('sipema/acceso');
        }
        else if ($perfil['nombre'] === 'Subdirector')
        {
            $data['subprograma'] = $this->catalogos_model->get_subprograma();
            $this->load->view('layout/header_static', $data);
            $this->load->view('sipema/acceso');
        }
        else if ($perfil['nombre'] === 'Administrador')
        {
            
        }
        else
        {
            
        }
        $this->load->view('layout/footer');
    }

    public function cartadescriptiva()
    {

        $data['personal'] = $this->personal_model->get_nombre_personal();
        $data['registro'] = $this->get();
        $this->load->view('layout/header_static', $data);
        if (!FALSE)
            $this->load->view('sipema/carta_descriptiva');
        else
            $this->load->view('sipema/mantenimiento');
        $this->load->view('layout/footer');
    }

    public function benefcios($value = '')
    {
        $data['personal'] = $this->personal_model->get_nombre_personal();
        $this->load->view('layout/header_static', $data);
        $this->load->view('sipema/beneficio');
        $this->load->view('layout/footer');
    }

    public function presupuestodesagregado($value = '')
    {
        $data['personal'] = $this->personal_model->get_nombre_personal();
        $this->load->view('layout/header_static', $data);
        $this->load->view('sipema/presupuesto_desagregado');
        $this->load->view('layout/footer');
    }

    public function programacionmetas($value = '')
    {
        $data['personal'] = $this->personal_model->get_nombre_personal();
        $this->load->view('layout/header_static', $data);
        $this->load->view('sipema/programacion_metas');
        $this->load->view('layout/footer');
    }

    public function viaticos($value = '')
    {
        $data['personal'] = $this->personal_model->get_nombre_personal();
        $this->load->view('layout/header_static', $data);
        $this->load->view('sipema/viaticos');
        $this->load->view('layout/footer');
    }

    public function reportes()
    {
        $data['personal'] = $this->personal_model->get_nombre_personal();
        $this->load->view('layout/header_static', $data);
        $this->load->view('reportes/lista_reportes');
        $this->load->view('layout/footer');
    }

    public function acceso()
    {
        // echo "<pre>";
        // print_r($this->catalogos_model->get_permisos());
        // echo "</pre>";


        $perfil = $this->catalogos_model->get_permisos();
        if ($perfil['nombre'] === 'Secretario')
        {
            return 'Secretario';
        }
        else if ($perfil['nombre'] === 'Director (a)')
        {
            return 'Director';
        }
        else if ($perfil['nombre'] === 'Subdirector')
        {
            return 'Subdirector';
        }
        else if ($perfil['nombre'] === 'Administrador')
        {
            return 'Administrador';
        }
        else
        {
            return $perfil['nombre'] . ' "Nivel de acceso no válido"';
        }
    }

    public function get()
    {
        $get = $this->sipema_model->get_carta_descriptiva();
        if ( ! TRUE)
        {
            return $get !== NULL ? json_encode($get): '';
        }
        else
        {
            //echo utf8_decode(json_encode($get));
        }
    }

    public function categoria($value = '')
    {
        $ids     = $this->catalogos_model->get_idcatalogo('cat_sipema');
        $columns = array_column($ids, 'id');
        if ($value !== '' && in_array($value, $columns))
        {
            $data['info']      = $this->catalogos_model->get_programas($value);
            $data['categoria'] = $this->catalogos_model->get_nombre_categoria('cat_sipema', $value);
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
            $data['info']      = $this->catalogos_model->get_subprogramas($value);
            $data['categoria'] = $this->catalogos_model->get_nombre_categoria('cat_programas', $value);
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
            $data['info']          = $this->catalogos_model->get_current_view($value);
            $data['direcciones']   = $this->catalogos_model->get_direcciones();
            $data['idsubprograma'] = $value;
            $this->load->view('layout/header', $data);
            $this->load->view('sipema/' . ($data['info']['descripcion'] === NULL ? 'mantenimiento' : $data['info']['descripcion']));
            $this->load->view('layout/footer');
        }
        else
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function oki()
    {
        echo '<pre>';
        echo json_encode($this->input->post());
        echo '</pre>';

        echo '<pre>';
        print_r($this->input->post());
        echo '</pre>';
    }

    public function okii()
    {
        if ($this->validacion_campos())
        {
            $this->registros_model->add_registro('carta_descriptiva', $this->get_values($this->input->post()));
        }
    }

    public function guardar_reg()
    {
        if ($this->validacion_campos())
        {
            $data['success']  = $this->registros_model->add_data($this->input->post());
            $data['url']      = $data['success'] === TRUE ? $_SERVER['HTTP_REFERER'] : '';
            $data['messages'] = NULL;
        }
        else
        {
            $data['success'] = FALSE;
            foreach ($this->input->post() as $key => $value)
            {
                $data['messages'][$key] = form_error($key);
            }
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

    public function set_table_direcciones($id_direccion)
    {

        $view = $this->catalogos_model->get_view_control_indicadores($id_direccion)['descripcion'];
        if ($view === NULL)
        {
            $view = 'no_disponible';
        }

        echo json_encode($this->load->view('tables/' . $view));
        // if(($data = $this->catalogos_model->get_control_direcciones($id_direccion)) !== NULL)
        // {
        // }
        //echo json_encode($data);
    }

}
