<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends CI_Model
{

    public function guardar_poas($data)
    {
    	$data['_id_user'] = $this->session->userdata('id');
    	//$this->db->query('DECLARE	@res int');
    	$sql = "call sp_resgistro_poas(";
        for($i = 0; $i < count($data); $i++)
        {
            $sql .= '?,';
        }
        $sql = substr($sql, 0,-1);
        $sql .= ')';
        $result = $this->db->query($sql, $data);
        return $result->row();
    }

    public function add_data($data)
    {


        /*
            ['str_eje_tematico'] => AAAAAAAAAAAAAAA
            ['str_programa_sectorial'] => AAAAAAAAAAAAAAAAAA
            ['str_programa_presupuestario'] => AAAAAAAAAAAAAAAAAAAAA
            ['str_nombre_proyecto_componente'] => klñklAAAAAAAAAAAAAA
            ['dte_periodo_ejec_inicio'] => AAAAAAAAAAAAAAAAA
            ['str_subeje'] => AAAAAAAAAAAAA
            ['str_area_responsable'] => AAAAAAAAAAAAAAAAAAA
            ['str_titular'] => AAAAAAAAAAAAAAAAAAAAA
            ['str_responsable'] => AAAAAAAAAAAAAAAAA
            ['dte_priodo_ejec_fin'] => AAAAAAAAAAAAAAAA
            ['txt_fundamento_legal'] => AAAAAAAAAAAAAAAAAAAAAA
            ['txt_situacion_actual'] => AAAAAAAAAAAAAAAAAAAAAAAAA
            ['txt_justificacion_proyecto'] => AAAAAAAAAAAAAAAAAAAAAAAAAA
            ['txt_objetivo_proyecto'] => AAAAA
            ['txt_estategias'] => AAAAAAAAAAAAAAAAA
            ['txt_lineas_accion'] => AAAAAAAAAAAAAAA
            ['txt_situacion_esperada'] => AAAAAAAAAAAAAAAAAAAAAAA
            ['txt_justificacion_recursos'] => AAAAAAAAAAAAAAAAAAAA
            ['txt_observaciones'] => AAAAAAAA

            ['str_cobertura'] => AAAAAAAAAAAAAAA
            ['int_prenatal_h'] => 13
            ['int_ninos_h'] => 12
            ['int_adolcesc_h'] => 9
            ['int_joven_h'] => 11
            ['int_adulto_h'] => 11
            ['int_mayor_h'] => 13
            ['int_prenatal_m'] => 12
            ['int_ninos_m'] => 13
            ['int_adolcesc_m'] => 16
            ['int_joven_m'] => 12
            ['int_adulto_m'] => 11
            ['int_mayor_m'] => 24

            ['str_nombre_componente'] => AAAAA
            ['txt_comp_ene'] => AAAAAAAAAAAA
            ['txt_comp_feb'] => AAAAAAAAAAAA
            ['txt_comp_mar'] => AAAAAAAAAAA
            ['txt_comp_abr'] => AAAAAAAAAAAAA
            ['txt_comp_may'] => AAAAAAAAAA
            ['txt_comp_jun'] => AAAAAAAAAAA
            ['txt_comp_jul'] => AAAAAAAAAA
            ['txt_comp_ago'] => AAAAAAAAAAAAA
            ['txt_comp_sep'] => AAAAAAAAAAAAA
            ['txt_comp_oct'] => AAAAAAA
            ['txt_comp_nov'] => AAAAAAAAAAAAAAA
            ['txt_comp_dic'] => AAAAAAAAAAA
            ['txt_comp_meta_final'] => AAAAAAAAAAAAAAAAAAAAAA
            ['str_nombre_actividad'] => AAAAAAAAAAAAAAAAAAAAAA
            ['txt_acti_ene'] => AAAAA
            ['txt_acti_feb'] => AAAAAAAAAAAAA
            ['txt_acti_mar'] => AAAAAAAAAAAA
            ['txt_acti_abr'] => AAAAAAAAAAAAA
            ['txt_acti_may'] => AAAAAAAAAAAAAA
            ['txt_acti_jun'] => AAAAAAAAAA
            ['txt_acti_jul'] => AAAAAAAAAAAAAA
            ['txt_acti_ago'] => AAAAAAAAAAAA
            ['txt_acti_sep'] => AAAAAAAAAAA
            ['txt_acti_oct'] => AAAAA
            ['txt_acti_nov'] => AAAAAAAAAAA
            ['txt_acti_dic'] => AAAAAAAAAAAA
            ['txt_acti_meta_final'] => AAAAAAAAAAAAAAAAAAAAAAAA

            ['str_organo_sup'] => lkñAAAAAAAAAA
            ['str_nombre_proyecto'] => lkñAAAAAAAAAA
            ['str_unidad_presupestal'] => ññkl
            ['txt_descripcion_proyecto'] => ftu

            ['str_partida_especifica'] => Array
            ['str_nombre_partida'] => Array
            ['int_monto_total_solicitado'] => Array
            ['int_mto_ene'] => Array
            ['int_mto_feb'] => Array
            ['int_mto_mar'] => Array
            ['int_mto_abr'] => Array
            ['int_mto_may'] => Array
            ['int_mto_jun'] => Array
            ['int_mto_jul'] => Array
            ['int_mto_ago'] => Array
            ['int_mto_sep'] => Array
            ['int_mto_oct'] => Array
            ['int_mto_nov'] => Array
            ['int_mto_dic'] => Array
        */

        $this->db->trans_start();
        
        $carta_descriptiva['eje_tematico']               = $data['str_eje_tematico'];
        $carta_descriptiva['programa_sectorial']         = $data['str_programa_sectorial'];
        $carta_descriptiva['programa_presupuestario']    = $data['str_programa_presupuestario'];
        $carta_descriptiva['nombre_proyecto_componente'] = $data['str_nombre_proyecto_componente'];
        $carta_descriptiva['periodo_ejec_inicio']        = $data['dte_periodo_ejec_inicio'];
        $carta_descriptiva['subeje']                     = $data['str_subeje'];
        $carta_descriptiva['area_responsable']           = $data['str_area_responsable'];
        $carta_descriptiva['titular']                    = $data['str_titular'];
        $carta_descriptiva['responsable']                = $data['str_responsable'];
        $carta_descriptiva['priodo_ejec_fin']            = $data['dte_priodo_ejec_fin'];
        $carta_descriptiva['fundamento_legal']           = $data['txt_fundamento_legal'];
        $carta_descriptiva['situacion_actual']           = $data['txt_situacion_actual'];
        $carta_descriptiva['justificacion_proyecto']     = $data['txt_justificacion_proyecto'];
        $carta_descriptiva['objetivo_proyecto']          = $data['txt_objetivo_proyecto'];
        $carta_descriptiva['estategias']                 = $data['txt_estategias'];
        $carta_descriptiva['lineas_accion']              = $data['txt_lineas_accion'];
        $carta_descriptiva['situacion_esperada']         = $data['txt_situacion_esperada'];
        $carta_descriptiva['justificacion_recursos']     = $data['txt_justificacion_recursos'];
        $carta_descriptiva['observaciones']              = $data['txt_observaciones'];
        $this->db->insert('carta_descriptiva', $carta_descriptiva);
        $this->db->select_max('id');
        $ids['id_carta_descriptiva'] = $this->db->get('carta_descriptiva', 1);

        //$beneficio_social = $this->_get_fields();


        $beneficio_social['cobertura']  = $data['str_cobertura'];
        $beneficio_social['prenatal_h'] = $data['int_prenatal_h'];
        $beneficio_social['ninos_h']    = $data['int_ninos_h'];
        $beneficio_social['adolcesc_h'] = $data['int_adolcesc_h'];
        $beneficio_social['joven_h']    = $data['int_joven_h'];
        $beneficio_social['adulto_h']   = $data['int_adulto_h'];
        $beneficio_social['mayor_h']    = $data['int_mayor_h'];
        $beneficio_social['prenatal_m'] = $data['int_prenatal_m'];
        $beneficio_social['ninos_m']    = $data['int_ninos_m'];
        $beneficio_social['adolcesc_m'] = $data['int_adolcesc_m'];
        $beneficio_social['joven_m']    = $data['int_joven_m'];
        $beneficio_social['adulto_m']   = $data['int_adulto_m'];
        $beneficio_social['mayor_m']    = $data['int_mayor_m'];

        $this->db->insert('beneficio_social', $beneficio_social);
        $this->db->select_max('id');
        $ids['id_beneficio_social'] = $this->db->get('beneficio_social', 1);

        $programacion_metas['nombre_componente']  = $data['str_nombre_componente'];
        $programacion_metas['comp_ene']           = $data['txt_comp_ene'];
        $programacion_metas['comp_feb']           = $data['txt_comp_feb'];
        $programacion_metas['comp_mar']           = $data['txt_comp_mar'];
        $programacion_metas['comp_abr']           = $data['txt_comp_abr'];
        $programacion_metas['comp_may']           = $data['txt_comp_may'];
        $programacion_metas['comp_jun']           = $data['txt_comp_jun'];
        $programacion_metas['comp_jul']           = $data['txt_comp_jul'];
        $programacion_metas['comp_ago']           = $data['txt_comp_ago'];
        $programacion_metas['comp_sep']           = $data['txt_comp_sep'];
        $programacion_metas['comp_oct']           = $data['txt_comp_oct'];
        $programacion_metas['comp_nov']           = $data['txt_comp_nov'];
        $programacion_metas['comp_dic']           = $data['txt_comp_dic'];
        $programacion_metas['comp_meta_final']    = $data['txt_comp_meta_final'];
        $this->db->insert('programacion_metas', $programacion_metas);
        $this->db->select_max('id');
        $ids['id_programacion_metas'] = $this->db->get('programacion_metas', 1);

        $programacion_acti['nombre_actividad'] = $data['str_nombre_actividad'];
        $programacion_acti['acti_ene']         = $data['txt_acti_ene'];
        $programacion_acti['acti_feb']         = $data['txt_acti_feb'];
        $programacion_acti['acti_mar']         = $data['txt_acti_mar'];
        $programacion_acti['acti_abr']         = $data['txt_acti_abr'];
        $programacion_acti['acti_may']         = $data['txt_acti_may'];
        $programacion_acti['acti_jun']         = $data['txt_acti_jun'];
        $programacion_acti['acti_jul']         = $data['txt_acti_jul'];
        $programacion_acti['acti_ago']         = $data['txt_acti_ago'];
        $programacion_acti['acti_sep']         = $data['txt_acti_sep'];
        $programacion_acti['acti_oct']         = $data['txt_acti_oct'];
        $programacion_acti['acti_nov']         = $data['txt_acti_nov'];
        $programacion_acti['acti_dic']         = $data['txt_acti_dic'];
        $programacion_acti['acti_meta_final']  =  $data['txt_acti_meta_final'];

        $this->db->insert('programacion_actividades', $programacion_acti);
        $this->db->select_max('id');
        $ids['id_programacion_actividades'] = $this->db->get('programacion_actividades', 1);

        $presupesto_desag['organo_sup'] = $data['str_organo_sup'];
        $presupesto_desag['nombre_proyecto'] = $data['str_nombre_proyecto'];
        $presupesto_desag['unidad_presupestal'] = $data['str_unidad_presupestal'];
        $presupesto_desag['descripcion_proyecto'] = $data['txt_descripcion_proyecto'];

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            // generate an error... or use the log_message() function to log your error
        }



        // $this->db->trans_begin();

        // $this->db->query('AN SQL QUERY...');
        // $this->db->query('ANOTHER QUERY...');
        // $this->db->query('AND YET ANOTHER QUERY...');

        // if ($this->db->trans_status() === FALSE)
        // {
        //         $this->db->trans_rollback();
        // }
        // else
        // {
        //         $this->db->trans_commit();
        // }
    }

    private function _get_fields($value='')
    {
        # code...
    }
//call sp_resgistro_poas(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"
   

}

/* End of file Registros_model.php */
/* Location: ./application/models/Registros_model.php */