
			<!-- Bootstrap core JavaScript-->
			<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
			<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
			<!-- Core plugin JavaScript-->
			<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
			<!-- Custom scripts for all pages-->
			<script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
			<!-- Bootstrap core JavaScript-->
			<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
			<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
			<!-- Core plugin JavaScript-->
			<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
			<!-- Custom scripts for all pages-->
			<script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
			<!-- Bootstrap core JavaScript-->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<!-- Core plugin JavaScript-->
			<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

			<!-- Page level plugins -->
			<script src="<?= base_url('assets/chart.js/Chart.min.js'); ?>"></script>
			<script src="<?= base_url('assets/js/demo/chart-bar-demo.js'); ?>"></script>
			<script src="<?= base_url('assets/js/chart-ralan.js'); ?>"></script>
			<script src="<?= base_url('assets/js/chart-ranap.js'); ?>"></script>
			<script src="<?= base_url('assets/js/chart-igd.js'); ?>"></script>
			<script>
				const base_url = "/sadewa-survey/";
				$(document).ready(function() {
					$('#tabelsurvey').DataTable({
						dom: 'Bfrtip',
						buttons: [
							'excel', 'print'
						]
					});
				});
			</script>
			</body>
			</html>