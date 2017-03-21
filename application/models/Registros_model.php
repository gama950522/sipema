<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends MY_Model
{

    public function guardar_poas($data)
    {
        $data['_id_user'] = $this->session->userdata('id');
        $sql              = "call sp_resgistro_poas(";
        for ($i = 0; $i < count($data); $i++)
        {
            $sql .= '?,';
        }
        $sql    = substr($sql, 0, -1);
        $sql    .= ')';
        $result = $this->db->query($sql, $data);
        return $result->row();
    }

    public function add_data($data_form)
    {
        $data = $this->get_values($data_form);
        $this->db->trans_start();

        $carta_descriptiva = array(
            'eje_tematico'            => $data['str_eje_tematico'],
            'programa_sectorial'      => $data['str_programa_sectorial'],
            'programa_presupuestario' => $data['str_programa_presupuestario'],
            'nombre_proyecto'         => $data['str_nombre_proyecto_componente'],
            'periodo_ejec_inicio'     => $data['dte_periodo_ejec_inicio'],
            'subeje'                  => $data['str_subeje'],
            'area_responsable'        => $data['str_area_responsable'],
            'empleado_titular'        => $data['str_titular'],
            'empleado_responsable'    => $data['str_responsable'],
            'periodo_ejec_fin'        => $data['dte_priodo_ejec_fin'],
            'fundamento_legal'        => $data['txt_fundamento_legal'],
            'situacion_actual'        => $data['txt_situacion_actual'],
            'justificacion_proyecto'  => $data['txt_justificacion_proyecto'],
            'objetivo_proyecto'       => $data['txt_objetivo_proyecto'],
            'estrategias'             => $data['txt_estategias'],
            'lineas_accion'           => $data['txt_lineas_accion'],
            'situacion_esperada'      => $data['txt_situacion_esperada'],
            'justificacion_recursos'  => $data['txt_justificacion_recursos'],
            'observaciones'           => $data['txt_observaciones'] 
        );
        $this->db->insert('carta_descriptiva', $carta_descriptiva);
        $this->db->select_max('id');
        $ids['carta_descriptiva'] = $this->db->get('carta_descriptiva', 1)->row_array();

        $beneficio_social = array(
            'cobertura'  => $data['str_cobertura'],
            'pre_h'      => $data['int_prenatal_h'],
            'nin_h'      => $data['int_ninos_h'],
            'ado_h'      => $data['int_adolcesc_h'],
            'jov_h'      => $data['int_joven_h'],
            'adu_h'      => $data['int_adulto_h'],
            'may_h'      => $data['int_mayor_h'],
            'pre_m'      => $data['int_prenatal_m'],
            'nin_m'      => $data['int_ninos_m'],
            'ado_m'      => $data['int_adolcesc_m'],
            'jov_m'      => $data['int_joven_m'],
            'adu_m'      => $data['int_adulto_m'],
            'may_m'      => $data['int_mayor_m']
        );
        $this->db->insert('beneficio_social', $beneficio_social);
        $this->db->select_max('id');
        $ids['beneficio_social'] = $this->db->get('beneficio_social', 1)->row_array();
         

        $presupesto_desag = array(
            'organo_sup'             => $data['str_organo_sup'],
            'nombre_proyecto'        => $data['str_nombre_proyecto'],
            'unidad_presupuestal'    => $data['str_unidad_presupuestal'],
            'descripcion_proyecto'   => $data['txt_descripcion_proyecto']
        );
        $this->db->insert('presupuesto_desagregado', $presupesto_desag);
        $this->db->select_max('id');
        $ids['presupuesto_desagregado'] = $this->db->get('presupuesto_desagregado', 1)->row_array();

        $obj_gasto = array(
            'partida_especifica'     => $data['str_partida_especifica'],
            'nombre_partida'         => $data['str_nombre_partida'],
            'monto_solicitado'       => $data['int_monto_total_solicitado'],
            'mto_ene'                => $data['int_mto_ene'],
            'mto_feb'                => $data['int_mto_feb'],
            'mto_mar'                => $data['int_mto_mar'],
            'mto_abr'                => $data['int_mto_abr'],
            'mto_may'                => $data['int_mto_may'],
            'mto_jun'                => $data['int_mto_jun'],
            'mto_jul'                => $data['int_mto_jul'],
            'mto_ago'                => $data['int_mto_ago'],
            'mto_sep'                => $data['int_mto_sep'],
            'mto_oct'                => $data['int_mto_oct'],
            'mto_nov'                => $data['int_mto_nov'],
            'mto_dic'                => $data['int_mto_dic']
        );
        $insert_obj_gasto = $this->get_current_data($obj_gasto, $ids['presupuesto_desagregado']['id'], 'id_presupuesto_desagregado');
        $this->insert_multiple_data('objeto_gasto', $insert_obj_gasto);

        $programacion_metas = array(
            'nombre_componente' => $data['str_nombre_componente'],
            'comp_ene'          => $data['txt_comp_ene'],
            'comp_feb'          => $data['txt_comp_feb'],
            'comp_mar'          => $data['txt_comp_mar'],
            'comp_abr'          => $data['txt_comp_abr'],
            'comp_may'          => $data['txt_comp_may'],
            'comp_jun'          => $data['txt_comp_jun'],
            'comp_jul'          => $data['txt_comp_jul'],
            'comp_ago'          => $data['txt_comp_ago'],
            'comp_sep'          => $data['txt_comp_sep'],
            'comp_oct'          => $data['txt_comp_oct'],
            'comp_nov'          => $data['txt_comp_nov'],
            'comp_dic'          => $data['txt_comp_dic'],
            'comp_meta_final'   => $data['txt_comp_meta_final']
        );
        $this->db->insert('programacion_metas', $programacion_metas);
        $this->db->select_max('id');
        $ids['programacion_metas'] = $this->db->get('programacion_metas', 1)->row_array();
         

        $programacion_acti = array(
            'nombre_actividad' => $data['str_nombre_actividad'],
            'acti_ene'         => $data['txt_acti_ene'],
            'acti_feb'         => $data['txt_acti_feb'],
            'acti_mar'         => $data['txt_acti_mar'],
            'acti_abr'         => $data['txt_acti_abr'],
            'acti_may'         => $data['txt_acti_may'],
            'acti_jun'         => $data['txt_acti_jun'],
            'acti_jul'         => $data['txt_acti_jul'],
            'acti_ago'         => $data['txt_acti_ago'],
            'acti_sep'         => $data['txt_acti_sep'],
            'acti_oct'         => $data['txt_acti_oct'],
            'acti_nov'         => $data['txt_acti_nov'],
            'acti_dic'         => $data['txt_acti_dic'],
            'acti_meta_final'  => $data['txt_acti_meta_final']
        );
        $this->db->insert('programacion_actividades', $programacion_acti);
        $this->db->select_max('id');
        $ids['programacion_actividades'] = $this->db->get('programacion_actividades', 1)->row_array();

        $viaticos = array(
            'dependencia'         => $data['str_dependencia'],
            'unidad_presupuestal' => $data['str_unidad_presupuestal_viaticos']
        );
        $this->db->insert('viaticos', $viaticos);
        $this->db->select_max('id');
        $ids['viaticos'] = $this->db->get('viaticos', 1)->row_array();

        $desglose_viaticos = array(
            'proyecto'       => $data['str_viaticos_proyecto'],
            'comision'       => $data['str_viaticos_comision'],
            'objetivo'       => $data['str_viaticos_objetivo'],
            'no_personas'    => $data['int_num_personas'],
            'mes'            => $data['ddl_mes'],
            'duracion_dias'  => $data['int_duracion_dias'],
            'lugar_comision' => $data['ddl_lugar_comision'],
            'alimentacion'   => $data['dbl_monto_alimentacion'],
            'hospedaje'      => $data['dbl_monto_hospedaje'],
            'traslado'       => $data['dbl_monto_traslado']
        );
        $insert_desglose_viaticos = $this->get_current_data($desglose_viaticos, $ids['viaticos']['id'], 'id_viaticos');
        $this->insert_multiple_data('desglose_viaticos', $insert_desglose_viaticos);

        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
        {
            echo 'se ha generado un error bie feo :( "Rechaze categóricamente"';
        }
        else 
        {
            echo 'ay todo estuvo bien chido';
            // echo '<pre>';
            foreach ($this->get_carta() as $key => $value) 
            {
                echo '['.$key.': '.nl2br(html_entity_decode(htmlentities($value))).']<br>';
            }
            // print_r($this->get_carta());
            // echo '</pre>';
        }
    }

    public function get_carta()
    {
        $carta = $this->db->select_max('id')->from('carta_descriptiva')->get()->row_array();
        $query = $this->db->select('*')->from('carta_descriptiva')->where('id', $carta['id'])->get();
        return $query->row();
    }

    

}

/* End of file Registros_model.php */
/* Location: ./application/models/Registros_model.php */