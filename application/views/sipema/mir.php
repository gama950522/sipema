
<!-- Navigation bar ends -->
<section class="container ">
    <div class="page-header jumbotron">
        <h1 class="text-center">Sistema de planeación y evaluación  para el medio ambiente</h1>
    </div>
    <div class="row">
        <div class="col-md-10 col-xs-10">
            <select class="form-control input-lg" id="sel-cat">
                <option>Selecciona una categoría</option>
                <option value="1">1. Manejo integral de residuos sólidos</option>
                <option value="2">2. Áreas naturales protegidas</option>
                <option value="3">3. Prevención y control de la contaminación</option>
                <option value="4">4. Procuración y acceso a la juasticia ambiental</option>
                <option value="5">5. Desarrollo forestal</option>
                <option value="6">6. Atención y apoyo en (no entendí)</option>
                <option value="7">7. Planeación e instrumentación de politica ambiental</option>
                <option value="8">8. Desarrollo sustentable</option>
                <option value="9">9. Cambio climático</option>
                <option value="10">10. Biodiversidad y vida silvestre</option>
                <option value="11">11. Gestión de la calidad del aire</option>
            </select>
        </div>
        <div class="col-md-2 col-xs-2">
            <a href="#" class="btn btn-primary btn-lg btn-block" id="enlace">Siguiente</a>
        </div>
    </div>
</section>

<a href="<?php echo site_url('login/destruir/'); ?>">DESTRUIR SESION</a>



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
