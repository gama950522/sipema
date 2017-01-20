
<div class="row">
    <div class="col-md-12" style="margin-top: 20px">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">
                    A continuación completa los datos del formulario
                </h1>
            </div>
            <div class="panel-body">
                <div class="stepwizard col-md-12">
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
                <form role="form" action="" method="post">
                    <div class="row setup-content" id="step-1">
                        <diw class="col-md-12">
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Antecedentes</label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" required="required" autofocus ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Resultados obtenidos en el ejercicio anterior</label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" required="required"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Justificación</label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" required="required"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Fundamento legal</label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" required="required"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Descripcion del problema</label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" required="required"></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Objetivo general (En relacion al MIR)</label>
                                        <textarea rows="3" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Objetivo específico (En relacion al MIR)</label>
                                        <textarea rows="3" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label class="control-label">Fecha de Inicio</label>
                                                <div id="datepicker">
                                                    <input type="text" class="form-control datepicker" id="inp-fechaini">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label class="control-label">Fecha de Fin</label>
                                                <div id="datepicker">
                                                    <input type="text" class="form-control datepicker" id="inp-fechafin">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente <i class="fa fa-caret-right" aria-hidden="true"></i></button>

                                </div>
                            </div>
                        </diw>
                    </div>
                    <div class="row setup-content" id="step-2">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Situacion actual</label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" required="required"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Estrategias</label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" required="required"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Situacion esperada</label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" required="required"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Lineas de accion</label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" required="required"></textarea>
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
                                        <input maxlength="200" type="text" required="required" class="form-control"  />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Población beneficiada</label>
                                        <input maxlength="200" type="text" required="required" class="form-control"   />
                                    </div>
                                </div>                            
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Población objetivo</label>
                                        <input maxlength="200" type="text" required="required" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Caracteristicas de la poblacion</label>
                                        <input maxlength="200" type="text" required="required" class="form-control"  />
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
                                                <td>5</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>8</td>
                                                <td>59</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <th>Mujeres</th>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>8</td>
                                                <td>59</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>8</td>
                                                <td>59</td>
                                                <td>1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Impacto social</label>
                                        <input maxlength="200" type="text" required="required" class="form-control" />
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
                </form>
            </div>
        </div> 
    </div>
</div>
<script type="text/javascript">
    /* validation */
    $("#login-form").validate({
        rules:
                {
                    password: {
                        required: true,
                    },
                    user_email: {
                        required: true,
                        email: true
                    }
                },
        messages:
                {
                    password: {
                        required: "please enter your password"
                    },
                    user_email: "please enter your email address"
                },
        submitHandler: submitForm
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
                $target.find('input:eq(0)').focus();
            }
        });
        allNextBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url'],textarea[textarea]"),
                    isValid = true;
            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });
        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>




