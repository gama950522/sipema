
<div id="registro">
    <div>
        <label for="">Nombre completo</label>
        <input type="text" placeholder="Ing">
        <input type="text" placeholder="Nombre">
        <input type="text" placeholder="Segundo nombre (opcional)">
        <input type="text" placeholder="Apellido paterno">
        <input type="text" placeholder="Apellido materno">
    </div>
    <div>
        <label for="">Nivel de acceso</label>
        <select name="" id="ddl_nivel_acceso">
            <option value="">-Selecciona-</option>
            <?php foreach ($perfiles as $item): ?>
                <option value="<?php echo $item['id'] ?>"><?php echo $item['nombre'] ?></option>
            <?php endforeach ?>
        </select>

    </div>
    <div id="complemento">
        
    </div>
    
</div>
<script>
    $(document).on('ready',function () {
        $('#ddl_nivel_acceso').on('change', function () {
            $('#complemento').html(append_html($(this), $(this).val()));
        });
        $('#complemento#ddl_programa').on('change', function() {
            
            /* Act on the event */
        });
    });

    function append_html(el, value) 
    {
        $.get("<?php echo site_url('usuarios/html') ?>/" + value, function(data) {
            $('#complemento').html(data);
        });
    }
</script>


