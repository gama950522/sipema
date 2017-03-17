<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends CI_Model
{

    public function guardar_poas($data)
    {
    	$data['_id_user'] = $this->session->userdata('id');
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


        // $this->db->trans_start();
        $carta_descriptiva = array(
            'eje_tematico'              => $data['str_eje_tematico'],
            'programa_sectorial'        => $data['str_programa_sectorial'],
            'programa_presupuestario'   => $data['str_programa_presupuestario'],
            'nombre_proyecto'           => $data['str_nombre_proyecto_componente'],
            'periodo_ejec_inicio'       => $data['dte_periodo_ejec_inicio'],
            'subeje'                    => $data['str_subeje'],
            'area_responsable'          => $data['str_area_responsable'],
            'titular'                   => $data['str_titular'],
            'responsable'               => $data['str_responsable'],
            'priodo_ejec_fin'           => $data['dte_priodo_ejec_fin'],
            'fundamento_legal'          => $data['txt_fundamento_legal'],
            'situacion_actual'          => $data['txt_situacion_actual'],
            'justificacion_proyecto'    => $data['txt_justificacion_proyecto'],
            'objetivo_proyecto'         => $data['txt_objetivo_proyecto'],
            'estategias'                => $data['txt_estategias'],
            'lineas_accion'             => $data['txt_lineas_accion'],
            'situacion_esperada'        => $data['txt_situacion_esperada'],
            'justificacion_recursos'    => $data['txt_justificacion_recursos'],
            'observaciones'             => $data['txt_observaciones'] 
        );
        // echo "/////////////////////////////////////////////////////////////////////////////////";
        // echo '<pre>';
        // print_r($carta_descriptiva);
        // echo '</pre>';
        // echo "/////////////////////////////////////////////////////////////////////////////////";

        /*$this->db->insert('carta_descriptiva', $carta_descriptiva);
        $this->db->select_max('id');
        $ids['id_carta_descriptiva'] = $this->db->get('carta_descriptiva', 1);*/

        $beneficio_social = array(
            'cobertura'     => $data['str_cobertura'],
            'prenatal_h'    => $data['int_prenatal_h'],
            'ninos_h'       => $data['int_ninos_h'],
            'adolcesc_h'    => $data['int_adolcesc_h'],
            'joven_h'       => $data['int_joven_h'],
            'adulto_h'      => $data['int_adulto_h'],
            'mayor_h'       => $data['int_mayor_h'],
            'prenatal_m'    => $data['int_prenatal_m'],
            'ninos_m'       => $data['int_ninos_m'],
            'adolcesc_m'    => $data['int_adolcesc_m'],
            'joven_m'       => $data['int_joven_m'],
            'adulto_m'      => $data['int_adulto_m'],
            'mayor_m'       => $data['int_mayor_m']
        );
        // echo '<pre>';
        // print_r($beneficio_social);
        // echo '</pre>';
        // echo "/////////////////////////////////////////////////////////////////////////////////";

        /*$this->db->insert('beneficio_social', $beneficio_social);
        $this->db->select_max('id');
        $ids['id_beneficio_social'] = $this->db->get('beneficio_social', 1);*/

        $presupesto_desag = array(
            'organo_sup'                  => $data['str_organo_sup'],
            'nombre_proyecto'             => $data['str_nombre_proyecto'],
            'unidad_presupestal'          => $data['str_unidad_presupestal'],
            'descripcion_proyecto'        => $data['txt_descripcion_proyecto'],
            'partida_especifica'          => $data['str_partida_especifica'],
            'nombre_partida'              => $data['str_nombre_partida'],
            'monto_total_solicitado'      => $data['int_monto_total_solicitado'],
            'mto_ene'   => $data['int_mto_ene'],
            'mto_feb'   => $data['int_mto_feb'],
            'mto_mar'   => $data['int_mto_mar'],
            'mto_abr'   => $data['int_mto_abr'],
            'mto_may'   => $data['int_mto_may'],
            'mto_jun'   => $data['int_mto_jun'],
            'mto_jul'   => $data['int_mto_jul'],
            'mto_ago'   => $data['int_mto_ago'],
            'mto_sep'   => $data['int_mto_sep'],
            'mto_oct'   => $data['int_mto_oct'],
            'mto_nov'   => $data['int_mto_nov'],
            'mto_dic'   => $data['int_mto_dic']
        );
        $array = array();
        $insert = array();
        foreach ($presupesto_desag as $key => $value) 
        {
            if (is_array($value)) 
            {
                for ($i = 0; $i < count($value); $i++) 
                {
                    $array[$key] = $value;
                }
               
                /*
                    

                    $item = [];
                    for ($i = 0; $i < count($items); $i++) 
                    {
                        $item[$i] = current($items);
                    }
                    echo '<pre>';
                    echo '<h1>$item</h1>';
                    print_r($item);
                    echo '</pre>';
                    echo '<hr>';

                    $datos = [];
                    for ($i = 0; $i < count($item); $i++) {
                        $datos[$i] = $item[$i];
                        // $id=(( $item1 !== false) ? $item1 : ", &nbsp;");
                        // $nom=(( $item2 !== false) ? $item2 : ", &nbsp;");
                        // $carr=(( $item3 !== false) ? $item3 : ", &nbsp;");
                        // $gru=(( $item4 !== false) ? $item4 : ", &nbsp;");
                    }
                    for ($i = 0; $i < count($items); $i++) 
                    {
                        $item[$i] = next($items);
                    }
                    for ($i = 0; $i < count($items); $i++) 
                    {
                        $item[] = next($items[$i]);
                    }

                    echo 'entro';
                    echo '<pre>';
                    print_r($datos);
                    echo '</pre>';
                    echo "/////////////////////////////////////////////////////////////////////////////////";
                */
            }
            /*
                else
                {
                    echo $key .' => '. $value .'<br>';
                }
                echo '<hr>';
            */
        }
        echo '<pre>';
        echo '<h1>$array</h1>';
        print_r($array);
        echo '</pre>';
        echo '<hr>';

        $item = array();
        for ($i = 0; $i < count($array); $i++) 
        {
            $item[] = current($array[$i]);
        }
        echo '<pre>';
        echo '<h1>$item</h1>';
        print_r($item);
        echo '</pre>';
        echo '<hr>';
        //echo 'count($array) = '. count($array);
        echo '<hr>';
        //echo '<pre>';
        //print_r($items);
        // print_r($presupesto_desag);
        //echo '</pre>';
        echo "/////////////////////////////////////////////////////////////////////////////////";


        $programacion_metas = array(
            'nombre_componente'  => $data['str_nombre_componente'],
            'comp_ene'           => $data['txt_comp_ene'],
            'comp_feb'           => $data['txt_comp_feb'],
            'comp_mar'           => $data['txt_comp_mar'],
            'comp_abr'           => $data['txt_comp_abr'],
            'comp_may'           => $data['txt_comp_may'],
            'comp_jun'           => $data['txt_comp_jun'],
            'comp_jul'           => $data['txt_comp_jul'],
            'comp_ago'           => $data['txt_comp_ago'],
            'comp_sep'           => $data['txt_comp_sep'],
            'comp_oct'           => $data['txt_comp_oct'],
            'comp_nov'           => $data['txt_comp_nov'],
            'comp_dic'           => $data['txt_comp_dic'],
            'comp_meta_final'    => $data['txt_comp_meta_final']
        );
        // echo '<pre>';
        // print_r($programacion_metas);
        // echo '</pre>';
        // echo "/////////////////////////////////////////////////////////////////////////////////";

        /*$this->db->insert('programacion_metas', $programacion_metas);
        $this->db->select_max('id');
        $ids['id_programacion_metas'] = $this->db->get('programacion_metas', 1);*/

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
            'acti_meta_final'  =>  $data['txt_acti_meta_final']
        );
        // echo '<pre>';
        // print_r($programacion_acti);
        // echo '</pre>';
        // echo "/////////////////////////////////////////////////////////////////////////////////";

        /*$this->db->insert('programacion_actividades', $programacion_acti);
        $this->db->select_max('id');
        $ids['id_programacion_actividades'] = $this->db->get('programacion_actividades', 1);*/

        $viaticos = array(
            'dependencia'                   => $data['str_dependencia'],
            'unidad_presupestal_viaticos'   => $data['str_unidad_presupestal_viaticos'],
            'viaticos_proyecto'             => $data['str_viaticos_proyecto'],
            'viaticos_comision'             => $data['str_viaticos_comision'],
            'viaticos_objetivo'             => $data['str_viaticos_objetivo'],
            'num_personas'                  => $data['int_num_personas'],
            'mes'                           => $data['ddl_mes'],
            'duracion_dias'                 => $data['int_duracion_dias'],
            'lugar_comision'                => $data['ddl_lugar_comision'],
            'monto_alimentacion'            => $data['dbl_monto_alimentacion'],
            'monto_hospedaje'               => $data['dbl_monto_hospedaje'],
            'monto_traslado'                => $data['dbl_monto_traslado']
        );
        // foreach ($viaticos as $key) 
        // {
        //     if (is_array($key)) 
        //     {
        //         echo '<pre>';
        //         print_r($key);
        //         echo '</pre>';
        //         echo "/////////////////////////////////////////////////////////////////////////////////";
        //         foreach ($key as $item) 
        //         {
        //             # code...
        //         }
        //     }
        // }
        // echo '<pre>';
        // print_r($viaticos);
        // echo '</pre>';
        // echo "/////////////////////////////////////////////////////////////////////////////////";

        

        // $this->db->trans_complete();

        // if ($this->db->trans_status() === FALSE)
        // {
        //     // generate an error... or use the log_message() function to log your error
        // }



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
    /*
    Array
(
    [str_eje_tematico] => aaa
    [str_programa_sectorial] => aaa
    [str_programa_presupuestario] => aaa
    [str_nombre_proyecto_componente] => aaa
    [dte_periodo_ejec_inicio] => 2017-03-01
    [str_subeje] => aaa
    [str_area_responsable] => aaa
    [str_titular] => aaa
    [str_responsable] => aaa
    [dte_priodo_ejec_fin] => 2017-03-31
    [txt_fundamento_legal] => aaaa
    [txt_situacion_actual] => aaa
    [txt_justificacion_proyecto] => aaa
    [txt_objetivo_proyecto] => aaa
    [txt_estategias] => aaa
    [txt_lineas_accion] => aaa
    [txt_situacion_esperada] => aaa
    [txt_justificacion_recursos] => aaa
    [txt_observaciones] => aaa
    [str_cobertura] => aaa
    [int_prenatal_h] => 3
    [int_ninos_h] => 3
    [int_adolcesc_h] => 3
    [int_joven_h] => 3
    [int_adulto_h] => 3
    [int_mayor_h] => 3
    [int_prenatal_m] => 3
    [int_ninos_m] => 3
    [int_adolcesc_m] => 3
    [int_joven_m] => 3
    [int_adulto_m] => 3
    [int_mayor_m] => 3
    [str_organo_sup] => aaa
    [str_nombre_proyecto] => aaa
    [str_unidad_presupestal] => aaa
    [txt_descripcion_proyecto] => aaa
    [str_partida_especifica] => Array
        (
            [0] => aaa
            [1] => aaa
            [2] => aaa
        )

    [str_nombre_partida] => Array
        (
            [0] => aaa
            [1] => aaa
            [2] => aaa
        )

    [int_monto_total_solicitado] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [int_mto_ene] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [int_mto_feb] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [int_mto_mar] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [int_mto_abr] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [int_mto_may] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [int_mto_jun] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [int_mto_jul] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [int_mto_ago] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [int_mto_sep] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [int_mto_oct] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [int_mto_nov] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [int_mto_dic] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [str_nombre_componente] => aaa
    [txt_comp_ene] => aaa
    [txt_comp_feb] => aaa
    [txt_comp_mar] => aaa
    [txt_comp_abr] => aaa
    [txt_comp_may] => aaa
    [txt_comp_jun] => aaa
    [txt_comp_jul] => aaa
    [txt_comp_ago] => aaa
    [txt_comp_sep] => aaa
    [txt_comp_oct] => aaa
    [txt_comp_nov] => aaa
    [txt_comp_dic] => aaa
    [txt_comp_meta_final] => aaa
    [str_nombre_actividad] => aaa
    [txt_acti_ene] => aaa
    [txt_acti_feb] => aaa
    [txt_acti_mar] => aaa
    [txt_acti_abr] => aaa
    [txt_acti_may] => aaa
    [txt_acti_jun] => aaa
    [txt_acti_jul] => aaa
    [txt_acti_ago] => aaa
    [txt_acti_sep] => 
    [txt_acti_oct] => aaa
    [txt_acti_nov] => aaa
    [txt_acti_dic] => aaa
    [txt_acti_meta_final] => aaa
    [str_dependencia] => aaa
    [str_unidad_presupestal_viaticos] => aaa
    [str_viaticos_proyecto] => Array
        (
            [0] => aaa
            [1] => aaa
            [2] => aaa
        )

    [str_viaticos_comision] => Array
        (
            [0] => aaa
            [1] => aaa
            [2] => aaa
        )

    [str_viaticos_objetivo] => Array
        (
            [0] => aaa
            [1] => aaa
            [2] => aaa
        )

    [int_num_personas] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [ddl_mes] => Array
        (
            [0] => enero
            [1] => febrero
            [2] => marzo
        )

    [int_duracion_dias] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [ddl_lugar_comision] => Array
        (
            [0] => local
            [1] => nacional
            [2] => extanjro
        )

    [dbl_monto_alimentacion] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [dbl_monto_hospedaje] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

    [dbl_monto_traslado] => Array
        (
            [0] => 3
            [1] => 3
            [2] => 3
        )

)
    */
//call sp_resgistro_poas(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"
   

}

/* End of file Registros_model.php */
/* Location: ./application/models/Registros_model.php */