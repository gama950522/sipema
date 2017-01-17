<?php
$attr_inp_username = array('class'=>'form-control','id'=>'inp_username','placeholder'=>'Nombre de usuario');
$attr_psw_password = array('class'=>'form-control','id'=>'psw_password','placeholder'=>'Contraseña');

?>
<!-- Navigation bar ends -->
<section class="container ">

    
    <?php
    echo form_open('', array('class'=>'form-signin'));
    echo heading('Introduce tus datos', '2');
    
    echo form_label('Nombre de usuario', 'inp_username', array('class'=>'sr-only'));
    echo form_input('inp_username', NULL, $attr_inp_username);
    
    echo form_label('Contraseña','psw_password',array('class'=>'sr-only'));
    echo form_password('psw_password', NULL, $attr_psw_password);
    
    echo form_submit('sub_enviar', 'Entrar', array('class'=>'btn btn-lg btn-primary btn-block'));
    
    echo form_close();
    ?>
    <a href="<?php echo site_url('index.php/welcome/mir'); ?>">OK</a>
</section>
