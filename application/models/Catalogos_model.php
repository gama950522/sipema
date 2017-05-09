<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogos_model extends CI_Model
{

    public function get_sipema()
    {
        $result = $this->db->get('cat_sipema');
        return $result->result_array();
    }

    public function get_idcatalogo($catalogo)
    {

        $this->db->select('id');
        $this->db->from($catalogo);
        $ids = $this->db->get();
        return $ids->result_array();
    }

    public function get_programas($idsipema = '')
    {
        $this->db->where('id_cat_sipema', $idsipema);
        $result = $this->db->get('cat_programas');

        return $result->result_array();
    }

    public function get_nombre_categoria($table, $id = '')
    {
        $this->db->select('nombre');
        //$this->db->from('cat_sipema');
        $this->db->where('id', $id);
        $ids = $this->db->get($table, 1);
        return $ids->row();
    }

    public function get_subprogramas($id = '')
    {
        $this->db->where('id_cat_programas', $id);
        $result = $this->db->get('cat_sub_programas');

        return $result->result_array();
    }

    public function get_current_view($id = '')
    {
        $this->db->where('id', $id);
        $result = $this->db->get('cat_sub_programas');

        return $result->row_array();
    }

    public function get_direcciones()
    {
        return $this->db->get('direcciones')->result_array();
    }

    public function get_view_control_indicadores($id = '')
    {
        $this->db->where('id', $id);
        return $this->db->get('direcciones')->row_array();
    }

    public function get_perfiles()
    {
        $this->db->select('id, nombre');
        return $this->db->get('perfil')->result_array();
    }

    public function get_programass()
    {
        return $this->db->get('programa')->result_array();
    }

    public function name()
    {
        return $this->db->get('personal')->result_array();
    }

    public function get_programa()
    {
        $programa = $this->get_subprograma();
        $values   = NULL;
        foreach ($programa as $value)
        {
            if (is_array($value))
            {
                $values[] = $value['id_programa'];
            }
            else
            {
                $values = $programa['id_programa'];
                break;
            }
        }
        $this->db->where_in('id', $values);
        $result = $this->db->get('programa');
        if ($result->num_rows() > 1)
        {
            return $result->result_array();
        }
        return $result->row_array();
    }

    public function get_subprograma()
    {
        $this->db->where('id_usuario', $this->session->userdata('id'));
        $this->db->select('id_subprograma');
        $acceso = $this->db->get('acceso_user_subp');
        if ($acceso->num_rows() > 1)
        {
            $array = NULL;
            foreach ($acceso->result_array() as $key => $value)
            {
                $array[] = $value['id_subprograma'];
            }
            $this->db->where_in('id', $array);
        }
        else
        {
            $this->db->where('id', $acceso->row()->id_subprograma);
        }
        $result = $this->db->get('subprograma');
        if ($result->num_rows() > 1)
        {
            return $result->result_array();
        }
        return $result->row_array();
        // ->result_array();
    }

    public function get_permisos()
    {
        $this->db->where('id', $this->session->userdata('id'));
        $this->db->where('id', $this->db->select('id_persona')->get('usuario')->row()->id_persona);
        $this->db->where('id', $this->db->select('id_perfil')->get('personal')->row()->id_perfil);
        return $this->db->get('perfil')->row_array();
    }

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */