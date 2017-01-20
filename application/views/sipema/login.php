
<!-- Navigation bar ends -->
<section class="container ">

    <form class="form-signin" method="POST" action="<?php echo site_url('index.php/authentication/inicio_sesion/') ?>" accept-charset="utf-8">
        <h2 class="page-header">Inroduce tus datos</h2>
        <div id="error"></div>
        <div class="form-group">
            <label for="inp_username" class="control-label">Nombre de usuario</label>
            <input type="text" name="inp_username" class="form-control">

            <label for="psw_password" class="control-label">Contraseña</label>
            <input type="password" name="psw_password" class="form-control">

            <button type="submit" id="btn-entrar" class="btn btn-primary pull-right" ><i class="fa fa-user" aria-hidden="true"></i> Entrar</button>
        </div>

    </form>

    <a href="<?php echo site_url('index.php/welcome/mir'); ?>">OK</a>
</section>


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
