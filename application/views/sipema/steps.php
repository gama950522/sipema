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
                        <div class="stepwizard-step">
                            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                            <p>Programación mensual</p>
                        </div>
                    </div>
                </div>
                <?php echo form_open('sipema/guardar_reg/') ?>
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
                                    <label class="control-label">Descripcion del problema</label>
                                    <textarea name="txt_desc_prob" cols="30" rows="3" class="form-control" required="required"></textarea>

                                </div>
                                <div class="form-group">
                                    <label class="control-label">Objetivo general (En relacion al MIR)</label>
                                    <textarea name="txt_obj_gral" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Objetivo específico (En relacion al MIR)</label>
                                    <textarea name="txt_obj_esp" cols="30" rows="3" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="control-label">Fecha de Inicio</label>
                                            <div id="datepicker">
                                                <input name="dte_fechaini" type="text" class="form-control datepicker" id="inp-fechaini">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="control-label">Fecha de Fin</label>
                                            <div id="datepicker">
                                                <input name="dte_fecha_fin" type="text" class="form-control datepicker" id="inp-fechafin">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-caret-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Situacion actual</label>
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
                                    <label class="control-label">Situacion esperada</label>
                                    <textarea name="txt_sit_esperada" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Lineas de accion</label>
                                    <textarea name="txt_lineas_accion" cols="30" rows="3" class="form-control" required="required"></textarea>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-caret-right" aria-hidden="true"></i></button>
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
                                    <textarea name="txt_cobertura" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Población beneficiada</label>
                                    <input type="text" name="txt_poblacion_bene" required="required" class="form-control" />
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Población objetivo</label>
                                    <textarea name="txt_poblacion_obj" cols="30" rows="3" class="form-control"></textarea>

                                </div>
                                <div class="form-group">
                                    <label class="control-label">Caracteristicas de la poblacion</label>
                                    <textarea name="txt_carac_poblacion" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
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
                                            <td id="td-pre" class="col-md-2"><input type="text" name="txt_prenatal_h" class="form-control"></td>
                                            <td id="td-nin" class="col-md-2"><input type="text" name="txt_ninos_h" class="form-control"></td>
                                            <td id="td-adol" class="col-md-2"><input type="text" name="txt_adolcesc_h" class="form-control"></td>
                                            <td id="td-jov" class="col-md-2"><input type="text" name="txt_joven_h" class="form-control"></td>
                                            <td id="td-adul" class="col-md-2"><input type="text" name="txt_adulto_h" class="form-control"></td>
                                            <td id="td-may" class="col-md-2"><input type="text" name="txt_mayor_h" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Mujeres</th>
                                            <td id="td-pre" class="col-md-2"><input type="text" name="txt_prenatal_m" class="form-control"></td>
                                            <td id="td-nin" class="col-md-2"><input type="text" name="txt_ninos_m" class="form-control"></td>
                                            <td id="td-adol" class="col-md-2"><input type="text" name="txt_adolcesc_m" class="form-control"></td>
                                            <td id="td-jov" class="col-md-2"><input type="text" name="txt_joven_m" class="form-control"></td>
                                            <td id="td-adul" class="col-md-2"><input type="text" name="txt_adulto_m" class="form-control"></td>
                                            <td id="td-may" class="col-md-2"><input type="text" name="txt_mayor_m" class="form-control"></td>
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
                        <div class="col-md-6 col-md-offset-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Impacto social</label>
                                    <input name="txt_impacto_soc" maxlength="200" type="text" required="required" class="form-control" />
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-caret-right" aria-hidden="true"></i></button>
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
                                    <input maxlength="200" type="text" required="required" class="form-control"  />
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Fuente del financiamiento</label>
                                    <input maxlength="200" type="text" required="required" class="form-control" />
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
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Total</label>
                                    <output  class="form-control"/>

                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-caret-right" aria-hidden="true"></i></button>

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
                                    <input maxlength="200" type="text" required="required" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Unidad de medida</label>
                                    <input maxlength="200" type="text" required="required" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Periodo de verificacion</label>
                                    <input maxlength="200" type="text" required="required" class="form-control" />
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label class="control-label">Fórmula</label>
                                    <input maxlength="200" type="text" required="required" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Meta</label>
                                    <input maxlength="200" type="text" required="required" class="form-control" />
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
                                        <tr></tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-caret-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-6">
                    <button type="submit" class="btn btn-success" id="btn-send-form">Enviar formulario</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div> 
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('form').on('submit', function (evt) {
            evt.preventDefault();
            alert($(this).serialize());
        }).keypress(function (e) {
            if (e.which == 13) {
                alert('Antes de enviar la información llena todos los campos');
                return false;
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('table tbody tr td input').keyup(function () {
            this.value = (this.value + '').replace(/[^0-9]/g, '');
        }).on('change', function () {
            var tot_pre = 0;
            var input = $("#" + $(this).parents().attr('id') + " input");
            for (var i = 0; i < input.length; i++) {
                tot_pre += parseInt((input[i].value == '') ? '0' : input[i].value);
            }
            $("#" + $(this).parents().attr('id') + "-s").text(tot_pre);
        });
    })
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("tr input[type='button']").on("click", function (evt) {
            var num = prompt('Introduzca cantidad:', '1');
            while (parseInt(num) != num) {
                num = prompt('Introduzca cantidad', '1');
            }
            $(this).val(num);
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.form-group .form-control').on('blur', function () {
            $(this).closest('.form-group').removeClass('has-error').removeClass('has-feedback');
            $(this).closest('.form-group').find('span').remove();
            if ($(this).val().trim() === "") {
                $(this).closest('.form-group')
                .addClass('has-error')
                .addClass('has-feedback');
                $(this).after('<span class="fa fa-info-circle form-control-feedback" aria-hidden="true"></span>');
            }
        });
    });
</script>
<script type="text/javascript">

    $(document).ready(function () {
        var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);
            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('textarea:eq(0)').focus();
            }
        });
        allNextBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'], textarea"),
                    isValid = true;
            $(".form-group").removeClass('has-error').removeClass('has-feedback');
            $('.form-group').find('span').remove();
            for (var i = 0; i < curInputs.length; i++) {
                //if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest('.form-group')
                    .addClass('has-error')
                    .addClass('has-feedback');
                    $(curInputs[i]).after('<span class="fa fa-info-circle form-control-feedback" aria-hidden="true"></span>');
                    //$(curInputs[i]).closest(".form-group").addClass("has-error");
                //}
            }
            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
            else
                alert('Llena todos los campos');
        });
        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>






