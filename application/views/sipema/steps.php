
<div class="row">
    <div class="col-md-12" style="margin-top: 20px">
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-uppercase text-center">SECRETARÍA DEL MEDIO AMBIENTE Y RECURSOS NATURALES
                        <small>(SEMARNATH)</small>
                    </h3>
                    <div class="clearfix"></div>
                </div>
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
                                <p>Programación de Metas <br> nivel Componente, fin y propósito (MIR)</p>
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

                    <?php echo form_open('sipema/guardar_reg/', 'id="form-reg"') ?>
                    <div class="col-md-12">
                        <div class="row" id="error" ></div>
                    </div>

                    <input type="hidden" name="hdn_id_subprograma" value="<?php echo $idsubprograma ?>" />
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
                                    <input type="text" name="str_organo_sup" id="str_organo_sup" class="form-control" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="str_nombre_proyecto" class="control-label">Nombre del proyecto</label>
                                    <input type="text" name="str_nombre_proyecto" id="str_nombre_proyecto" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <div class="form-group">
                                    <label for="str_unidad_presupuestal" class="control-label">Unidad presupuestal</label>
                                    <input type="text" name="str_unidad_presupuestal" id="str_unidad_presupuestal" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="txt_descripcion_proyecto" class="control-label">Descripción del proyecto</label>
                                    <textarea name="txt_descripcion_proyecto" id="txt_descripcion_proyecto" rows="4" class="form-control" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="margin-left: -31px; margin-right: -31px">
                                    <div class="table-responsive table-lg">
                                        <!-- <table class="table thead-default table-bordered table-condensed" style="margin-bottom: 0; width: 2000px;" id="tbl-presupuesto">
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
                                                    <td class="form-group"><input type="text" name="str_partida_especifica[]" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="text" name="str_nombre_partida[]" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_monto_total_solicitado[]" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_mto_ene[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_mto_feb[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_mto_mar[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_mto_abr[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_mto_may[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_mto_jun[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_mto_jul[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_mto_ago[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_mto_sep[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_mto_oct[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_mto_nov[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="number" name="int_mto_dic[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                </tr>
                                            </tbody>
                                        </table> -->
                                        <table class="table thead-default table-bordered table-condensed" style="margin-bottom: 0; width: 2000px;" id="tbl-presupuesto">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        Objeto de gasto (COG)
                                                    </th>
                                                    <th rowspan="2" style="width: 100px">Montos</th>
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
                                                        <td rowspan="4" class="form-group"><textarea name="str_partida_especifica[]" rows="12" class="form-control" required="required"></textarea></td>
                                                        <td rowspan="4" class="form-group"><textarea name="str_nombre_partida[]" rows="12" class="form-control" required="required"></textarea></td>
                                                        
                                                        

                                                        <th>Presupuesto autorizado</th>
                                                        <td class="form-group"><input type="number" name="int_mto_ene[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_feb[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_mar[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_abr[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_may[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_jun[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_jul[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_ago[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_sep[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_oct[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_nov[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_dic[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Presupuesto modificado</th>
                                                        
                                                        <td class="form-group"><input type="number" name="int_mto_ene[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_feb[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_mar[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_abr[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_may[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_jun[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_jul[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_ago[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_sep[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_oct[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_nov[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_dic[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Presupuesto ejercido</th>
                                                        
                                                        <td class="form-group"><input type="number" name="int_mto_ene[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_feb[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_mar[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_abr[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_may[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_jun[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_jul[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_ago[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_sep[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_oct[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_nov[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                        <td class="form-group"><input type="number" name="int_mto_dic[]" min="0" max="1000000" class="form-control" required="required"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Porcentaje de variación</th>
                                                        
                                                        <td><span>%</span></td>
                                                        <td><span>%</span></td>
                                                        <td><span>%</span></td>
                                                        <td><span>%</span></td>
                                                        <td><span>%</span></td>
                                                        <td><span>%</span></td>
                                                        <td><span>%</span></td>
                                                        <td><span>%</span></td>
                                                        <td><span>%</span></td>
                                                        <td><span>%</span></td>
                                                        <td><span>%</span></td>
                                                        <td><span>%</span></td>
                                                    </tr>
                                                    <tr id="separador">
                                                        <td colspan="15">-</td>
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
                        </div>
                        <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                    </div>

                    <div class="col-md-12 setup-content" id="step-4">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="str_nombre_componente" class="control-label">Nombre del componente</label>
                                    <input type="text" name="str_nombre_componente" id="str_nombre_componente" class="form-control" required="required">
                                </div>
                                <div class="table-responsive">
                                    <div style="margin-left: -31px; margin-right: -31px">
                                        <table class="table thead-default table-bordered table-condensed">
                                            <tbody>
                                                <tr>
                                                    <th rowspan="10"><span class="rotate">Programación / avance</span></th>
                                                    <th colspan="2">Enero</th>
                                                    <th colspan="2">Febrero</th>
                                                    <th colspan="2">Marzo</th>
                                                </tr>
                                                <tr>
                                                    <th>Resultado Alcanzado</th>
                                                    <th>Resultado Programado</th>
                                                    
                                                    <th>Resultado Alcanzado</th>
                                                    <th>Resultado Programado</th>

                                                    <th>Resultado Alcanzado</th>
                                                    <th>Resultado Programado</th>
                                                </tr>
                                                <tr>
                                                    <td><input type="number" name="" value="" placeholder=""></td>
                                                    <td><input type="number" name="" value="" placeholder=""></td>
                                                    <td><input type="number" name="" value="" placeholder=""></td>
                                                    <td><input type="number" name="" value="" placeholder=""></td>
                                                    <td><input type="number" name="" value="" placeholder=""></td>
                                                    <td><input type="number" name="" value="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">Reporte</th>
                                                    <th colspan="2">Reporte</th>
                                                    <th colspan="2">Reporte</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><textarea name="" class="form-control"></textarea> </td>
                                                    <td colspan="2"><textarea name="" class="form-control"></textarea> </td>
                                                    <td colspan="2"><textarea name="" class="form-control"></textarea> </td>
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
                                                    <td colspan="3" class="form-group">
                                                        <textarea name="txt_comp_meta_final" id="txt_comp_meta_final" rows="5" class="form-control" required="required"></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div style="margin-left: -31px; margin-right: -31px">
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
                                                    <td colspan="3" class="form-group">
                                                        <textarea name="txt_comp_meta_final" id="txt_comp_meta_final" rows="5" class="form-control" required="required"></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label" style="text-align: left;">Control de Indicadores</label>

                                    <select id="ddl_direcciones" class="form-control ">
                                        <option value="">-- Selecciona una Categoría --</option>
                                        <?php foreach ($direcciones as $value): ?>
                                            <option value="<?php echo $value['id'] ?>"><?php echo $value['nombre'] ?></option>}
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div style="margin-left: -31px; margin-right: -31px;" id="tbl-control-indicadores">
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
                                    <input type="text" name="str_nombre_actividad" id="str_nombre_actividad" class="form-control" required="required">
                                </div>
                                <div class="table-responsive">
                                    <!-- <div style="margin-left: -31px; margin-right: -31px"> -->
                                    <div style="margin-left: -31px; margin-right: -31px">
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
                                                    <td colspan="3" class="form-group">
                                                        <textarea name="txt_acti_meta_final" id="txt_acti_meta_final" rows="5" class="form-control" required="required"></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
                                    <input type="text" name="str_dependencia" id="str_dependencia" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <div class="form-group">
                                    <label for="str_unidad_presupuestal_viaticos" class="control-label">Unidad presupuestal</label>
                                    <input type="text" name="str_unidad_presupuestal_viaticos" id="str_unidad_presupuestal_viaticos" class="form-control" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="margin-left: -31px; margin-right: -31px">
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
                                                    <td class="form-group"><input type="text"   name="str_viaticos_proyecto[]" id="str_viaticos_proyecto" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="text"   name="str_viaticos_comision[]" id="str_viaticos_comision" class="form-control" required="required"></td>
                                                    <td class="form-group"><input type="text"   name="str_viaticos_objetivo[]" id="str_viaticos_objetivo" class="form-control" required="required"></td>
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
                                <button type="submit" class="btn btn-success nextBtn">Enviar información</button> 
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo form_close() ?>
            </div>
        </div> 
    </div>
