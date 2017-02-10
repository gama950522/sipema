
<section class="col-md-12" style="margin-top: 20px">
    <div class="row">
    <table class="table-normal">
        <tbody>
            <tr>
                <td class="col-md-4 ">
                    <div class="list-group">
                        <h2 class=" list-group-item text-center"><?php echo $categoria->nombre; ?></h2>
                    </div>
                </td>
                <td class="col-md-8">
                <div class="row">
                    
                    <div class="list-group">
                        <?php foreach($info as $item): ?>
                            <a href="#" class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm">
                                <h4 class="list-group-item-heading"><?php echo $item['nombre']; ?></h4>
                                <p class="list-group-item-text"><?php echo $item['descripcion']; ?></p>
                            </a>
                        <?php endforeach; ?>
                        <!-- <a href="#" class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm">
                            <h4 class="list-group-item-heading">Programa estatal de acción ante el cambio climático</h4>
                            <p class="list-group-item-text">Descripción</p>
                        </a>
                        <a href="#" class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm">
                            <h4 class="list-group-item-heading">Agenda esatatal e internacional para la gestión ambiental implemantada</h4>
                            <p class="list-group-item-text">Descripción</p>
                        </a>
                        <a href="#" class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm">
                            <h4 class="list-group-item-heading">Mitigación ante el cambio climático</h4>
                            <p class="list-group-item-text">Descripción</p>
                        </a>
                        <a href="#" class="list-group-item active" data-toggle="modal" data-target=".bs-example-modal-sm">
                            <h4 class="list-group-item-heading">Programas municipales de acción ante el cambio climático</h4>
                            <p class="list-group-item-text">Descripción</p>
                        </a> -->
                    </div>
                </div>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</section>
<div class="clearfix"></div>


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <?php
        echo form_open('sipema/programa/', array('class' => 'form-signin', 'id'=>'frm-check-user'));
        ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title">Introduce tus datos</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label class="control-label">Usuario</label>
                    <input type="text" name="str_username" class="form-control" />

                </div>

                <div class="form-group">
                    <label class="control-label">Contraseña</label>
                    <input type="password" name="psw_password" class="form-control" />
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Validar</button>
                <a href="<?php echo site_url('sipema/programa/5'); ?>">...</a>
            </div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>


<script type="text/javascript">
    // $(document).ready(function () {
    //     $('#frm-check-user').on('submit', function(event) {
    //         event.preventDefault();
    //         //alert('hola');
            
    //         $.ajax({
    //             url: $(this).attr('action'),
    //             type: $(this).attr('method'),
    //             dataType: 'json',
    //             data: $(this).serialize(),
    //             beforeSend:function(){
    //             },
    //             success:function (data) {
    //                 console.log(data);
    //             },
    //             error:function () {
                    
    //             }
    //         });
            
    //     });
    // });
</script>