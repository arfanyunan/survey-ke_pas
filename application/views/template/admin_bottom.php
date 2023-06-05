			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a>

			<!-- Logout Modal-->
			<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content p-3">
						<div class="modal-body text-center">
							<h1 class="display-3 text-warning"><i class="fa fa-exclamation-circle"></i></h1>
							<h5>Keluar halaman Admin?</h5>
						</div>
						<div class="text-right">
							<button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">No</button>
							<a class="btn btn-info btn-sm" href="<?= base_url('/auth/logout') ?>">Yes</a>
						</div>
					</div>
				</div>
			</div>

            <!-- Bootstrap core JavaScript-->
			<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
			<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
			<!-- Core plugin JavaScript-->
			<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
			<!-- Custom scripts for all pages-->
			<script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
			<!-- DataTables -->
			<script src="<?= base_url('assets/datatables/DataTables-1.13.4/js/jquery.dataTables.min.js'); ?>"></script>
			<script src="<?= base_url('assets/datatables/Buttons-2.3.6/js/dataTables.buttons.min.js'); ?>"></script>
			<script src="<?= base_url('assets/datatables/Buttons-2.3.6/js/buttons.html5.min.js'); ?>"></script>
			<script src="<?= base_url('assets/js/ajax.js'); ?>"></script>

			<!-- Page level plugins -->
			<script src="<?= base_url('assets/chart.js/Chart.min.js'); ?>"></script>
			<script src="<?= base_url('assets/js/demo/chart-bar-demo.js'); ?>"></script>
			<script src="<?= base_url('assets/js/chart-ralan.js'); ?>"></script>
			<script src="<?= base_url('assets/js/chart-ranap.js'); ?>"></script>
			<script src="<?= base_url('assets/js/chart-igd.js'); ?>"></script>
			<script src="<?= base_url('assets/js/chart-ranap-pertanyaan.js'); ?>"></script>
			<script>
				const base_url = "/sadewa-survey/";
				$(document).ready(function() {
					$('#tabelsurvey_bangsal').DataTable({
					});
				});
				$(document).ready(function() {
					$('#tabelsurvey_dokter').DataTable({
					});
				});
				// IGD
				let label_1 = $('#date_1').val();
				let label_2 = $('#date_2').val();
				$(document).ready(function() {
					$('#tabelsurvey_igd').DataTable({
						dom: 'Bfrtip',
						buttons: [
							{
								extend: 'excel',
								title: `Data Survey Kepuasan Pasien IGD Tanggal ${label_1} s.d ${label_2}`
							},
						]
					});
				});
				// Ralan
				let label_3 = $('#date_1').val();
				let label_4 = $('#date_2').val();
				$(document).ready(function() {
					$('#tabelsurvey_ralan').DataTable({
						dom: 'Bfrtip',
						buttons: [
							{
								extend: 'excel',
								title: `Data Survey Kepuasan Pasien Rawat Jalan Tanggal ${label_3} s.d ${label_4}`
							},
						]
					});
				});
				// Ranap
				let label_5 = $('#date_1').val();
				let label_6 = $('#date_2').val();
				$(document).ready(function() {
					$('#tabelsurvey_ranap').DataTable({
						dom: 'Bfrtip',
						buttons: [
							{
								extend: 'excel',
								title: `Data Survey Kepuasan Pasien Rawat Inap Tanggal ${label_5} s.d ${label_6}`
							},
						]
					});
				});
				$(document).ready(function() {
					$('#tabelsurvey_spesialis').DataTable({
					});
				});
				$(document).ready(function() {
					$('#tabelsurvey_user').DataTable({
					});
				});
			</script>