</div>



<script type="text/javascript" src="<?php echo base_url('assets/build/js/escala_colores.js') ?>"></script>

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
    $(document).on('ready', function() {
        $('#ddl_direcciones').on('change', function() {
            //alert();
            $.get("<?php echo base_url('sipema/set_table_direcciones/') ?>" + $(this).val(), function(data) {
                if (data !== '') 
                {
                    $('#tbl-control-indicadores').html(data);
                }
            });
        });
    });
</script>

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
                $target.find(':input:eq(0)').focus();
            }
        });
        allNextBtn.click(function ()
        {
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find(":input"),
                    isValid = true;
            $(".form-group").removeClass('has-error').removeClass('has-feedback');
            $('.form-group').find('span').remove();
            for (var i = 0; i < curInputs.length; i++)
            {
                if (!curInputs[i].validity.valid)
                {
                    //isValid = false;
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
            } else
            {
                $('#error').html('<div class="col-md-12">' +
                        '<div class="alert alert-danger alert-dismissible fade in" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">' +
                        '<font><font>×</font></font>' +
                        '</span></button>' +
                        '<h4><font><font class=""><i class="fa fa-info-circle" aria-hidden="true"></i> Error! </font></font></h4> ' +
                        '<p><font><font class="">Llene todos los campos señalados para poder continuar. </font></div></div>');
            }
        });
        $('div.setup-panel div a.btn-primary').trigger('click');
    });
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
            var tds = {'td-pre': 0, 'td-nin': 0, 'td-ado': 0, 'td-jov': 0, 'td-adu': 0, 'td-may': 0};

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
                if (poblacion[i].id === 'td-ado')
                {
                    tds['td-ado'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
                if (poblacion[i].id === 'td-jov')
                {
                    tds['td-jov'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
                if (poblacion[i].id === 'td-adu')
                {
                    tds['td-adu'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
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
        $("#" + id_table + " tbody #separador").siblings().clone(true).appendTo("#" + id_table + "");

        $("#" + id_table + " tbody tr:last td input")
                .each(function (index, el) {
                    $(el).val('')
                            .closest('.form-group')
                            .removeClass('has-error has-feedback')
                            .find('span')
                            .remove();
                });
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






