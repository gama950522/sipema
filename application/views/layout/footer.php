<!-- Site footer -->
<footer class="footer">
    <!-- <p>&copy; 2016 Company, Inc.</p> -->
</footer>

</div> <!-- /container -->

<script src="<?php echo site_url('assets/dist/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo site_url('assets/dist/datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
<script src="<?php echo site_url('assets/dist/datepicker/locales/bootstrap-datepicker.es.min.js') ?>"></script>
<script src="<?php echo site_url('assets/dist/waitme/waitMe.min.js') ?>"></script>

<script>
    $("#datepicker input").datepicker({
        format: 'yyyy-mm-dd',
        language: "es"
    });
</script>
<script type="text/javascript">
    $(document).ready(function ()
    {
        $('.form-group .form-control').on('blur', function ()
        {
            $(this).closest('.form-group').removeClass('has-error').removeClass('has-feedback');
            $(this).closest('.form-group').find('span').remove();
            if ($(this).val().trim() === "")
            {
                $(this).closest('.form-group')
                        .addClass('has-error')
                        .addClass('has-feedback');
                $(this).after('<span class="fa fa-info-circle form-control-feedback" aria-hidden="true"></span>');
            }
        }).on('focus', function ()
        {
            $(this).closest('.form-group').removeClass('has-error').removeClass('has-feedback');
            $(this).closest('.form-group').find('span').remove();
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function ()
    {
        $('form').on('submit', function (evt)
        {
            if ($(this).attr('id') === 'form-reg')
            {
                evt.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: $(this).serialize(),
                    dataType: 'json',
                    async: true,
                    timeout: 4000,
                    beforeSend: function (xhr)
                    {
                        run_waitMe('roundBounce');
                    },
                    success: function (data, textStatus, jqXHR)
                    {
                        setTimeout(function ()
                        {
                            if (data.success)
                            {
                                window.location = data.url;
                            }
                            else
                            {
                                alert('Algo no salió bien intentalo mas tarde');
                                $(this).reset();
                                $('body').waitMe('hide');
                                console.log(data);
                            }
                            //console.log(data.values);
                        }, 4000);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                        $('body').waitMe('hide');
                    }
                });
            }
        });
        // .keypress(function (e) {
        //     if (e.which === 13) {
        //         //alert('Antes de enviar la información llena todos los campos');
        //         return false;
        //     }
        // });
    });


    function run_waitMe(effect)
    {
        $('body').waitMe({
            effect: effect,
            text: 'Espere un momento por favor',
            bg: 'rgba(0,0,0,0.7)',
            color: '#fff',
            sizeW: '',
            sizeH: '',
            source: '',
            onClose: function ()
            {}
        });
    }
</script>
<script>
    //$('#waitMe_ex3').waitMe('hide');
    $(document).ready(function ()
    {

        // $('input').on('focus', function () {
        //     $('.form-group').removeClass('has-error').removeClass('has-feedback');
        //     $('.form-group').find('span').remove();
        // });
    });
</script>
</body>
</html>
