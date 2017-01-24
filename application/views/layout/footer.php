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

<script>
    //$('#waitMe_ex3').waitMe('hide');
    $(function () {

        $('#btn-send-form').click(function () {
            run_waitMe('roundBounce');
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

    });
</script>
</body>
</html>
