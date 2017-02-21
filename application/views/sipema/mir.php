
<!-- Navigation bar ends -->
<section class="container ">
    <div class="page-header jumbotron">
        <h1 class="text-center">Sistema de planeación y evaluación  para el medio ambiente</h1>
    </div>
    <div class="row">
        <div class="col-md-10 col-xs-10">
            <select class="form-control input-lg" id="sel-cat">
                <option>Selecciona una categoría</option>
                <?php $cont = 1; ?>
                <?php foreach ($fields as $row): ?>
                
                    <option value="<?php echo $row['id'] ?>"><?php echo $cont.'. '. $row['nombre'] ?></option>
                    <?php $cont++; ?>
                
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-2 col-xs-2">
            <a href="#" class="btn btn-primary btn-lg btn-block" id="enlace">Siguiente</a>
        </div>
    </div>
</section>
<input type="search" />
<a href="<?php echo site_url('login/destruir/'); ?>">CERRAR SESION</a>



<script>
    $(document).ready(function ()
    {
        $("select").on("change", function ()
        {
            var cat = document.getElementById('sel-cat').value;
            document.getElementById("enlace").href = "<?php echo site_url('sipema/categoria/'); ?>" + cat + "/";
        });

    });
</script>
