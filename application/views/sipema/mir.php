
<!-- Navigation bar ends -->
<section class="container ">
    <div class="page-header jumbotron">
        <h1 class="text-center">Sistema de planeación y evaluacion  para el medio ambiente</h1>
    </div>
    <div class="row">
        <div class="col-md-10">
            <select class="form-control input-lg" id="sel-cat">
                <option>Selecciona una categoría</option>
                <option value="1">1. Manejo industrial de residuos sólidos</option>
                <option value="2">2. Areas naturales protegidas</option>
                <option value="3">3. Prevencion y control de la contaminación</option>
                <option value="4">4. Procuracion y acceso a la juasticia ambiental</option>
                <option value="5">5. Desarrollo forestal</option>
                <option value="6">6. Atencion y apoyo en (no entendí)</option>
                <option value="7">7. Planeacion e instrumentación de politica ambiental</option>
                <option value="8">8. Cambio climatico</option>
                <option value="9">9. Biodiversidad y vida silvestre</option>
                <option value="10">10. Gestión de la calidad del aire</option>
            </select>
        </div>
        <div class="col-md-2">
            <a href="#" class="btn btn-primary btn-lg btn-block" id="enlace">Siguiente</a>
        </div>
        <div id="message"></div>
    </div>
</section>


<script>
$(document).ready(function() {
    $("select").on("change", function() {
        var cat = document.getElementById('sel-cat').value;
        document.getElementById("enlace").href = "<?php echo site_url('index.php/welcome/sipema/'); ?>"+cat;
        
    });

});
</script>
