
<section class="col-md-12" style="margin-top: 20px">
    <div class="row">
    <table class="table-normal">
        <tbody>
            <tr>
                <td class="col-md-4 ">
                    <div class="list-group">
                        <h2 class=" list-group-item text-center">Cambio climatico</h2>
                    </div>
                </td>
                <td class="col-md-8">
                <div class="row">
                    
                    <div class="list-group">
                        <a href="#" class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm">
                            <h4 class="list-group-item-heading">Fondo ambiental y cambio climático</h4>
                            <p class="list-group-item-text">Descripción</p>
                        </a>
                        <a href="#" class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm">
                            <h4 class="list-group-item-heading">Programa estatal de accion ante el cambio climatico</h4>
                            <p class="list-group-item-text">Descripción</p>
                        </a>
                        <a href="#" class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm">
                            <h4 class="list-group-item-heading">Agenda esatatal e internacional para la gestión ambiental implemantada</h4>
                            <p class="list-group-item-text">Descripción</p>
                        </a>
                        <a href="#" class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm">
                            <h4 class="list-group-item-heading">Mitigacion ante el cambio climatico</h4>
                            <p class="list-group-item-text">Descripción</p>
                        </a>
                        <a href="#" class="list-group-item active" data-toggle="modal" data-target=".bs-example-modal-sm">
                            <h4 class="list-group-item-heading">Programas municipales de acciona nte el cambio climatico</h4>
                            <p class="list-group-item-text">Descripción</p>
                        </a>
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
        echo form_open('', array('class' => 'form-signin'));
        ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title">Introduce tus datos</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label class="control-label">Usuario</label>
                    <input type="text" class="form-control" />

                </div>

                <div class="form-group">
                    <label class="control-label">Contraseña</label>
                    <input type="password" class="form-control" />
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Verificar</button>
                <a href="<?php echo site_url('welcome/division/8/') ?>">Next</a>
            </div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>


