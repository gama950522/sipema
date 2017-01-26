<!-- Site footer -->
<footer class="footer">
    <p>&copy; 2016 Company, Inc.</p>
</footer>

</div> <!-- /container -->

<script src="<?php echo site_url('assets/dist/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo site_url('assets/dist/datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
<script src="<?php echo site_url('assets/dist/datepicker/locales/bootstrap-datepicker.es.min.js') ?>"></script>
<script src="<?php echo site_url('assets/dist/waitme/waitMe.min.js') ?>"></script>

<script>
    $("#datepicker input").datepicker({
        format: 'mm-dd-yyyy',
        language: "es"
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('form').on('submit', function (evt) {
            evt.preventDefault();
            //alert($(this).serialize());
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                async: true,
                timeout: 4000,
                beforeSend: function (xhr) {
                    run_waitMe('roundBounce');
                },
                success: function (data, textStatus, jqXHR) {
                    setTimeout(function () {
                        // if (!data.success) 
                        // {
                        //     $('.bs-example-modal-sm').modal('show');
                        // }
                        $('body').waitMe('hide');
                    }, 4000);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            });
        }).keypress(function (e) {
            if (e.which === 13) {
                //alert('Antes de enviar la información llena todos los campos');
                return false;
            }
        });
    });


     function run_waitMe(effect) {
            $('body').waitMe({
                effect: effect,
                text: 'Espere un momento por favor',
                bg: 'rgba(0,0,0,0.7)',
                color: '#fff',
                sizeW: '',
                sizeH: '',
                source: '',
                onClose: function () {}
            });
        }
</script>
<script>
    //$('#waitMe_ex3').waitMe('hide');
    $(function () {

        $('#btn-send-form').click(function () {
            
        });

       

    });
</script>
</body>
</html>
