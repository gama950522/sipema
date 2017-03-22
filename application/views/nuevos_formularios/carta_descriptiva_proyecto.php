<div style="margin-top: 20px"></div>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">

                <!-- <div style="padding: 0 10px; width: 20%" class="pull-left">
                    <img src="<?php //echo site_url('public/images/hidalgocrececontigo.png')                         ?>" style="width: 100px">
                </div> -->
                <div style="padding: 0 10px;" class="pull-left">
                    <!-- <div class="page-header"> -->
                    <h2>Secretaría del Medio Ambiente y Recursos Naturales <small>(SEMARNAT)</small></h2>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div> 
    <div class="panel-body">
        <div class="media-heading">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                        <p>Carta Descriptiva</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Beneficio Social</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Presupuesto <br>desagregado</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        <p>Programación de Metas <br> nivel Componente (MIR)</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                        <p>Programación de Metas <br> nivel Actividades (MIR)</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                        <p>VIATICOS</p>
                    </div>
                </div>
            </div>
        </div>

        <?php echo form_open('semarnat/form/', array('autocomplete' => 'off')) ?>
        <div id="error"></div>
        <div class="col-md-12 setup-content" id="step-1">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="str_eje_tematico" class="control-label" >Eje temático (Eje DEP)</label>
                        <input type="text" name="str_eje_tematico" id="str_eje_tematico" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="str_programa_sectorial" class="control-label">Programa sectorial</label>
                        <input type="text" name="str_programa_sectorial" id="str_programa_sectorial" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="str_programa_presupuestario" class="control-label">Programa presupuestario</label>
                        <input type="text" name="str_programa_presupuestario" id="str_programa_presupuestario" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="str_nombre_proyecto_componente" class="control-label">Nombre del proyecto (Componente)</label>
                        <input type="text" name="str_nombre_proyecto_componente" id="str_nombre_proyecto_componente" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="dte_periodo_ejec_inicio" class="control-label">Periodo de ejecución (Inicio)</label>
                        <div id="datepicker">
                            <input type="text" name="dte_periodo_ejec_inicio" id="dte_periodo_ejec_inicio" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="str_subeje" class="control-label">Subeje</label>
                        <input type="text" name="str_subeje" id="str_subeje" class="form-control" required="required" >
                    </div>
                    <div class="form-group">
                        <label for="str_area_responsable" class="control-label">Área responsable</label>
                        <input type="text" name="str_area_responsable" id="str_area_responsable" class="form-control" required="required" >
                    </div>
                    <div class="form-group">
                        <label for="str_titular" class="control-label">Titular</label>
                        <input type="text" name="str_titular" id="str_titular" class="form-control" required="required" >
                    </div>
                    <div class="form-group">
                        <label for="str_responsable" class="control-label">Responsable</label>
                        <input type="text" name="str_responsable" id="str_responsable" class="form-control" required="required" >
                    </div>
                    <div class="form-group">
                        <label for="dte_priodo_ejec_fin" class="control-label">Periodo de ejecución (Termino)</label>
                        <div id="datepicker">
                            <input type="text" name="dte_priodo_ejec_fin" id="dte_priodo_ejec_fin" class="form-control" required="required" >
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="txt_fundamento_legal" class="control-label">Fundamento legal</label>
                        <textarea name="txt_fundamento_legal" id="txt_fundamento_legal" rows="5" class="form-control" required="required"></textarea>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="txt_situacion_actual" class="control-label">Sitación actual</label>
                        <textarea name="txt_situacion_actual" id="txt_situacion_actual" rows="5" class="form-control" required="required"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="txt_justificacion_proyecto" class="control-label">Justificación del proyecto</label>
                        <textarea name="txt_justificacion_proyecto" id="txt_justificacion_proyecto" rows="5" class="form-control" required="required"></textarea>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="txt_objetivo_proyecto" class="control-label">Objetivo del proyecto</label>
                        <textarea name="txt_objetivo_proyecto" id="txt_objetivo_proyecto" rows="5" class="form-control" required="required"></textarea>
                    </div>
                </div>
            </div>

            <div  class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="form-group">
                        <label for="txt_estategias" class="control-label">Estrategias (Alineadas al PED y plan sectorial 2016 - 2022)</label>
                        <textarea name="txt_estategias" id="txt_estategias" rows="4" class="form-control" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="txt_lineas_accion" class="control-label">Lineas de acción (Alineadas al PED y plan sectorial 2016 - 2022)</label>
                        <textarea name="txt_lineas_accion" id="txt_lineas_accion" rows="4" class="form-control" required="required"></textarea>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="form-group">
                        <label for="txt_situacion_esperada" class="control-label">Situación esperada 2017 (En función de la metas programadas en los indicadores estratégicos)</label>
                        <textarea name="txt_situacion_esperada" id="txt_situacion_esperada" rows="4" class="form-control" required="required"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="txt_justificacion_recursos" class="control-label">Justificación de recursos</label>
                        <textarea name="txt_justificacion_recursos" id="txt_justificacion_recursos" rows="5" class="form-control" required="required"></textarea>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="txt_observaciones" class="control-label">Observaciones 2017</label>
                        <textarea name="txt_observaciones" id="txt_observaciones" rows="5" class="form-control" required="required"></textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </div>

        <div class="col-md-12 setup-content" id="step-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="str_cobertura" class="control-label">Cobertura</label>
                        <input type="text" name="str_cobertura" id="str_cobertura" class="form-control"  >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table thead-default table-bordered table-condensed" id="tbl-poblacion">
                            <thead>
                                <tr>
                                    <th rowspan="2">Edades</th>
                                    <th>Prenatal</th>
                                    <th>Niños</th>
                                    <th>Adolescentes</th>
                                    <th>Jóvenes</th>
                                    <th>Adultos</th>
                                    <th>Adultos mayores</th>
                                </tr>
                                <tr>
                                    <th>0 - 3 años</th>
                                    <th>hasta 12 años</th>
                                    <th>hasta 18 años</th>
                                    <th>hasta 29 años</th>
                                    <th>hasta 59 años</th>
                                    <th>60 años o más</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="tr-hombres">
                                    <th>Hombres</th>
                                    <td id="td-pre"><input type="number" name="int_prenatal_h" id="int_prenatal_h" min="0" max="1000000" class="form-control"></td>
                                    <td id="td-nin"><input type="number" name="int_ninos_h" id="int_ninos_h" min="0" max="1000000" class="form-control"></td>
                                    <td id="td-adol"><input type="number" name="int_adolcesc_h" id="int_adolcesc_h" min="0" max="1000000" class="form-control"></td>
                                    <td id="td-jov"><input type="number" name="int_joven_h" id="int_joven_h" min="0" max="1000000" class="form-control"></td>
                                    <td id="td-adul"><input type="number" name="int_adulto_h" id="int_adulto_h" min="0" max="1000000" class="form-control"></td>
                                    <td id="td-may"><input type="number" name="int_mayor_h" id="int_mayor_h" min="0" max="1000000" class="form-control"></td>
                                </tr>
                                <tr id="tr-mujeres">
                                    <th>Mujeres</th>
                                    <td id="td-pre"><input type="number" name="int_prenatal_m" id="int_prenatal_m" min="0" max="1000000" class="form-control"></td>
                                    <td id="td-nin"><input type="number" name="int_ninos_m" id="int_ninos_m" min="0" max="1000000" class="form-control"></td>
                                    <td id="td-adol"><input type="number" name="int_adolcesc_m" id="int_adolcesc_m" min="0" max="1000000" class="form-control"></td>
                                    <td id="td-jov"><input type="number" name="int_joven_m" id="int_joven_m" min="0" max="1000000" class="form-control"></td>
                                    <td id="td-adul"><input type="number" name="int_adulto_m" id="int_adulto_m" min="0" max="1000000" class="form-control"></td>
                                    <td id="td-may"><input type="number" name="int_mayor_m" id="int_mayor_m" min="0" max="1000000" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <p>
                            <button type="button" id="btn-gen-total"  class="btn btn-default">Generar totales</button>
                        </p>
                        <div class="col-md-4">
                            <table class="table thead-default table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th>Hombres</th>
                                        <th>Mujeres</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="total-hombres">&nbsp;</td>
                                        <td id="total-mujeres">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-8">
                            <table class="table thead-default table-bordered table-condensed" id="tbl-total-edad">
                                <thead>
                                    <tr>
                                        <th>Prenatal</th>
                                        <th>Niños</th>
                                        <th>Adolescentes</th>
                                        <th>Jóvenes</th>
                                        <th>Adultos</th>
                                        <th>Adultos mayores</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="td-pre">&nbsp;</td>
                                        <td id="td-nin">&nbsp;</td>
                                        <td id="td-adol">&nbsp;</td>
                                        <td id="td-jov">&nbsp;</td>
                                        <td id="td-adul">&nbsp;</td>
                                        <td id="td-may">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </div>
        <div class="col-md-12 setup-content" id="step-3">
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label for="str_organo_sup" class="control-label">Órgano superior</label>
                        <input type="text" name="str_organo_sup" id="str_organo_sup" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="str_nombre_proyecto" class="control-label">Nombre del proyecto</label> <i>aqui que pedo!</i>
                        <input type="text" name="str_nombre_proyecto" id="str_nombre_proyecto" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label for="str_unidad_presupuestal" class="control-label">Unidad presupuestal</label>
                        <input type="text" name="str_unidad_presupuestal" id="str_unidad_presupuestal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="txt_descripcion_proyecto" class="control-label">Descripción del proyecto</label>
                        <textarea name="txt_descripcion_proyecto" id="txt_descripcion_proyecto" rows="4" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive table-lg">
                        <table class="table thead-default table-bordered table-condensed" style="margin-bottom: 0; width: 2000px; border: 0" id="tbl-presupuesto">
                            <thead>
                                <tr>
                                    <th colspan="2">
                                        Objeto de gasto (COG)
                                    </th>
                                    <th rowspan="2" style="width: 100px">Monto total solicitado</th>
                                    <th colspan="12">Meses</th>
                                </tr>
                                <tr>
                                    <th style="width: 300px">Partida específica</th>
                                    <th style="width: 300px">Nombre de la partida</th>

                                    <th>Enero</th>
                                    <th>Febrero</th>
                                    <th>Marzo</th>
                                    <th>Abril</th>
                                    <th>Mayo</th>
                                    <th>Junio</th>
                                    <th>Julio</th>
                                    <th>Agosto</th>
                                    <th>Septiembre</th>
                                    <th>Octubre</th>
                                    <th>Noviembre</th>
                                    <th>Diciembre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="str_partida_especifica[]" class="form-control"></td>
                                    <td><input type="text" name="str_nombre_partida[]" class="form-control"></td>
                                    <td><input type="number" name="int_monto_total_solicitado[]" class="form-control"></td>

                                    <td><input type="number" name="int_mto_ene[]" min="0" max="1000000" class="form-control"></td>
                                    <td><input type="number" name="int_mto_feb[]" min="0" max="1000000" class="form-control"></td>
                                    <td><input type="number" name="int_mto_mar[]" min="0" max="1000000" class="form-control"></td>
                                    <td><input type="number" name="int_mto_abr[]" min="0" max="1000000" class="form-control"></td>
                                    <td><input type="number" name="int_mto_may[]" min="0" max="1000000" class="form-control"></td>
                                    <td><input type="number" name="int_mto_jun[]" min="0" max="1000000" class="form-control"></td>
                                    <td><input type="number" name="int_mto_jul[]" min="0" max="1000000" class="form-control"></td>
                                    <td><input type="number" name="int_mto_ago[]" min="0" max="1000000" class="form-control"></td>
                                    <td><input type="number" name="int_mto_sep[]" min="0" max="1000000" class="form-control"></td>
                                    <td><input type="number" name="int_mto_oct[]" min="0" max="1000000" class="form-control"></td>
                                    <td><input type="number" name="int_mto_nov[]" min="0" max="1000000" class="form-control"></td>
                                    <td><input type="number" name="int_mto_dic[]" min="0" max="1000000" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-6 col-xs-6 newbutton" style="padding-right: 0">
                                <button type="button" onclick="newrow(this)" class="btn btn-primary btn-block">Nueva fila</button>

                            </div>
                            <div class="col-md-6 col-xs-6 removebutton" style="padding-left: 0">
                                <button type="button" onclick="deleterow(this)" disabled="disabled" class="btn btn-danger btn-block">Eliminar ultima fila</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </div>
        <div class="col-md-12 setup-content" id="step-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="str_nombre_componente" class="control-label">Nombre del componente</label>
                        <input type="text" name="str_nombre_componente" id="str_nombre_componente" class="form-control">
                    </div>
                    <div class="table-responsive">
                        <table class="table thead-default table-bordered table-condensed">
                            <tbody>
                                <tr>
                                    <th rowspan="10"><span class="rotate">Programación / avance</span></th>
                                    <th>Enero</th>
                                    <th>Febrero</th>
                                    <th>Marzo</th>
                                </tr>
                                <tr>
                                    <td><textarea name="txt_comp_ene" id="txt_comp_ene" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_comp_feb" id="txt_comp_feb" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_comp_mar" id="txt_comp_mar" rows="5" class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <th>Abril</th>
                                    <th>Mayo</th>
                                    <th>Junio</th>
                                </tr>
                                <tr>
                                    <td><textarea name="txt_comp_abr" id="txt_comp_abr" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_comp_may" id="txt_comp_may" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_comp_jun" id="txt_comp_jun" rows="5" class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <th>Julio</th>
                                    <th>Agosto</th>
                                    <th>Septiembre</th>
                                </tr>
                                <tr>
                                    <td><textarea name="txt_comp_jul" id="txt_comp_jul" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_comp_ago" id="txt_comp_ago" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_comp_sep" id="txt_comp_sep" rows="5" class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <th>Octubre</th>
                                    <th>Noviembre</th>
                                    <th>Diciembre</th>
                                </tr>
                                <tr>
                                    <td><textarea name="txt_comp_oct" id="txt_comp_oct" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_comp_nov" id="txt_comp_nov" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_comp_dic" id="txt_comp_dic" rows="5" class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <th colspan="3">Meta final</th>
                                </tr>
                                <tr>
                                    <td colspan="3"><textarea name="txt_comp_meta_final" id="txt_comp_meta_final" rows="5" class="form-control"></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </div>

        <div class="col-md-12 setup-content" id="step-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="str_nombre_actividad" class="control-label">Nombre de la actividad</label>
                        <input type="text" name="str_nombre_actividad" id="str_nombre_actividad" class="form-control">
                    </div>
                    <div class="table-responsive">
                        <table class="table thead-default table-bordered table-condensed">
                            <tbody>
                                <tr>
                                    <th rowspan="10"><span class="rotate">Programación / avance</span></th>
                                    <th>Enero</th>
                                    <th>Febrero</th>
                                    <th>Marzo</th>
                                </tr>
                                <tr>
                                    <td><textarea name="txt_acti_ene" id="txt_acti_ene" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_acti_feb" id="txt_acti_feb" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_acti_mar" id="txt_acti_mar" rows="5" class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <th>Abril</th>
                                    <th>Mayo</th>
                                    <th>Junio</th>
                                </tr>
                                <tr>
                                    <td><textarea name="txt_acti_abr" id="txt_acti_abr" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_acti_may" id="txt_acti_may" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_acti_jun" id="txt_acti_jun" rows="5" class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <th>Julio</th>
                                    <th>Agosto</th>
                                    <th>Septiembre</th>
                                </tr>
                                <tr>
                                    <td><textarea name="txt_acti_jul" id="txt_acti_jul" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_acti_ago" id="txt_acti_ago" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_acti_sep" id="txt_acti_sep" rows="5" class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <th>Octubre</th>
                                    <th>Noviembre</th>
                                    <th>Diciembre</th>
                                </tr>
                                <tr>
                                    <td><textarea name="txt_acti_oct" id="txt_acti_oct" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_acti_nov" id="txt_acti_nov" rows="5" class="form-control"></textarea></td>
                                    <td><textarea name="txt_acti_dic" id="txt_acti_dic" rows="5" class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <th colspan="3">Meta final</th>
                                </tr>
                                <tr>
                                    <td colspan="3"><textarea name="txt_acti_meta_final" id="txt_acti_meta_final" rows="5" class="form-control"></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>

        </div>

        <div class="col-md-12 setup-content" id="step-6">
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label for="str_dependencia" class="control-label">Dependencia</label>
                        <input type="text" name="str_dependencia" id="str_dependencia" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label for="str_unidad_presupuestal_viaticos" class="control-label">Unidad presupuestal</label>
                        <input type="text" name="str_unidad_presupuestal_viaticos" id="str_unidad_presupuestal_viaticos" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive table-lg">
                        <table class="table thead-default table-bordered table-condensed" style="margin-bottom: 0; width: 2000px;" id="tbl-viaticos">

                            <thead>
                                <tr>
                                    <th rowspan="2" style="width: 250px">Proyecto</th>
                                    <th rowspan="2" style="width: 250px">Comisión</th>
                                    <th rowspan="2" style="width: 250px">Objetivo</th>
                                    <th rowspan="2" style="width: 50px">No. personas</th>
                                    <th rowspan="2" style="width: 150px">Mes</th>
                                    <th rowspan="2" style="width: 50px">Duracion (Días)</th>
                                    <th rowspan="2" style="width: 100px">Lugar de comisión</th>
                                    <th colspan="3" style="width: 150px">Monto por concepto</th>
                                    <!-- <th rowspan="2">Monto Total</th> -->

                                </tr>
                                <tr>
                                    <!-- <th style="width: 33px">Local</th>
                                    <th style="width: 33px">Nacional</th>
                                    <th style="width: 33px">Extranjero</th> -->
                                    <th style="width: 50px">Alimentación</th>
                                    <th style="width: 50px">Hospedaje</th>
                                    <th style="width: 50px">Traslado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text"   name="str_viaticos_proyecto[]" id="str_viaticos_proyecto" class="form-control"></td>
                                    <td><input type="text"   name="str_viaticos_comision[]" id="str_viaticos_comision" class="form-control"></td>
                                    <td><input type="text"   name="str_viaticos_objetivo[]" id="str_viaticos_objetivo" class="form-control"></td>
                                    <td><input type="number" name="int_num_personas[]" id="int_num_personas" class="form-control" min="1" max="20"></td>
                                    <td>
                                        <select name="ddl_mes[]" id="ddl_mes" class="form-control" required="required">
                                            <option value="">Selecciona</option>
                                            <option value="enero">Enero</option>
                                            <option value="febrero">Febrero</option>
                                            <option value="marzo">Marzo</option>
                                            <option value="abril">Abril</option>
                                            <option value="mayo">Mayo</option>
                                            <option value="junio">Junio</option>
                                            <option value="julio">Julio</option>
                                            <option value="agosto">Agosto</option>
                                            <option value="septiembre">Septiembre</option>
                                            <option value="octubre">Octubre</option>
                                            <option value="noviembre">Noviembre</option>
                                            <option value="diciembre">Diciembre</option>
                                        </select>
                                    </td>
                                    <td><input type="number" name="int_duracion_dias[]" id="int_duracion_dias" class="form-control"></td>
                                    <td>
                                        <select name="ddl_lugar_comision[]" id="ddl_lugar_comision" class="form-control">
                                            <option value="">Selecciona</option>
                                            <option value="local">Local</option>
                                            <option value="nacional">Nacional</option>
                                            <option value="extanjro">Extanjro</option>
                                        </select>
                                    </td>
                                    <td><span>$</span><input type="number" name="dbl_monto_alimentacion[]" id="dbl_monto_alimentacion" class="form-control" min="0" max="1000000"></td>
                                    <td><span>$</span><input type="number" name="dbl_monto_hospedaje[]" id="dbl_monto_hospedaje" class="form-control" min="0" max="1000000"></td>
                                    <td><span>$</span><input type="number" name="dbl_monto_traslado[]" id="dbl_monto_traslado" class="form-control" min="0" max="1000000"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-6 col-xs-6 newbutton" style="padding-right: 0">
                                <button type="button" onclick="newrow(this)" class="btn btn-primary btn-block">Nueva fila</button>

                            </div>
                            <div class="col-md-6 col-xs-6 removebutton" style="padding-left: 0">
                                <button type="button" onclick="deleterow(this)" disabled="disabled" class="btn btn-danger btn-block">Eliminar ultima fila</button>

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar información</button> 
                </div>
            </div>
        </div>

        <?php echo form_close() ?>
    </div>
