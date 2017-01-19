

<?php
$attr_inp_username = array('class' => 'form-control', 'id' => 'inp_username', 'placeholder' => 'Nombre de usuario');
$attr_psw_password = array('class' => 'form-control', 'id' => 'psw_password', 'placeholder' => 'Contraseña');
?>
<section class="col-md-12" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-4">
            <div class="page-header bg-success">
                <h2 class="text-center">Cambio climatico</h2>
            </div>
            <!-- <img src="<?php echo site_url('public/images/climatico.jpg'); ?>" class="img-responsive"> -->
        </div>
        <div class="col-md-8">
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
        </div>
    </div>

</section>
<div class="" style="display: block;">a</div>


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
                <?php
                echo '<div class="form-group">';
                echo form_label('Nombre de usuario', 'inp_username', array('class' => 'sr-only'));
                echo form_input('inp_username', NULL, $attr_inp_username);
                echo '</div>';

                echo '<div class="form-group">';
                echo form_label('Contraseña', 'psw_password', array('class' => 'sr-only'));
                echo form_password('psw_password', NULL, $attr_psw_password);
                echo '</div>';
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <?php
                echo form_submit('sub_enviar', 'Entrar', array('class' => 'btn btn-primary'));
                ?>
                <a href="<?php echo site_url('index.php/welcome/division/8/') ?>">Next</a>
            </div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>


