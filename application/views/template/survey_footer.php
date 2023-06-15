<!-- Footer -->
<footer class="sticky-footer bg-light">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; SADEWA SURVEY 2023</span>
		</div>
	</div>
</footer>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>


<script>
			$(document).ready(function() {
			$('#spesialis').change(function() {
				var kd_sps = $(this).val();
				// console.log(kd_sps);
				$.ajax({
					type: "POST",
					url: "<?= base_url('Survey/isi_dokter') ?>",
					data: {
						kd_sps: kd_sps
					},
					dataType: "JSON",
					success: function(response) {
						// console.log(response);
						$('#dokter').html(response);
					}
				})
			});
		});
</script>

