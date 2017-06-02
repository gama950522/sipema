<div class="container">
    <h2 class="page-header text-center">BENEFICIO</h2>
    <div class="col-md-12">
        <div class="row" id="error" ></div>
    </div>
    <?php echo form_open('sipema/okii/', 'id="form-reg"'); ?>
        <div class="col-md-12">
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
            <button class="btn btn-primary nextBtn pull-right" type="submit" >Guardar &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </div>
    <?php echo form_close(); ?>
</div>  