</div>
<script type="text/javascript">

    $(document).ready(function ()
    {
        var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e)
        {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);
            if (!$item.hasClass('disabled'))
            {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });
        allNextBtn.click(function ()
        {
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find(""),//input[type='text'], textarea, select
                    isValid = true;
            $(".form-group").removeClass('has-error').removeClass('has-feedback');
            $('.form-group').find('span').remove();
            for (var i = 0; i < curInputs.length; i++)
            {
                if (!curInputs[i].validity.valid)
                {
                    isValid = false;
                    $(curInputs[i]).closest('.form-group')
                            .addClass('has-error')
                            .addClass('has-feedback');
                    $(curInputs[i]).after('<span class="fa fa-info-circle form-control-feedback" aria-hidden="true"></span>');
                    //$(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }
            if (isValid)
            {
                nextStepWizard.removeAttr('disabled').trigger('click');
                $('#error').html('');
            }
            else
            {
                $('#error').html('<div class="col-md-12">' +
                        '<div class="alert alert-danger alert-dismissible fade in" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">' +
                        '<font><font>×</font></font>' +
                        '</span></button>' +
                        '<h4><font><font class=""><i class="fa fa-info-circle" aria-hidden="true"></i> Error! </font></font></h4> ' +
                        '<p><font><font class="">Llene todos los campos para poder continuar. </font></div></div>');
            }
            //alert('Llena todos los campos');
        });
        $('div.setup-panel div a.btn-primary').trigger('click');
    });



    //http://todowindowsfull.blogspot.mx/2016/02/photoshop-cs6-v130-full-32-y-64-bits-en.html
