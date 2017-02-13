
<div class="row">
    <div class="col-md-12" style="margin-top: 20px">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">
                    A continuación completa los datos del formulario
                </h1>
            </div>
            <div class="panel-body ">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                            <p>Datos Generales</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p>Carta descriptiva</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                            <p>Población beneficiada</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                            <p>Estructura financiera</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                            <p>Indicadores</p>
                        </div>
                        <!-- <div class="stepwizard-step">
                            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                            <p>Programación mensual</p>
                        </div> -->
                    </div>
                </div>
                <?php echo form_open('sipema/guardar_reg/','id="form-reg"') ?>
                <div id="error" class="col-md-12"></div>
                <input type="hidden" name="hdn_id_subprograma" value="<?php echo $idsubprograma ?>" />
                <div class="row setup-content" id="step-1">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Antecedentes</label>
                                    <textarea name="txt_antecedentes" cols="30" rows="3" class="form-control" required="required" autofocus ></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Resultados obtenidos en el ejercicio anterior</label>
                                    <textarea name="txt_result_obt" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Justificación</label>
                                    <textarea name="txt_justificacion" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Fundamento legal</label>
                                    <textarea name="txt_fundamento_legal" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Descripción del problema</label>
                                    <textarea name="txt_desc_prob" cols="30" rows="3" class="form-control" required="required"></textarea>

                                </div>
                                <div class="form-group">
                                    <label class="control-label">Objetivo general (En relación al MIR)</label>
                                    <textarea name="txt_obj_gral" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Objetivo específico (En relación al MIR)</label>
                                    <textarea name="txt_obj_esp" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>

                                <div class="">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label class="control-label">Fecha de Inicio</label>
                                                <div id="datepicker">
                                                    <input name="dte_fecha_ini" type="text" class="form-control datepicker" id="inp-fechaini" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label class="control-label">Fecha de Fin</label>
                                                <div id="datepicker">
                                                    <input name="dte_fecha_fin" type="text" class="form-control datepicker" id="inp-fechafin" required="required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Situación actual</label>
                                    <textarea name="txt_sit_actual" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Estrategias</label>
                                    <textarea name="txt_estrategias" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Situación esperada</label>
                                    <textarea name="txt_sit_esperada" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Líneas de acción</label>
                                    <textarea name="txt_lineas_accion" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Cobertura</label>
                                    <textarea name="txt_cobertura" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Población beneficiada</label>
                                    <textarea name="txt_poblacion_bene" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Población objetivo</label>
                                    <textarea name="txt_poblacion_obj" cols="30" rows="3" class="form-control" required="required"></textarea>

                                </div>
                                <div class="form-group">
                                    <label class="control-label">Características de la población</label>
                                    <textarea name="txt_carac_poblacion" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table thead-default">
                                    <thead>
                                        <tr>
                                            <th rowspan="2"></th>
                                            <th colspan="6">Edades</th>
                                        </tr>
                                        <tr>
                                            <th>Prenatal <br>(0 - 3 años)</th>
                                            <th>Niños <br>(hasta 12 años)</th>
                                            <th>Adolescentes <br>(hasta 18 años)</th>
                                            <th>Jóvenes <br>(hasta 29 años)</th>
                                            <th>Adultos <br>(hasta 59 años)</th>
                                            <th>Adultos mayores <br>(60 años o más)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Hombres</th>
                                            <td id="td-pre" class="col-md-2"><input type="text" name="int_prenatal_h" class="form-control"></td>
                                            <td id="td-nin" class="col-md-2"><input type="text" name="int_ninos_h" class="form-control"></td>
                                            <td id="td-adol" class="col-md-2"><input type="text" name="int_adolcesc_h" class="form-control"></td>
                                            <td id="td-jov" class="col-md-2"><input type="text" name="int_joven_h" class="form-control"></td>
                                            <td id="td-adul" class="col-md-2"><input type="text" name="int_adulto_h" class="form-control"></td>
                                            <td id="td-may" class="col-md-2"><input type="text" name="int_mayor_h" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Mujeres</th>
                                            <td id="td-pre" class="col-md-2"><input type="text" name="int_prenatal_m" class="form-control"></td>
                                            <td id="td-nin" class="col-md-2"><input type="text" name="int_ninos_m" class="form-control"></td>
                                            <td id="td-adol" class="col-md-2"><input type="text" name="int_adolcesc_m" class="form-control"></td>
                                            <td id="td-jov" class="col-md-2"><input type="text" name="int_joven_m" class="form-control"></td>
                                            <td id="td-adul" class="col-md-2"><input type="text" name="int_adulto_m" class="form-control"></td>
                                            <td id="td-may" class="col-md-2"><input type="text" name="int_mayor_m" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td><span id="td-pre-s">0</span></td>
                                            <td><span id="td-nin-s">0</span></td>
                                            <td><span id="td-adol-s">0</span></td>
                                            <td><span id="td-jov-s">0</span></td>
                                            <td><span id="td-adul-s">0</span></td>
                                            <td><span id="td-may-s">0</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Impacto social</label>
                                    <textarea name="txt_impacto_soc" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-4">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Monto del presupuesto</label>
                                    <input type="text" name="dbl_monto_pres" required="required" class="form-control decimal"  />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Fuente del financiamiento</label>
                                    <input name="dbl_fuente_fin" type="text" required="required" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table thead-default">
                                        <thead>
                                            <tr><th></th>
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
                                                <th>Monto</th>
                                                <td id="td-month"><input type="text" name="int_ene" class="form-control"></td>
                                                <td id="td-month"><input type="text" name="int_feb" class="form-control"></td>
                                                <td id="td-month"><input type="text" name="int_mar" class="form-control"></td>
                                                <td id="td-month"><input type="text" name="int_abr" class="form-control"></td>
                                                <td id="td-month"><input type="text" name="int_may" class="form-control"></td>
                                                <td id="td-month"><input type="text" name="int_jun" class="form-control"></td>
                                                <td id="td-month"><input type="text" name="int_jul" class="form-control"></td>
                                                <td id="td-month"><input type="text" name="int_ago" class="form-control"></td>
                                                <td id="td-month"><input type="text" name="int_sep" class="form-control"></td>
                                                <td id="td-month"><input type="text" name="int_oct" class="form-control"></td>
                                                <td id="td-month"><input type="text" name="int_nov" class="form-control"></td>
                                                <td id="td-month"><input type="text" name="int_dic" class="form-control"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Total <i class="fa fa-usd" aria-hidden="true"></i></label><label class="control-label" id="td-month-s"> 0</label>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-5">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nombre del indicador</label>
                                    <input type="text" name="str_nom_indicador" required="required" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Unidad de medida</label>
                                    <select name="sel_unidad_medida" class="form-control"><option>Selecciona</option></select>
                                    <!-- <input type="text"  required="required" class="form-control" /> -->
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Periodo de verificación</label>
                                    <input type="text" name="str_periodo_verif" required="required" class="form-control" />
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label class="control-label">Fórmula</label>
                                    <input type="text" name="str_formula" required="required" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Meta</label>
                                    <input type="text" name="str_meta" required="required" class="form-control" />
                                </div>
                                <table class="table thead-default">
                                    <thead>
                                        <tr>
                                            <th>No. Periodo</th>
                                            <th>Programado</th>
                                            <th>Realizado</th>
                                            <th>Semaforo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-xs-3"><input type="text" name="int_num_periodo" class="form-control"></td>
                                            <td class="col-xs-3"><select name="sel_programado" class="form-control"><option>Selecciona</option></select></td>
                                            <td class="col-xs-3"><select name="sel_realizado" class="form-control"><option>Selecciona</option></select></td>
                                            <td class="col-xs-3"><select name="sel_semaforo" class="form-control"><option>Selecciona</option></select></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <button type="submit" class="btn btn-success nextBtn pull-right" id="btn-send-form">Guardar información</button>
                                <!-- <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-angle-double-right" aria-hidden="true"></i></button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row setup-content" id="step-6">
                    <button type="submit" class="btn btn-success" id="btn-send-form">Guardar información</button>
                </div> -->
                <?php echo form_close() ?>
            </div>
        </div> 
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function ()
    {
        $('table tbody tr td input').keyup(function ()
        {
            this.value = (this.value + '').replace(/[^0-9]/g, '');
        }).on('change', function ()
        {
            var tot_pre = 0;
            var input = $('#' + $(this).parents().attr('id') + ' input');
            for (var i = 0; i < input.length; i++)
            {
                tot_pre += parseInt((input[i].value === '') ? '0' : input[i].value);
            }
            $('#' + $(this).parents().attr('id') + '-s').text(tot_pre);
        });
        $('.decimal').keyup(function ()
        {
            this.value = (this.value + '').replace(/[^0-9-.]/g, '');
        });
    });
</script>
<script type="text/javascript">
//    $(document).ready(function () {
//        $("tr input[type='button']").on("click", function (evt) {
//            var num = prompt('Introduzca cantidad:', '1');
//            while (parseInt(num) !== num) {
//                num = prompt('Introduzca cantidad', '1');
//            }
//            $(this).val(num);
//        });
//    });
</script>
<script type="text/javascript">
    $(document).ready(function ()
    {
        $('.form-group .form-control').on('blur', function ()
        {
            $(this).closest('.form-group').removeClass('has-error').removeClass('has-feedback');
            $(this).closest('.form-group').find('span').remove();
            if ($(this).val().trim() === "")
            {
                $(this).closest('.form-group')
                        .addClass('has-error')
                        .addClass('has-feedback');
                $(this).after('<span class="fa fa-info-circle form-control-feedback" aria-hidden="true"></span>');
            }
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
                //$target.find('textarea:eq(0)').focus();
            }
        });
        allNextBtn.click(function ()
        {
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'], textarea"),
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






