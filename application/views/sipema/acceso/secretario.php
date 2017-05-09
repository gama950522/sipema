 
<div class="container-fluid">

    <div class="col-md-6 col-md-offset-3">

        <div class="alert alert-info" role="alert">
            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
        </div>

        <div class="form-group">
            <label for="">Programa</label>
            <select id="" class="form-control">
                <option value="">-Selecciona-</option>
                <?php foreach ($programa as $value): ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['clave'] . ' ' . $value['nombre'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Subprograma</label>
            <select name="" class="form-control">
                <option value="">Selecciona</option>
            </select>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group" id="datepicker">

                    <label for="">Fecha</label>
                    <input type="text" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group" id="datepicker">
                    <label for="">Fecha</label>
                    <input type="text" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">

            <button type="button" class="btn btn-default btn-block"><i class="fa fa-print"></i>Imprimir</button>
        </div>
    </div>
</div>
