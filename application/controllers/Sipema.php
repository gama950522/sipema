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
            $data['info'] = $this->catalogos_model->get_subprogramas($value);
            $data['categoria'] = $this->catalogos_model->get_nombre_categoria('cat_programas',$value);
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
            $this->load->view('sipema/'.($data['info']['descripcion'] === NULL ? 'mantenimiento': $data['info']['descripcion']));
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
            $data['success'] = $this->registros_model->add_data($this->input->post());
            $data['url']     = $_SERVER['HTTP_REFERER'];
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

        if ($this->session->userdata('user') === $username 
            && $this->usuarios_model->is_same_password($password) 
            && in_array($value, array_column($ids, 'id')))
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
        
        echo json_encode($this->load->view( 'tables/'.$view));
        // if(($data = $this->catalogos_model->get_control_direcciones($id_direccion)) !== NULL)
        // {

        // }

        //echo json_encode($data);
    }
}
