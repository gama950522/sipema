<div class="container">
    <h2 class="page-header text-center">CARTA DESCRIPTIVA</h2>
    <?php if ($registro !== ''): ?>
        <div class="col-md-2 col-md-offset-5">
            <div class="form-group">
                <label for="ddl_year" class="control-label">Elije un año</label>
                <select id="ddl_year" class="form-control">
                    <?php for ($i = date('Y'); $i >= 2015; $i--): ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php endfor ?>
                </select>
            </div>
        </div>
    <?php endif ?>
    <div class="col-md-12">
        <div class="row" id="error" ></div>
    </div>
    <?php echo form_open('sipema/okii/', 'id="form-reg"'); ?>
    <div class="col-md-12 setup-content">
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
                    <!-- <input type="text" id="str_area_responsable"  value="" readonly="true" > -->
                    <output class="form-control">Dirección Generál de Administración y Finanzas</output>
                </div>
                <div class="form-group">
                    <label for="str_titular" class="control-label">Titular</label>
                    <!-- <input type="text" id="str_titular" class="form-control" value="" readonly="true"> -->
                    <output class="form-control">M. En A. Raquel Ramírez Vargas</output>
                </div>
                <div class="form-group">
                    <label for="str_responsable" class="control-label">Responsable</label>
                    <!-- <input type="text" id="str_responsable" class="form-control" value="M. R. H. Daniela López Hernández" readonly="true" > -->
                    <output class="form-control">M. R. H. Daniela López Hernández</output>
                </div>
                <div class="form-group" id="datepicker">
                    <label for="dte_priodo_ejec_fin" class="control-label">Periodo de ejecución (Termino)</label>
                    <!-- <div > -->
                    <input type="text" name="dte_priodo_ejec_fin" id="dte_priodo_ejec_fin" class="form-control" required="required">
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
        <input type="hidden" name="int_anio_reg" value="<?php echo date('Y') ?>" />
        <?php if ($registro === ''): ?>
            <button class="btn btn-primary btn-lg nextBtn pull-right" type="submit" >Guardar &nbsp;<i class="fa fa-save" aria-hidden="true"></i></button>
        <?php endif ?>
        <div class="clearfix"></div>
    </div>
    <?php echo form_close(); ?>
</div>

<script type="text/javascript">
    $(document).on('ready', function ()
    {

        set_values(<?php echo $registro === '' ? '{}' : $registro ?>, <?php echo date('Y') ?>);
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

        $('#ddl_year').on('change', function () {
            // set_values(function () {
            // 	$.get('<?php //echo base_url("sipema/get/")  ?>' + $(this).val(), function(json) {
            // 		data = json;
            // 	});
            // });
            $.post('<?php echo base_url("sipema/get/")  ?>', {year:  $(this).val()}, function(data) {
            	holi(data);
            }).success(function () {
            	
            }).fail(function () {
            	
            });
        });

        $('#datepicker input').on('change', function (event) {
            $(this).focus();
        });




    });

    function holi(json) {
    	console.log(json);
    }

    function set_values(data)
    {
        $('form input').each(function (index, el) {
        	if (! $(el).is('[type="hidden"]')) 
        	{
            	$(el).val('');
        	}
        });
        $.each(data, function (index, val) {
            $('#' + index).val(val).attr({
                readonly: 'readonly',
            });

        });
    }

    var form = document.querySelector('form');
    form.addEventListener('invalid', function (event) {
        event.preventDefault();
    }, true);
</script>