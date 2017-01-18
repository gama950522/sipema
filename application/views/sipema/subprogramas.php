

<?php
$attr_inp_username = array('class'=>'form-control','id'=>'inp_username','placeholder'=>'Nombre de usuario');
$attr_psw_password = array('class'=>'form-control','id'=>'psw_password','placeholder'=>'Contraseña');

?>
<section class="col-md-12" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header">
                <h2 class="text-center">Cambio climatico</h2>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">
        <div class="col-md-4"><button class="btn btn-success btn-block" data-toggle="modal" data-target=".bs-example-modal-sm">Algo</button></div>
        <div class="col-md-4"><button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-sm">Algo</button></div>
        <div class="col-md-4"><button class="btn btn-success btn-block" data-toggle="modal" data-target=".bs-example-modal-sm">Algo</button></div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4"><button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-sm">Algo</button></div>
        <div class="col-md-4"><button class="btn btn-success btn-block" data-toggle="modal" data-target=".bs-example-modal-sm">Algo</button></div>
        <div class="col-md-4"><button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-sm">Algo</button></div>
    </div>
</section>


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <?php
            echo form_open('', array('class' => 'form-signin'));
            ?>
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
            <?php
            echo form_close();
            ?>
        </div>
    </div>
</div>


