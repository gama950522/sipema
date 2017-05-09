<?php
date_default_timezone_set('UTC');
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'spanish');
//setlocale(LC_TIME, 'es_MX.UTF-8');
// echo '<pre>';
// print_r(getdate()); 
// echo '</pre>';
//echo date('l, d/F/Y H:i:s a e') . '<br>';
echo 'Fecha: ' . utf8_encode(ucwords(strftime('%A, %d')) .' de '. ucwords(strftime('%B')) .' de '. ucwords(strftime('%Y'))) . '<br>'; 
//echo 'Hora: ' . strftime('%H:%M:%S') . '<br>';
//ucwords($str)
//echo date(DATE_RSS) . '<br>';
//IntlDateFormatter::date_default_timezone_set();
//echo DateTimeZone::PACIFIC;
?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="text-uppercase text-center">Secretaría del Medio Ambiente y Recursos Naturales
                <small>(SEMARNATH)</small>
            </h3>
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home"></i></li>
            <?php //if ($programa) : ?>
            <li class="breadcrumb-item"><?php echo $programa['nombre'] ?></li>
            <?php //endif ?>
            <li class="breadcrumb-item active"><?php echo $subprograma['nombre'] ?></li>
        </ol>
        <div class="panel-body ">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                        <p>Carta Descriptiva</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Beneficios</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Presupuesto <br>desagregado</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        <!-- <p>Programación de Metas <br> nivel Componente, <br>fin y propósito (MIR)</p> -->
                        <p>Programación <br>de metas</p>
                    </div>
                    <!-- <div class="stepwizard-step">
                        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                        <p>Programación de Metas <br> nivel Actividades (MIR)</p>
                    </div> -->
                    <div class="stepwizard-step">
                        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                        <p>VIATICOS</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                        <p>Cotrol de <br>indicadores</p>
                    </div>
                </div>
            </div>

            <?php echo form_open('sipema/oki/', 'id="form-reg"') ?>
            <div class="col-md-12">
                <div class="row" id="error" ></div>
            </div>

                    <!-- <input type="hidden" name="hdn_id_subprograma" value="<?php //echo $idsubprograma    ?>" /> -->
            <div class="col-md-12 setup-content" id="step-1">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="str_eje_tematico" class="control-label" >Eje temático (Eje DEP)</label>
                            <input type="text" name="str_eje_tematico" id="str_eje_tematico" class="form-control" required="required" autofocus>
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
                        <div class="form-group" id="datepicker">
                            <label for="dte_periodo_ejec_inicio" class="control-label">Periodo de ejecución (Inicio)</label>
                            <!-- <div > -->
                            <input type="text" name="dte_periodo_ejec_inicio" id="dte_periodo_ejec_inicio" class="form-control" required="required">
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="str_subeje" class="control-label">Subeje</label>
                            <input type="text" name="str_subeje" id="str_subeje" class="form-control" required="required" >
                        </div>
                        <div class="form-group">
                            <label for="str_area_responsable" class="control-label">Área responsable</label>
                            <input type="text" id="str_area_responsable" class="form-control" value="Dirección Generál de Administración y Finanzas" readonly="true" >

                        </div>
                        <div class="form-group">
                            <label for="str_titular" class="control-label">Titular</label>
                            <input type="text" id="str_titular" class="form-control" value="M. En A. Raquel Ramírez Vargas" readonly="true">
                        </div>
                        <div class="form-group">
                            <label for="str_responsable" class="control-label">Responsable</label>
                            <input type="text" id="str_responsable" class="form-control" value="M. R. H. Daniela López Hernández" readonly="true" >
                        </div>
                        <div class="form-group" id="datepicker">
                            <label for="dte_priodo_ejec_fin" class="control-label">Periodo de ejecución (Termino)</label>
                            <!-- <div > -->
                            <input type="text" name="dte_priodo_ejec_fin" id="dte_priodo_ejec_fin" class="form-control" required="required" >
                            <!-- </div> -->
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
                            <textarea name="txt_observaciones" id="txt_observaciones" rows="5" class="form-control"></textarea>
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
                            <input type="text" name="str_cobertura" id="str_cobertura" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table thead-default table-bordered table-condensed" id="tbl-poblacion" style="/*font-size: 11px;">
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
                                        <td id="td-ado"><input type="number" name="int_adolcesc_h" id="int_adolcesc_h" min="0" max="1000000" class="form-control"></td>
                                        <td id="td-jov"><input type="number" name="int_joven_h" id="int_joven_h" min="0" max="1000000" class="form-control"></td>
                                        <td id="td-adu"><input type="number" name="int_adulto_h" id="int_adulto_h" min="0" max="1000000" class="form-control"></td>
                                        <td id="td-may"><input type="number" name="int_mayor_h" id="int_mayor_h" min="0" max="1000000" class="form-control"></td>
                                    </tr>
                                    <tr id="tr-mujeres">
                                        <th>Mujeres</th>
                                        <td id="td-pre"><input type="number" name="int_prenatal_m" id="int_prenatal_m" min="0" max="1000000" class="form-control"></td>
                                        <td id="td-nin"><input type="number" name="int_ninos_m" id="int_ninos_m" min="0" max="1000000" class="form-control"></td>
                                        <td id="td-ado"><input type="number" name="int_adolcesc_m" id="int_adolcesc_m" min="0" max="1000000" class="form-control"></td>
                                        <td id="td-jov"><input type="number" name="int_joven_m" id="int_joven_m" min="0" max="1000000" class="form-control"></td>
                                        <td id="td-adu"><input type="number" name="int_adulto_m" id="int_adulto_m" min="0" max="1000000" class="form-control"></td>
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
                            <p class="col-md-3 col-md-offset-9">
                                <button type="button" id="btn-gen-total"  class="btn btn-default pull-right">Generar totales</button>
                            </p>
                            <div class="col-md-4">
                                <table class="table thead-default table-bordered table-condensed" style="/*font-size: 11px;">
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
                                <table class="table thead-default table-bordered table-condensed" id="tbl-total-edad" style="/*Sfont-size: 11px;">
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
                                            <td id="td-ado">&nbsp;</td>
                                            <td id="td-jov">&nbsp;</td>
                                            <td id="td-adu">&nbsp;</td>
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
                            <input type="text" id="str_organo_sup" class="form-control" value="Secretaría del Medio Ambiente y Recursos Naturales" readonly="true">
                        </div>

                        <div class="form-group">
                            <label for="str_nombre_proyecto" class="control-label">Nombre del proyecto</label>
                            <input type="text" id="str_nombre_proyecto" class="form-control" readonly="true">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                            <label for="str_unidad_presupuestal" class="control-label">Unidad presupuestal</label>
                            <input type="text" name="str_unidad_presupuestal" id="str_unidad_presupuestal" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label for="txt_descripcion_proyecto" class="control-label">Descripción del proyecto</label>
                            <textarea id="txt_descripcion_proyecto" rows="4" class="form-control" readonly="true"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="gastos multiple" style=" padding: 5px 30px 0px; margin: 0 -30px;">
                            <div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="str_nombre_partida">Nombre de la partida</label>
                                            <input type="text" class="form-control" name="str_nombre_partida[]" id="str_nombre_partida" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="str_partida_especifica">Partida específica</label>
                                            <input type="text" class="form-control" name="str_partida_especifica[]" id="str_partida_especifica" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table thead-default table-bordered table-condensed" style="margin-bottom: 0; font-size: 11px;" id="tbl-presupuesto">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" style="width: 100px">Montos de<br>presupuestos</th>
                                                <th colspan="12">Meses</th>
                                            </tr>
                                            
                                            <tr>
                                                <th style="width: 100px">Enero</th>
                                                <th style="width: 100px">Febrero</th>
                                                <th style="width: 100px">Marzo</th>
                                                <th style="width: 100px">Abril</th>
                                                <th style="width: 100px">Mayo</th>
                                                <th style="width: 100px">Junio</th>
                                                <th style="width: 100px">Julio</th>
                                                <th style="width: 100px">Agosto</th>
                                                <th style="width: 100px">Septiembre</th>
                                                <th style="width: 100px">Octubre</th>
                                                <th style="width: 100px">Noviembre</th>
                                                <th style="width: 100px">Diciembre</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Autorizado</th>
                                                <td class="form-group"><input type="number" name="int_pre_aut_ene[]" min="0" max="1000000" class="form-control" readonly="readonly"></td>
                                                <td class="form-group"><input type="number" name="int_pre_aut_feb[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_aut_mar[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_aut_abr[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_aut_may[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_aut_jun[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_aut_jul[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_aut_ago[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_aut_sep[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_aut_oct[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_aut_nov[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_aut_dic[]" min="0" max="1000000" class="form-control" required="required"></td>
                                            </tr>
                                            <tr>
                                                <th>Modificado</th>
                                                <td class="form-group"><input type="number" name="int_pre_mod_ene[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_mod_feb[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_mod_mar[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_mod_abr[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_mod_may[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_mod_jun[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_mod_jul[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_mod_ago[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_mod_sep[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_mod_oct[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_mod_nov[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_mod_dic[]" min="0" max="1000000" class="form-control" required="required"></td>
                                            </tr>
                                            <tr>
                                                <th>Ejercido</th>
                                                <td class="form-group"><input type="number" name="int_pre_eje_ene[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_eje_feb[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_eje_mar[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_eje_abr[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_eje_may[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_eje_jun[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_eje_jul[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_eje_ago[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_eje_sep[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_eje_oct[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_eje_nov[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                <td class="form-group"><input type="number" name="int_pre_eje_dic[]" min="0" max="1000000" class="form-control" required="required"></td>
                                            </tr>
                                            <tr>
                                                <th>Porcentaje de variación</th>
                                                <td><span>0%</span></td>
                                                <td><span>0%</span></td>
                                                <td><span>0%</span></td>
                                                <td><span>0%</span></td>
                                                <td><span>0%</span></td>
                                                <td><span>0%</span></td>
                                                <td><span>0%</span></td>
                                                <td><span>0%</span></td>
                                                <td><span>0%</span></td>
                                                <td><span>0%</span></td>
                                                <td><span>0%</span></td>
                                                <td><span>0%</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success btn-block newrow">Nuevo objeto de gasto</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-danger btn-block deleterow" disabled="disable">Quitar objeto de gasto</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary nextBtn pull-right" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
            </div>

            <div class="col-md-12 setup-content" id="step-4">
                <div class="row">
                    <div class="col-md-12" role="tabpanel" data-example-id="togglable-tabs">
                        <div style="margin-left: -30px; margin-right: -30px">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Nivel Fin</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Nivel Propósito</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Nivel Componente</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Nivel Actividades</a>
                                </li>
                            </ul>
                        </div>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="str_nombre_componente" class="control-label">Nombre del componente</label>
                                            <input type="text" name="str_nombre_componente" id="str_nombre_componente" class="form-control" required="required">
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table thead-default table-bordered table-condensed">
                                                <tbody>
                                                    <tr>
                                                        <th colspan="2">Enero</th>
                                                        <th colspan="2">Febrero</th>
                                                        <th colspan="2">Marzo</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_fin_res_alc_ene" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_pro_ene" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_alc_feb" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_pro_feb" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_alc_mar" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_pro_mar" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_fin_reporte_ene" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_fin_reporte_feb" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_fin_reporte_mar" class="form-control" rows="3"></textarea> </td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="2">Abril</th>
                                                        <th colspan="2">Mayo</th>
                                                        <th colspan="2">Junio</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_fin_res_alc_abr" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_pro_abr" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_alc_may" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_pro_may" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_alc_jun" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_pro_jun" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_fin_reporte_abr" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_fin_reporte_may" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_fin_reporte_jun" class="form-control" rows="3"></textarea></td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="2">Julio</th>
                                                        <th colspan="2">Agosto</th>
                                                        <th colspan="2">Septiembre</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_fin_res_alc_jul" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_pro_jul" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_alc_ago" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_pro_ago" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_alc_sep" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_pro_sep" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_fin_reporte_jul" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_fin_reporte_ago" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_fin_reporte_sep" class="form-control" rows="3"></textarea> </td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="2">Octubre</th>
                                                        <th colspan="2">Noviembre</th>
                                                        <th colspan="2">Diciembre</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_fin_res_alc_oct" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_pro_oct" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_alc_nov" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_pro_nov" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_alc_dic" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_fin_res_pro_dic" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_fin_reporte_oct" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_fin_reporte_nov" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_fin_reporte_dic" class="form-control" rows="3"></textarea></td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="6">Meta final</th>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="form-group">
                                                            <textarea name="txt_fin_meta_final" id="txt_fin_meta_final" rows="3" class="form-control" required="required"></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="str_nombre_componente" class="control-label">Nombre del componente</label>
                                            <input type="text" name="str_nombre_componente" id="str_nombre_componente" class="form-control" required="required">
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table thead-default table-bordered table-condensed">
                                                <tbody>
                                                    <tr>
                                                        <th colspan="2">Enero</th>
                                                        <th colspan="2">Febrero</th>
                                                        <th colspan="2">Marzo</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_pro_res_alc_ene" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_pro_ene" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_alc_feb" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_pro_feb" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_alc_mar" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_pro_mar" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_pro_reporte_ene" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_pro_reporte_feb" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_pro_reporte_mar" class="form-control" rows="3"></textarea> </td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="2">Abril</th>
                                                        <th colspan="2">Mayo</th>
                                                        <th colspan="2">Junio</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_pro_res_alc_abr" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_pro_abr" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_alc_may" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_pro_may" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_alc_jun" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_pro_jun" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_pro_reporte_abr" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_pro_reporte_may" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_pro_reporte_jun" class="form-control" rows="3"></textarea></td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="2">Julio</th>
                                                        <th colspan="2">Agosto</th>
                                                        <th colspan="2">Septiembre</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_pro_res_alc_jul" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_pro_jul" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_alc_ago" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_pro_ago" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_alc_sep" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_pro_sep" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_pro_reporte_jul" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_pro_reporte_ago" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_pro_reporte_sep" class="form-control" rows="3"></textarea> </td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="2">Octubre</th>
                                                        <th colspan="2">Noviembre</th>
                                                        <th colspan="2">Diciembre</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_pro_res_alc_oct" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_pro_oct" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_alc_nov" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_pro_nov" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_alc_dic" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_pro_res_pro_dic" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_pro_reporte_oct" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_pro_reporte_nov" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_pro_reporte_dic" class="form-control" rows="3"></textarea></td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="6">Meta final</th>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="form-group">
                                                            <textarea name="txt_pro_meta_final" id="txt_pro_meta_final" rows="3" class="form-control" required="required"></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="str_nombre_componente" class="control-label">Nombre del componente</label>
                                            <input type="text" name="str_nombre_componente" id="str_nombre_componente" class="form-control" required="required">
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table thead-default table-bordered table-condensed">
                                                <tbody>
                                                    <tr>
                                                        <th colspan="2">Enero</th>
                                                        <th colspan="2">Febrero</th>
                                                        <th colspan="2">Marzo</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_com_res_alc_ene" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_pro_ene" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_alc_feb" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_pro_feb" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_alc_mar" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_pro_mar" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_com_reporte_ene" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_com_reporte_feb" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_com_reporte_mar" class="form-control" rows="3"></textarea> </td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="2">Abril</th>
                                                        <th colspan="2">Mayo</th>
                                                        <th colspan="2">Junio</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_com_res_alc_abr" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_pro_abr" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_alc_may" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_pro_may" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_alc_jun" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_pro_jun" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_com_reporte_abr" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_com_reporte_may" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_com_reporte_jun" class="form-control" rows="3"></textarea></td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="2">Julio</th>
                                                        <th colspan="2">Agosto</th>
                                                        <th colspan="2">Septiembre</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_com_res_alc_jul" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_pro_jul" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_alc_ago" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_pro_ago" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_alc_sep" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_pro_sep" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_com_reporte_jul" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_com_reporte_ago" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_com_reporte_sep" class="form-control" rows="3"></textarea> </td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="2">Octubre</th>
                                                        <th colspan="2">Noviembre</th>
                                                        <th colspan="2">Diciembre</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_com_res_alc_oct" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_pro_oct" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_alc_nov" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_pro_nov" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_alc_dic" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_com_res_pro_dic" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_com_reporte_oct" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_com_reporte_nov" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_com_reporte_dic" class="form-control" rows="3"></textarea></td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="6">Meta final</th>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="form-group">
                                                            <textarea name="txt_com_meta_final" id="txt_com_meta_final" rows="3" class="form-control" required="required"></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="str_nombre_componente" class="control-label">Nombre del componente</label>
                                            <input type="text" name="str_nombre_componente" id="str_nombre_componente" class="form-control" required="required">
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table thead-default table-bordered table-condensed">
                                                <tbody>
                                                    <tr>
                                                        <th colspan="2">Enero</th>
                                                        <th colspan="2">Febrero</th>
                                                        <th colspan="2">Marzo</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_act_res_alc_ene" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_pro_ene" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_alc_feb" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_pro_feb" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_alc_mar" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_pro_mar" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_act_reporte_ene" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_act_reporte_feb" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_act_reporte_mar" class="form-control" rows="3"></textarea> </td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="2">Abril</th>
                                                        <th colspan="2">Mayo</th>
                                                        <th colspan="2">Junio</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_act_res_alc_abr" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_pro_abr" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_alc_may" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_pro_may" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_alc_jun" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_pro_jun" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_act_reporte_abr" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_act_reporte_may" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_act_reporte_jun" class="form-control" rows="3"></textarea></td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="2">Julio</th>
                                                        <th colspan="2">Agosto</th>
                                                        <th colspan="2">Septiembre</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_act_res_alc_jul" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_pro_jul" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_alc_ago" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_pro_ago" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_alc_sep" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_pro_sep" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_act_reporte_jul" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_act_reporte_ago" class="form-control" rows="3"></textarea> </td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_act_reporte_sep" class="form-control" rows="3"></textarea> </td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="2">Octubre</th>
                                                        <th colspan="2">Noviembre</th>
                                                        <th colspan="2">Diciembre</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                        <th style="font-weight: normal;">Resultado Alcanzado</th>
                                                        <th style="font-weight: normal;">Resultado Programado</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group"><input type="number" name="int_act_res_alc_oct" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_pro_oct" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_alc_nov" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_pro_nov" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_alc_dic" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_act_res_pro_dic" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                        <th style="font-weight: normal;" colspan="2">Reporte</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="form-group" colspan="2"><textarea name="txt_act_reporte_oct" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_act_reporte_nov" class="form-control" rows="3"></textarea></td>
                                                        <td class="form-group" colspan="2"><textarea name="txt_act_reporte_dic" class="form-control" rows="3"></textarea></td>
                                                    </tr>
                                                    <tr><td colspan="6" style=" border-left-color: #fff;border-right-color: #fff;">-</td></tr>
                                                    <tr>
                                                        <th colspan="6">Meta final</th>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="form-group">
                                                            <textarea name="txt_act_meta_final" id="txt_act_meta_final" rows="3" class="form-control" required="required"></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- <label for="" class="control-label" style="text-align: left;">Control de Indicadores</label> -->

                            <!-- <select id="ddl_direcciones" class="form-control "> -->
                            <!-- <option value="">-- Selecciona una Categoría --</option> -->
                            <?php //foreach ($direcciones as $value): ?>
                                <!-- <option value="<?php //echo $value['id']    ?>"><?php //echo $value['nombre']    ?></option>} -->
                            <?php //endforeach ?>
                            <!-- </select> -->
                        </div>

                        <div style="margin-left: -31px; margin-right: -31px;" id="tbl-control-indicadores">
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
            </div>

            <div class="col-md-12 setup-content" id="step-5">
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                            <label for="str_dependencia" class="control-label">Dependencia</label>
                            <input type="text" id="str_dependencia" class="form-control" value="Secretaría del Medio Ambiente y Recursos Naturales" readonly="true">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                            <label for="str_unidad_presupuestal_viaticos" class="control-label">Unidad presupuestal</label>
                            <input type="text" name="str_unidad_presupuestal_viaticos" id="str_unidad_presupuestal_viaticos" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="viaticos multiple" style=" padding: 5px 30px 0px; margin: 0 -30px;">
                            <div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="str_viaticos_proyecto">Proyecto</label>
                                            <input type="text" id="str_viaticos_proyecto" class="form-control" readonly="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label for="str_viaticos_comision">Comisión</label>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txt_viaticos_objetivo">Objetivo</label>
                                            <textarea id="txt_viaticos_objetivo" class="form-control" readonly="true"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">

                                    <table class="table thead-default table-bordered table-condensed" id="tbl-viaticos">

                                        <thead>
                                            <tr>
                                                <th rowspan="2" style="width: 100px">Comisión</th>
                                                <th rowspan="2" style="width: 50px">No. personas</th>
                                                <th rowspan="2" style="width: 50px">Mes</th>
                                                <th rowspan="2" style="width: 50px">Duracion (Días)</th>
                                                <th rowspan="2" style="width: 50px">Lugar de comisión</th>
                                                <th colspan="3" style="width: 150px">Monto por concepto</th>

                                            </tr>
                                            <tr>
                                                <th style="width: 50px">Alimentación</th>
                                                <th style="width: 50px">Hospedaje</th>
                                                <th style="width: 50px">Traslado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="form-group"><input type="text" name="str_viaticos_comision[]" id="str_viaticos_comision" class="form-control"></td>
                                                <td class="form-group"><input type="number" name="int_num_personas[]" id="int_num_personas" class="form-control" min="1" max="20" required="required"></td>
                                                <td class="form-group">
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
                                                <td class="form-group"><input type="number" name="int_duracion_dias[]" id="int_duracion_dias" class="form-control" min="1" max="20" required="required"></td>
                                                <td class="form-group">
                                                    <select name="ddl_lugar_comision[]" id="ddl_lugar_comision" class="form-control" required="required">
                                                        <option value="">Selecciona</option>
                                                        <option value="local">Local</option>
                                                        <option value="nacional">Nacional</option>
                                                        <option value="extanjro">Extanjro</option>
                                                    </select>
                                                </td>
                                                <td class="form-group"><span>$</span><input type="number" name="dbl_monto_alimentacion[]" id="dbl_monto_alimentacion" class="form-control" min="0" max="1000000" required="required"></td>
                                                <td class="form-group"><span>$</span><input type="number" name="dbl_monto_hospedaje[]" id="dbl_monto_hospedaje" class="form-control" min="0" max="1000000" required="required"></td>
                                                <td class="form-group"><span>$</span><input type="number" name="dbl_monto_traslado[]" id="dbl_monto_traslado" class="form-control" min="0" max="1000000" required="required"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success btn-block newrow">Nuevo objeto de gasto</button>

                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-danger btn-block deleterow" disabled="disable">Quitar objeto de gasto</button>
                            </div>
                        </div>
                    </div>
                </div>

                
                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
            </div>

            <div class="col-md-12 setup-content" id="step-6">
                <div class="col-md-12" role="tabpanel" data-example-id="togglable-tabs">
                    <div style="margin-left: -30px; margin-right: -30px">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content11" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Nivel Fin</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Nivel Propósito</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content33" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Nivel Componente</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content44" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Nivel Actividades</a>
                            </li>
                        </ul>
                    </div>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">
                        fin
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="home-tab">
                        propósito
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content33" aria-labelledby="home-tab">
                        componente
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content44" aria-labelledby="home-tab">
                        actividades
                        </div>

                    </div>
                </div>
                <div style="margin-left: -60px;margin-right: -60px;">
                    <table class="table table-bordered table-indicadores thead-default" style="font-size: 10px !important">
                        <tbody>
                            <tr>
                                <th class="table-title-left" style="width: 130px">EJERCICIO 2017</th>
                                <th class="table-title-center" style="width: 80px">Enero</th>
                                <th class="table-title-center" style="width: 80px">Febrero</th>
                                <th class="table-title-center" style="width: 80px">Marzo</th>
                                <th class="table-title-center" style="width: 80px">Abril</th>
                                <th class="table-title-center" style="width: 80px">Mayo</th>
                                <th class="table-title-center" style="width: 80px">Junio</th>
                                <th class="table-title-center" style="width: 80px" rowspan="2">Total <br>Primer <br>Periodo</th>
                                <th class="table-title-center" style="width: 80px">Julio</th>
                                <th class="table-title-center" style="width: 80px">Agosto</th>
                                <th class="table-title-center" style="width: 80px">Septiembre</th>
                                <th class="table-title-center" style="width: 80px">Octubre</th>
                                <th class="table-title-center" style="width: 80px">Noviembre</th>
                                <th class="table-title-center" style="width: 80px">Diciembre</th>
                                <th class="table-title-center" style="width: 80px" rowspan="2">Total <br>Segundo <br>Perdiodo</th>
                                <th class="table-title-center" style="width: 80px" rowspan="2">Meta <br>Anual</th>
                            </tr>
                            <tr>
                                <th class="table-title-left" rowspan="2">Número de vehiculos <br>verificados</th>
                                <th class="table-title-center" colspan="6">Primer Periodo</th>
                                <th class="table-title-center" colspan="6">Segundo Periodo</th>
                            </tr>
                            <tr id="tr_num_veh_ver">
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td><span id="suma_pri_per" style="font-weight: bold;">-</span></td>


                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td><span id="suma_seg_per" style="font-weight: bold;">-</span></td>
                                <td><span id="suma_meta_final">--</span></td>
                            </tr>
                            <tr>
                                <th class="table-title-left">Porcentaje de avance <br>del inidicador valor %</th>
                                <td class="pri_per pri_tri" id="td_int_num_veh_ene">-</td>
                                <td class="pri_per pri_tri" id="td_int_num_veh_feb">-</td>
                                <td class="pri_per pri_tri" id="td_int_num_veh_mar">-</td>
                                <td class="pri_per seg_tri" id="td_int_num_veh_abr">-</td>
                                <td class="pri_per seg_tri" id="td_int_num_veh_may">-</td>
                                <td class="pri_per seg_tri" id="td_int_num_veh_jun">-</td>

                                <td class="td_tot_pri_per">-</td>

                                <td class="seg_per ter_tri" id="td_int_num_veh_jul">-</td>
                                <td class="seg_per ter_tri" id="td_int_num_veh_ago">-</td>
                                <td class="seg_per ter_tri" id="td_int_num_veh_sep">-</td>
                                <td class="seg_per cua_tri" id="td_int_num_veh_oct">-</td>
                                <td class="seg_per cua_tri" id="td_int_num_veh_nov">-</td>
                                <td class="seg_per cua_tri" id="td_int_num_veh_dic">-</td>

                                <td class="td_tot_seg_per">-</td>

                                <td rowspan="4" style="background-color: #f1f1f1"></td>
                            </tr>
                            <tr>
                                <th class="table-title-left" rowspan="2">Semáforo de control <br>Periodicidad: cortes <br>trimestrales </th>
                                <th class="table-title-center" colspan="3">Primer Trimestre</th>
                                <th class="table-title-center" colspan="3">Segundo Trimestre</th>
                                <td style="background-color: #e5e5e5"></td>
                                <th class="table-title-center" colspan="3">Tercer Trimestre</th>
                                <th class="table-title-center" colspan="3">Cuarto Trimestre</th>
                                <td style="background-color: #e5e5e5"></td>
                            </tr>
                            <tr>
                                <td class="td_sum_pri_tri" colspan="3">-</td>
                                <td class="td_sum_seg_tri" colspan="3">-</td>
                                
                                <td class="td_tot_pri_per">-</td>
                                
                                <td class="td_sum_ter_tri" colspan="3">-</td>
                                <td class="td_sum_cua_tri" colspan="3">-</td>

                                <td class="td_tot_seg_per">-</td>
                                <!-- <td>-</td> -->
                            </tr>
                            <tr>
                                <th class="table-title-left">Tendencia del indicador <br>(corte al trimestre)</th>
                                <td class="td_sum_pri_tri" colspan="3">-</td>
                                <td class="td_sum_seg_tri" colspan="3">-</td>
                                <td class="td_tot_pri_per">-</td>
                                <td class="td_sum_ter_tri" colspan="3">-</td>
                                <td class="td_sum_cua_tri" colspan="3">-</td>
                                <td class="td_tot_seg_per">-</td>
                            </tr>
                            <tr>
                                <td colspan="16" style="background-color: #fff; padding: 5px !important"></td>
                            </tr>
                            <tr>
                                <th class="table-title-left">Evaluación de la <br>eficiencia presupuestal</th>
                                <th class="table-title-center">Enero</th>
                                <th class="table-title-center">Febrero</th>
                                <th class="table-title-center">Marzo</th>
                                <th class="table-title-center">Abril</th>
                                <th class="table-title-center">Mayo</th>
                                <th class="table-title-center">Junio</th>
                                <th class="table-title-center">Total <br>Primer <br>Periodo</th>
                                <th class="table-title-center">Julio</th>
                                <th class="table-title-center">Agosto</th>
                                <th class="table-title-center">Septiembre</th>
                                <th class="table-title-center">Octubre</th>
                                <th class="table-title-center">Noviembre</th>
                                <th class="table-title-center">Diciembre</th>
                                <th class="table-title-center">Total <br>Segundo <br>Perdiodo</th>
                                <th class="table-title-center">Presupuesto <br>Anual</th>
                            </tr>
                            <tr class="tr_pre_men"> 
                                <th class="table-title-left">Presupuesto mensual <br>autorizado</th>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>

                                <td id="td_sum_pri_per_pre_men_aut">-</td>

                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>

                                <td id="td_sum_seg_per_pre_men_aut">-</td>

                                <td id="td_pres_anual">$ 500,000.00</td>
                            </tr>
                            <tr> 
                                <th class="table-title-left">Porcentaje mensual <br>autorizado</th>
                                <td class="pri_per pres_anual" id="td_por_men_aut_ene">-</td>
                                <td class="pri_per pres_anual" id="td_por_men_aut_feb">-</td>
                                <td class="pri_per pres_anual" id="td_por_men_aut_mar">-</td>
                                <td class="pri_per pres_anual" id="td_por_men_aut_abr">-</td>
                                <td class="pri_per pres_anual" id="td_por_men_aut_may">-</td>
                                <td class="pri_per pres_anual" id="td_por_men_aut_jun">-</td>

                                <td id="td_sum_por_pri_per_pre_men_aut">-</td>

                                <td class="seg_per pres_anual" id="td_por_men_aut_jul">-</td>
                                <td class="seg_per pres_anual" id="td_por_men_aut_ago">-</td>
                                <td class="seg_per pres_anual" id="td_por_men_aut_sep">-</td>
                                <td class="seg_per pres_anual" id="td_por_men_aut_oct">-</td>
                                <td class="seg_per pres_anual" id="td_por_men_aut_nov">-</td>
                                <td class="seg_per pres_anual" id="td_por_men_aut_dic">-</td>

                                <td id="td_sum_por_seg_per_pre_men_aut">-</td>

                                <td id="td_sum_tot_pre_men_aut">#</td>
                            </tr>
                            <tr class="tr_pre_men"> 
                                <th class="table-title-left">Presupuesto mensual <br>erogado</th>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>
                                <td class="pri_per">-</td>

                                <td id="td_sum_pri_per_pre_men_ero">-</td>

                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>
                                <td class="seg_per">-</td>     

                                <td id="td_sum_seg_per_pre_men_ero">-</td>

                                <td>#</td>
                            </tr>
                            <tr id="tr_por_men_eje"> 
                                <th class="table-title-left">Porcentaje mensual <br>ejercido</th>
                                <td class="pri_per pres_anual pri_tri" id="td_pre_men_ero_ene">-</td>
                                <td class="pri_per pres_anual pri_tri" id="td_pre_men_ero_feb">-</td>
                                <td class="pri_per pres_anual pri_tri" id="td_pre_men_ero_mar">-</td>
                                <td class="pri_per pres_anual seg_tri" id="td_pre_men_ero_abr">-</td>
                                <td class="pri_per pres_anual seg_tri" id="td_pre_men_ero_may">-</td>
                                <td class="pri_per pres_anual seg_tri" id="td_pre_men_ero_jun">-</td>

                                <td id="td_sum_por_pri_per_pre_men_ero">-</td>

                                <td class="seg_per pres_anual ter_tri" id="td_pre_men_ero_jul">-</td>
                                <td class="seg_per pres_anual ter_tri" id="td_pre_men_ero_ago">-</td>
                                <td class="seg_per pres_anual ter_tri" id="td_pre_men_ero_sep">-</td>
                                <td class="seg_per pres_anual cua_tri" id="td_pre_men_ero_oct">-</td>
                                <td class="seg_per pres_anual cua_tri" id="td_pre_men_ero_nov">-</td>
                                <td class="seg_per pres_anual cua_tri" id="td_pre_men_ero_dic">-</td>

                                <td id="td_sum_por_seg_per_pre_men_ero">-</td>

                                <td id="td_sum_tot_pre_men_ero">#</td>
                            </tr>
                            <tr>
                                <th class="table-title-left" rowspan="2">
                                    Semáforo de control <br>periodicidad: cortes <br>trimestrales <br>acumulativos
                                </th>
                                <th class="table-title-center" colspan="3">Primer Trimestre</th>
                                <th class="table-title-center" colspan="3">Segundo Trimestre</th>
                                <td style="background-color: #e5e5e5"></td>
                                <th class="table-title-center" colspan="3">Tercer Trimestre</th>
                                <th class="table-title-center" colspan="3">Cuarto Trimestre</th>
                                <td style="background-color: #e5e5e5"></td>
                                <td rowspan="2">100%</td>
                            </tr>
                            <tr>
                                <td id="td_sum_pri_tri" colspan="3">-</td>
                                <td id="td_sum_seg_tri" colspan="3">-</td>

                                <td id="td_sum_tri_pri_per">-</td>

                                <td id="td_sum_ter_tri" colspan="3">-</td>
                                <td id="td_sum_cua_tri" colspan="3">-</td>

                                <td id="td_sum_tri_seg_per">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-primary pull-right nextBtn">Guardar <i class="fa fa-save"></i></button> 
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div> 


<script type="text/javascript">
    $(document).ready(function ()
    {
        $('.table-indicadores tbody #tr_num_veh_ver td :input').on('change', function (event)
        {
            var inputs = $(this).parents('tr').children('.' + $(this).parent().attr('class')).children('input');
            var suma = 0;
            for (var i = 0; i < inputs.length; i++)
            {
                suma += parseFloat(inputs[i].value === '' ? 0 : inputs[i].value);
            }
            $('#suma_' + $(this).parent().attr('class')).text('' + suma);
            var porcentaje = (parseFloat($(this).val() === '' ? 0 : $(this).val()) / 937530) * 100;
            var color = colores(porcentaje.toFixed(0));
            $('#td_' + $(this).attr('id'))
                    .css({
                        'background': color,
                        'border-color': color,
                        'color': '#000'
                    })
                    .text(porcentaje.toFixed(2) + '%');

            var tds = $(this).parents('tr').siblings('tr').eq($(this).parents('tr').index()).children('.' + $(this).parent().attr('class'));
            var suma_por = 0;
            for (var i = 0; i < tds.length; i++)
            {
                suma_por += parseFloat(tds[i].innerHTML === '-' || tds[i].innerHTML === '' ? 0 : tds[i].innerHTML);
            }
            $('.td_tot_' + $(this).parent().attr('class')).text('' + suma_por.toFixed(2));
            var trimestre = $(tds).siblings('.' + $(this).attr('class'));
            var suma_trimestre = 0;
            for (var i = 0; i < trimestre.length; i++)
            {
                suma_trimestre += parseFloat(trimestre[i].innerHTML === '-' || trimestre[i].innerHTML === '' ? 0 : trimestre[i].innerHTML);
            }
            $('.td_sum_' + $(this).attr('class')).text('' + suma_trimestre.toFixed(2));
        });

        $('.table-indicadores tbody .tr_pre_men td :input').on('change', function (event)
        {
            var suma = 0;
            $(this).parents('tr')
                    .children('.' + $(this).parent().attr('class'))
                    .children('input')
                    .each(function (index, el) {
                        suma += parseFloat(el.value === '' ? 0 : el.value);
                    });
            $('#td_sum_' + $(this).attr('class').split(' ')[0]).text('$ ' + suma.toFixed(2));
            var por_men_aut = (parseFloat($(this).val()) * 100) / parseInt($('#td_pres_anual').text().substr(1).replace(',', ''));
            $('#td_' + $(this).attr('id').substr(4))
                    .text(por_men_aut.toFixed(2));
            var tds = $(this).parents('tr')
                    .siblings('tr')
                    .eq($(this).parents('tr').index())
                    .children('.' + $(this).parent('td').attr('class'));
            var sum_per = 0;
            $(tds).each(function (index, el) {
                sum_per += parseFloat(el.innerHTML === '-' || el.innerHTML === '' ? 0 : el.innerHTML);
            });

            $('#td_sum_por_' + $(this).attr('class').split(' ')[0]).text(sum_per.toFixed(2));
            var sum_pres_anual = 0;
            $(tds).parent()
                    .children('.pres_anual')
                    .each(function (index, el) {
                        sum_pres_anual += parseFloat(el.innerHTML === '-' || el.innerHTML === '' ? 0 : el.innerHTML);
                    });

            $('#td_sum_tot_' + $(this).attr('class').substr(8).split(' ')[0]).text(sum_pres_anual);

            if ($(this).parents('tr')
                    .siblings('tr')
                    .eq($(this).parents('tr').index())
                    .attr('id') === 'tr_por_men_eje')
            {
                var sum_trimestral = 0;
                $(tds).parent()
                        .children('.' + $(this).attr('class').split(' ')[1])
                        .each(function (index, el) {
                            sum_trimestral += parseFloat(el.innerHTML === '-' || el.innerHTML === '' ? 0 : el.innerHTML);
                        });
                $('#td_sum_' + $(this).attr('class').substr(8).split(' ')[1]).text(sum_trimestral);


                var suma_trimestre = 0;
                $(tds).siblings('.' + $(this).parent().attr('class').split(' ')[0])
                        .each(function (index, el) {
                            suma_trimestre += parseFloat(el.innerHTML === '-' || el.innerHTML === '' ? 0 : el.innerHTML);
                        });
                $('#td_sum_tri_' + $(this).parent().attr('class').split(' ')[0]).text('' + suma_trimestre.toFixed(2));
            }

            // for (var i = 0; i < trimestre.length; i++) 
            // {
            //     suma_trimestre += parseFloat(trimestre[i].innerHTML === '-' || trimestre[i].innerHTML === '' ? 0 : trimestre[i].innerHTML);
            // }
            // $('.td_sum_'+$(this).attr('class')).text(''+suma_trimestre.toFixed(2));
        });
    });
</script>

<script type="text/javascript">
    $(document).on('ready', function () {
        $('#ddl_direcciones').on('change', function () {
            $.get("<?php echo base_url('sipema/set_table_direcciones/') ?>" + $(this).val(), function (data) {
                if (data !== '')
                {
                    $('#tbl-control-indicadores').html(data);
                }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).on('ready', function ()
    {
        var nextInput = null;
        $("form :input").on("keydown", function (event)
        {
            if (event.which === 13 && !$(this).is("textarea, :button, :submit"))
            {
                event.stopPropagation();
                event.preventDefault();

                nextInput = $(":input:eq(" + ($(":input").index(this) + 1) + ")");
                nextInput.focus();
            }
        });
    });
</script>