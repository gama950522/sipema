<div class="main">
    <div class="login-form">
        <h1>Ingresa tus datos</h1>
        <div class="head">
            <img src="<?php echo site_url('public/images/default.jpg') ?>" alt=""/>
        </div>
        <?php echo form_open('authentication/inicio_sesion/'); ?>
            <div class="form-group">
                <label for="inp_username" class="control-label">Nombre de usuario</label>
                <input type="text" class="form-control" />

            </div>
            <div class="form-group">
                <label for="psw_password" class="control-label">Contraseña</label>

                <input type="password" class="form-control" />
            </div>
            <div class="form-group">
                <button type="submit" id="btn-entrar" class="btn btn-primary" ><i class="fa fa-user" aria-hidden="true"></i> Entrar</button>
            </div>	

        <?php echo form_close(); ?>
        <a href="<?php echo site_url('welcome/mir'); ?>">OK</a>
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
                success: function (e) {
                    if (e.action == true) {
                        $("#btn-entrar").html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Entrando...');
                        //setTimeout(' window.location.href = "home.php"; ', 4000);
                        console.log(e);
                    } else {
                        //
                        $("#error").fadeIn(1000, function () {
                            $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Loser !</div>');
                            $("#btn-entrar").html('<i class="fa fa-user" aria-hidden="true"></i> Entrar');
                            $("#btn-entrar").attr("disabled", false);
                        });
                    }
                },
                error: function () {
                    alert("Error del sistema, cominiquese con el administrador!");
                }
            });
            return false;

        });
    });

    function validator(argument) {

    }
</script>
