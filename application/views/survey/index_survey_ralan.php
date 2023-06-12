<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?= $this->load->view('/template/survey_header',null,true); ?>

<body class="bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card o-hidden border-bottom-info my-5" id="card-menu-pelayanan">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
						<form class="user" action="<?= base_url('survey/index_ralan'); ?>" method="POST">
								<div class="col-lg">
									<div class="p-5">
										<div class="text-center">
											<h2 class="text-center d-lg-block d-md-block d-sm-block d-none">Kepuasan Pasien Rawat Jalan <b style="color:#4dcfc6;"> RSKIA SADEWA</b></h2>
											<h3 class="text-center d-lg-none d-md-none d-sm-none d-block">Kepuasan Pasien<br>Rawat Jalan<br><b style="color:#4dcfc6;"> RSKIA SADEWA</b></h3>
											<p class="mb-4">Masukan anda sangat berarti bagi kemajuan pelayanan kami.</p>
										</div>
										<div class="jw-top-title">
											<div class="form-group">
												<div class="mb-3">
													<strong for="exampleFormControlInput1" class="form-label">Tanggal dan waktu perawatan: <b class="text-danger">*</b></strong>
													<input type="date" class="form-control rounded-pill mt-2" name="tgl_periksa" value="<?= set_value('tgl_periksa') ?>">
													<?= form_error('tgl_periksa', '<small class="text-danger">', '</small>'); ?>
												</div>
												<div class="row justify-content-center">
													<div class="col-lg-6">
														<div class="mb-3">
															<strong for="fw-bold">Spesialis: <b class="text-danger">*</b></strong>
															<div class="form-group">
																<select class="form-control select2bs4 rounded-pill mt-2 select2-hidden-accessible" style="width: 100%;" id="spesialis" name="spesialis">
																	<option selected="selected" value="">-- Pilih Spesialis --</option>
																	<?php foreach ($spesialis as $dt_admin) : ?>
																		<option value="<?= $dt_admin['kd_sps']; ?>" <?php echo (set_value('spesialis') == $dt_admin['kd_sps']) ? "selected" : "" ?>><?= $dt_admin['kd_sps']; ?> - <?= $dt_admin['nm_sps']; ?></option>
																	<?php endforeach; ?>
																</select>
																<span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="1" style="width: 100%;">
															
																<?= form_error('spesialis', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<strong for="fw-bold">Dokter: <b class="text-danger">*</b></strong>
															<div class="form-group">
																<!-- <label for="txt_Nama" class="col-form-label-sm">Nama Dokter*</label> -->
																<select class="form-control select2bs4 select2-hidden-accessible rounded-pill mt-2" style="width: 100%;" id="dokter" name="dokter">
																	<option>-- Pilih Dokter --</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<strong for="exampleFormControlInput1" class="form-label">Nama Pasien: <b class="text-danger">*</b></strong>
															<input type="text" class="form-control rounded-pill mt-2" name="txt_nama" id="txt_nama" placeholder="Masukan Nama Pasien" value="<?= set_value('txt_nama') ?>">
															<?= form_error('txt_nama', '<small class="text-danger">', '</small>'); ?>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<strong for="exampleFormControlInput1" class="form-label">Nama Patugas:</strong>
															<input type="text" class="form-control rounded-pill mt-2" name="txt_petugas" id="txt_petugas" placeholder="Masukan Nama petugas" value="<?= set_value('txt_petugas') ?>">
															<?= form_error('txt_petugas', '<small class="text-danger">', '</small>'); ?>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3 mt-3">
															<strong for="fw-bold">1. Kenyamanan dan kebersihan Rumah Sakit? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_1" name="p1" value="Kurang Sekali" <?php if (set_value('p1') == 'Kurang Sekali') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_1_1">Kurang Sekali</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_2" name="p1" value="Kurang" <?php if (set_value('p1') == 'Kurang') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_1_2">Kurang</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_3" name="p1" value="Cukup" <?php if (set_value('p1') == 'Cukup') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_1_3">Cukup</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_4" name="p1" value="Baik" <?php if (set_value('p1') == 'Baik') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_1_4">Baik</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_5" name="p1" value="Baik Sekali" <?php if (set_value('p1') == 'Baik Sekali') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_1_5">Baik Sekali</label>
																</div><br>
																<?= form_error('p1', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3 mt-3">
															<strong for="">2. Kejelasan Informasi dan komunikasi dengan Dokter? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_2_1" name="p2" value="Kurang Sekali" <?php if (set_value('p2') == 'Kurang Sekali') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_2_1">Kurang Sekali</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_2_2" name="p2" value="Kurang" <?php if (set_value('p2') == 'Kurang') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_2_2">Kurang</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_2_3" name="p2" value="Cukup" <?php if (set_value('p2') == 'Cukup') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_2_3">Cukup</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_2_4" name="p2" value="Baik" <?php if (set_value('p2') == 'Baik') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_2_4">Baik</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_2_5" name="p2" value="Baik Sekali" <?php if (set_value('p2') == 'Baik Sekali') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_2_5">Baik Sekali</label>
																</div><br>
																<?= form_error('p2', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<strong for="">3. Tenaga medis dapat diandalkan untuk menangani pasien? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_1" name="p3" value="Kurang Sekali" <?php if (set_value('p3') == 'Kurang Sekali') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_3_1">Kurang Sekali</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_2" name="p3" value="Kurang" <?php if (set_value('p3') == 'Kurang') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_3_2">Kurang</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_3" name="p3" value="Cukup" <?php if (set_value('p3') == 'Cukup') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_3_3">Cukup</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_4" name="p3" value="Baik" <?php if (set_value('p3') == 'Baik') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_3_4">Baik</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_5" name="p3" value="Baik Sekali" <?php if (set_value('p3') == 'Baik Sekali') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_3_5">Baik Sekali</label>
																</div><br>
															<?= form_error('p3', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3">
															<strong for="">4. Perhatian dari Dokter kepada Pasien? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_1" name="p4" value="Kurang Sekali" <?php if (set_value('p4') == 'Kurang Sekali') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_4_1">Kurang Sekali</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_2" name="p4" value="Kurang" <?php if (set_value('p4') == 'Kurang') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_4_2">Kurang</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_3" name="p4" value="Cukup" <?php if (set_value('p4') == 'Cukup') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_4_3">Cukup</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_4" name="p4" value="Baik" <?php if (set_value('p4') == 'Baik') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_4_4">Baik</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_5" name="p4" value="Baik Sekali" <?php if (set_value('p4') == 'Baik Sekali') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_4_5">Baik Sekali</label>
																</div><br>
																<?= form_error('p4', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3">
															<strong for="">5. Kesopanan dan keramahan yang diberikan oleh petugas? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_5_1" name="p5" value="Kurang Sekali" <?php if (set_value('p5') == 'Kurang Sekali') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_5_1">Kurang Sekali</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_5_2" name="p5" value="Kurang" <?php if (set_value('p5') == 'Kurang') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_5_2">Kurang</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_5_3" name="p5" value="Cukup" <?php if (set_value('p5') == 'Cukup') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_5_3">Cukup</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_5_4" name="p5" value="Baik" <?php if (set_value('p5') == 'Baik') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_5_4">Baik</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_5_5" name="p5" value="Baik Sekali" <?php if (set_value('p5') == 'Baik Sekali') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_5_5">Baik Sekali</label>
																</div><br>
																<?= form_error('p5', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<!-- Kosong -->
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<Strong for="exampleFormControlTextarea1">Saran:</Strong>
															<textarea class="form-control" name="ta_saran" id="ta_saran" rows="3" placeholder="Masukan Saran"><?= set_value('ta_saran') ?></textarea>
															<?= form_error('ta_saran', '<small class="text-danger">', '</small>'); ?>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<strong for="exampleFormControlTextarea1">Kritik:</strong>
															<textarea class="form-control" name="ta_kritik" id="ta_kritik" rows="3" placeholder="Masukan Kritik"><?= set_value('ta_kritik') ?></textarea>
															<?= form_error('ta_kritik', '<small class="text-danger">', '</small>'); ?>
														</div>
													</div>
												</div>
												<h6 class="text-danger">Keterangan :<br>* Wajib Diisi</h6>
											</div>
										</div>
										<div class="text-center mb-3">
											<a href="/sadewa-survey" class="btn btn-danger rounded-pill mr-2" role="button" aria-pressed="true">Kembali</a>
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

<!-- Footer -->
<?= $this->load->view('/template/survey_footer',null,true); ?>

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

	</script>

</body>
</html>