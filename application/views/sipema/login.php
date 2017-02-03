<div class="main">
    <div class="login-form">
        <h1>Ingresa tus datos</h1>
        <div class="head">
            <img src="<?php echo site_url('public/images/default.jpg') ?>" alt=""/>
        </div>
        <?php echo form_open('login/inicio_sesion/'); ?>
        <div id="error"></div>
            <div class="form-group">
                <label for="inp_username" class="control-label">Nombre de usuario</label>
                <input type="text" class="form-control" name="inp_username" />
            </div>
            <div class="form-group">
                <label for="psw_password" class="control-label">Contraseña</label>
                <input type="password" class="form-control" name="psw_password" />
            </div>
            <div class="form-group">
                <button type="submit" id="btn-entrar" class="btn btn-primary" >Entrar</button>
                <a href="<?php echo site_url('sipema/'); ?>">OK</a>
            </div>  

        <?php echo form_close(); ?>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $("form").on("submit", function () {
            //alert($(this).serialize());
            $.ajax({

                url: $(this).attr("action"),
                type: $(this).attr("method"),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function () {
                    $("#error").fadeOut();
                    $("#btn-entrar").attr("disabled", true);
                    $("#btn-entrar").html('<i class="fa fa-spinner fa-pulse fa-fw"></i>');
                },
                success: function (res) {
                    if (res.action) {
                        $("#btn-entrar").html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Entrando...');
                        setTimeout(function() {
                            window.location.href = res.href;
                        }, 1000);
                        //console.log(e);
                    } else {
                        
                        $("#error").fadeIn(100,function () {
                            $("#btn-entrar").html('<i class="fa fa-user" aria-hidden="true"></i> Entrar');
                            $("#btn-entrar").attr("disabled", false);
                            $("#error").html('<div class="alert alert-danger alert-dismissible" role="alert">'+
                                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                             '<span aria-hidden="true">&times;</span></button> '+
                                             '<span class="glyphicon glyphicon-info-sign"></span> '+
                                             '&nbsp; Usuario o contraseña mal escritos!</div>');
                        });
                 
                    }
                },
                error: function () {
                    alert("Error del sistema, cominiquese con el administrador!");
                    $("#btn-entrar").html('<i class="fa fa-user" aria-hidden="true"></i> Entrar');
                            $("#btn-entrar").attr("disabled", false);
                }
            });
            return false;

        });
    });

    function validator(argument) {

    }
</script>