</script>

<script type="text/javascript">
    $(document).on('ready', function ()
    {
        $('#btn-gen-total').on('click', function ()
        {
            var total = 0;
            var inputs_h = $('#tbl-poblacion tbody #tr-hombres td input');
            for (var i = 0; i < inputs_h.length; i++)
            {
                total += parseInt((inputs_h[i].value === '') ? '0' : inputs_h[i].value);
            }
            $('#total-hombres').text(total);
            total = 0;
            var inputs_m = $('#tbl-poblacion tbody #tr-mujeres td input');
            for (var i = 0; i < inputs_m.length; i++)
            {
                total += parseInt((inputs_m[i].value === '') ? '0' : inputs_m[i].value);
            }
            $('#total-mujeres').text(total);
            var poblacion = $('#tbl-poblacion tbody tr td');
            var tds = {'td-pre': 0, 'td-nin': 0, 'td-adol': 0, 'td-jov': 0, 'td-adul': 0, 'td-may': 0};

            for (var i = 0; i < poblacion.length; i++)
            {
                if (poblacion[i].id === 'td-pre')
                {
                    tds['td-pre'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
                if (poblacion[i].id === 'td-nin')
                {
                    tds['td-nin'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
                if (poblacion[i].id === 'td-adol')
                {
                    tds['td-adol'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
                if (poblacion[i].id === 'td-jov')
                {
                    tds['td-jov'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
                if (poblacion[i].id === 'td-adul')
                {
                    tds['td-adul'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
                if (poblacion[i].id === 'td-may')
                {
                    tds['td-may'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
            }

            for (var j in tds)
            {
                if (tds.hasOwnProperty(j))
                {
                    $('#tbl-total-edad tbody tr #' + j).text(tds[j]);
                }
            }
        });
    });
</script>

<script type="text/javascript">
    function newrow(e)
    {
        var id_table = $(e).parent().parent().parent().children('table').attr('id');
        $("#" + id_table + " tbody tr:eq(0)").clone(true).appendTo("#" + id_table + "");
        var inputs = $("#" + id_table + " tbody tr:last td input");
        for (var i = 0; i < inputs.length; i++)
        {
            inputs[i].value = '';
        }
        $(e).parent().parent().children('.removebutton').children('button').removeAttr('disabled');
    }
    function deleterow(e)
    {
        var id_table = $(e).parent().parent().parent().children('table').attr('id');
        if ($("#" + id_table + " tbody tr").length > 1)
        {
            $("#" + id_table + " tbody tr:last").remove();
            if ($("#" + id_table + " tbody tr").length === 1)
            {
                $(e).parent().parent().children('.removebutton').children('button').attr('disabled', 'disabled');
            }
        }
    }
    function format(input)
    {
        var num = input.value.replace(/\./g, '');
        if (!isNaN(num))
        {
            num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
            num = num.split('').reverse().join('').replace(/^[\.]/, '');
            input.value = "$ " + num;
        }
        else
        {
            //alert('Solo se permiten numeros');
            input.value = input.value.replace(/[^\d\.]*/g, '');
        }
    }

    $(document).on('ready', function ()
    {
        $('.form-group .form-control').on('focus', function ()
        {
            $(this).closest('.form-group').removeClass('has-error').removeClass('has-feedback');
            $(this).closest('.form-group').find('span').remove();
        });

    });
</script>
<script type="text/javascript">

</script>
