	 <!-- Site footer -->
            <footer class="footer">
                <p>&copy; 2016 Company, Inc.</p>
            </footer>

        </div> <!-- /container -->
	<script src="<?php echo site_url('assets/dist/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo site_url('assets/dist/datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
	<script src="<?php echo site_url('assets/dist/datepicker/locales/bootstrap-datepicker.es.min.js') ?>"></script>
	<script>
    $("#datepicker input").datepicker({
                    format: 'mm-dd-yyyy',
                    language: "es"
    });

</script>
    </body>
</html>
