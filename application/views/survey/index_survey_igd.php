<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Survey Kepuasan Pasien</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/css_custom.css'); ?>" rel="stylesheet">

</head>

<body class="bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card o-hidden border-bottom-info my-5" id="card-menu-pelayanan">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<form class="user" action="<?= base_url('survey/simpan_igd'); ?>" method="POST">
								<div class="col-lg">
									<div class="p-5">
										<div class="text-center">
											<h2 class="text-center d-lg-block d-md-block d-sm-block d-none">Kepuasan Pasien IGD <b style="color:#4dcfc6;"> RSKIA SADEWA</b></h2>
											<h3 class="text-center d-lg-none d-md-none d-sm-none d-block">Kepuasan Pasien IGD <br><b style="color:#4dcfc6;"> RSKIA SADEWA</b></h3>
											<p class="mb-4">Masukan anda sangat berarti bagi kemajuan pelayanan kami.</p>
										</div>
										<div class="jw-top-title">
											<div class="form-group">
												<div class="mb-3">
													<strong for="exampleFormControlInput1" class="form-label">Tanggal dan waktu perawatan:</strong>
													<input type="date" class="form-control rounded-pill mt-2" name="tanggal_datang" value="" required>
												</div>
												<div class="row justify-content-center">
													<div class="col-lg-6">
														<div class="mb-3">
															<strong for="exampleFormControlInput1" class="form-label">Nama Pasien:</strong>
															<input type="text" class="form-control rounded-pill mt-2" name="txt_nama" id="txt_nama" required placeholder="Masukan Nama Pasien">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<strong for="exampleFormControlInput1" class="form-label">Nama Petugas:</strong>
															<input type="text" class="form-control rounded-pill mt-2" name="txt_petugas" id="txt_petugas" required placeholder="Masukan Nama Petugas">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3 mt-3">
															<p class="font-weight-bold">1. Sudahkah pelayanan di IGD RS ini sesuai dengan yang Anda inginkan?</p>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_1" name="p1" value="Ya" required="" onclick="show1('none')">
																	<label class="form-check-label mr-3" for="rb_1_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_2" name="p1" value="Tidak" required="" onclick="show1('block')">
																	<label class="form-check-label" for="rb_1_2">Tidak</label>
																	<textarea class="form-control mt-2" name="tap1" id="tap1" rows="1" style="display: none;"></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3 mt-3">
															<p class="font-weight-bold">2. Apakah anda dilayani oleh petugas dalam waktu < 15 menit?</p>
																	<div class="form-group clearfix mt-2">
																		<div class="icheck-primary d-inline">
																			<input type="radio" id="rb_2_1" name="p2" value="Ya" required="" onclick="show2('none')">
																			<label class="form-check-label mr-3" for="rb_2_1">Ya</label>
																		</div>
																		<div class="icheck-primary d-inline">
																			<input type="radio" id="rb_2_2" name="p2" value="Tidak" required="" onclick="show2('block')">
																			<label class="form-check-label" for="rb_2_2">Tidak</label>
																			<textarea class="form-control mt-2" name="tap2" id="tap2" rows="1" style="display: none;"></textarea>
																		</div>
																	</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<p class="font-weight-bold">3. Apakah keterampilan petugas IGD dalam memberikan pelayanan sudah cukup baik?</p>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_1" name="p3" value="Ya" required="" onclick="show3('none')">
																	<label class="form-check-label mr-3" for="rb_3_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_2" name="p3" value="Tidak" required="" onclick="show3('block')">
																	<label class="form-check-label" for="rb_3_2">Tidak</label>
																	<textarea class="form-control mt-2" name="tap3" id="tap3" rows="1" style="display: none;"></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3">
															<p class="font-weight-bold">4. Apakah Petugas IGD sudah memberikan informasi yang anda inginkan dengan tepat?</p>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_1" name="p4" value="Ya" required="" onclick="show4('none')">
																	<label class="form-check-label mr-3" for="rb_4_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_2" name="p4" value="Tidak" required="" onclick="show4('block')">
																	<label class="form-check-label" for="rb_4_2">Tidak</label>
																	<textarea class="form-control mt-2" name="tap4" id="tap4" rows="1" style="display:none"></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3">
															<p class="font-weight-bold">5. Apakah sikap petugas IGD dalam memberikan pelayanan sudah cukup baik?</p>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_5_1" name="p5" value="Ya" required="" onclick="show5('none')">
																	<label class="form-check-label mr-3" for="rb_5_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_5_2" name="p5" value="Tidak" required="" onclick="show5('block')">
																	<label class="form-check-label" for="rb_5_2">Tidak</label>
																	<textarea class="form-control" name="tap5" id="tap5" rows="1" style="display:none"></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<!-- Masih Kosong -->
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<Strong for="exampleFormControlTextarea1">Saran:</Strong>
															<textarea class="form-control" name="ta_saran" id="ta_saran" rows="3" required placeholder="Masukan Saran"></textarea>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<strong for="exampleFormControlTextarea1">Kritik:</strong>
															<textarea class="form-control" name="ta_kritik" id="ta_kritik" rows="3" required placeholder="Masukan Kritik"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center mb-3">
											<a href="/survey_sadewa" class="btn btn-danger rounded-pill mr-2" role="button" aria-pressed="true">Kembali</a>
											<button type="submit" style="background-color: #4dcfc6;" class="btn text-light rounded-pill ml-2">Simpan</button>
										</div>
										<marquee behavior="center" direction="left">-- Terimakasih atas ketersediaan Anda untuk mengisi Form Kepuasan Pasien <b style="color:#4dcfc6;">RSKIA SADEWA</b> --</marquee>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	</div>

	</div>


	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
	<!-- Swal -->
	<script src="js/sweetalert2.all.min.js"></script>



	<script>
		function show1(kondisi1) {
			$('#tap1').css('display', kondisi1);
		}

		function show2(kondisi2) {
			$('#tap2').css('display', kondisi2);
		}

		function show3(kondisi3) {
			$('#tap3').css('display', kondisi3);
		}

		function show4(kondisi4) {
			$('#tap4').css('display', kondisi4);
		}

		function show5(kondisi5) {
			$('#tap5').css('display', kondisi5);
		}

		Swal.fire({
			position: 'top-end',
			icon: 'success',
			title: 'Your work has been saved',
			showConfirmButton: false,
			timer: 1500
		})

		function isi_dokter() {

			let kd_sps = $('#cmb_poli').val();
			$.ajax({
				url: "<?= base_url('survey/isi_dokter') ?>",
				method: "POST",
				data: {
					kd_sps
				},
				dataType: "JSON",
				success: (hasil) => {
					console.log(hasil);
					$('#cmb_dokter').empty();

					$.each(hasil, function() {
						$('#cmb_dokter').append($("<option />").val(this.kd_dokter).text(this.nm_dokter));
					});
				},
				error: (err) => {
					alert('error dokter');
				}

			});
		}
	</script>

</body>

</html>