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
						<form class="user" action="<?= base_url('survey/index_ranap'); ?>" method="POST">
								<div class="col-lg">
									<div class="p-5">
										<div class="text-center">
											<h2 class="text-center d-lg-block d-md-block d-sm-block d-none">Kepuasan Pasien Rawat Inap <b style="color:#4dcfc6;"> RSKIA SADEWA</b></h2>
											<h3 class="text-center d-lg-none d-md-none d-sm-none d-block">Kepuasan Pasien<br>Rawat Inap <br><b style="color:#4dcfc6;"> RSKIA SADEWA</b></h3>
											<p class="mb-4">Masukan anda sangat berarti bagi kemajuan pelayanan kami.</p>
										</div>
										<div class="jw-top-title">
											<div class="form-group">
												<div class="mb-3">
													<strong for="exampleFormControlInput1" class="form-label">Tanggal dan waktu perawatan: <b class="text-danger">*</b></strong>
													<input type="date" class="form-control rounded-pill mt-2" name="tanggal_datang" value="<?= set_value('tanggal_datang') ?>">
													<?= form_error('tanggal_datang', '<small class="text-danger">', '</small>'); ?>
												</div>
												<div class="row justify-content-center">
													<div class="col-lg-4">
														<div class="mb-3">
															<strong for="exampleFormControlInput1" class="form-label">Nama Pasien: <b class="text-danger">*</b></strong>
															<input type="text" class="form-control rounded-pill mt-2" name="txt_nama" id="txt_nama" placeholder="Masukan Nama Pasien" value="<?= set_value('txt_nama') ?>">
															<?= form_error('txt_nama', '<small class="text-danger">', '</small>'); ?>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="mb-3">
															<strong for="exampleFormControlInput1" class="form-label">Nama Petugas:</strong>
															<input type="text" class="form-control rounded-pill mt-2" name="txt_petugas" id="txt_petugas" placeholder="Masukan Nama Petugas" value="<?= set_value('txt_petugas') ?>">
															<?= form_error('txt_petugas', '<small class="text-danger">', '</small>'); ?>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="mb-3">
															<strong for="fw-bold">Bangsal: <b class="text-danger">*</b></strong>
															<div class="form-group">
																<select class="form-control select2bs4 rounded-pill mt-2 select2-hidden-accessible" style="width: 100%;" id="cmb_bangsal" name="cmb_bangsal" data-select2-id="cmb_dokter" tabindex="-1" aria-hidden="true">
																	<option selected="selected" value="">-- Pilih Bangsal --</option>

																	<?php foreach ($data_bangsal as $dt_bangsal) : ?>
																		<option value="<?= $dt_bangsal['nm_bangsal']; ?>" <?php echo (set_value('cmb_bangsal') == $dt_bangsal['nm_bangsal']) ? "selected" : "" ?>><?= $dt_bangsal['nm_bangsal']; ?></option>
																	<?php endforeach; ?>

																</select>
																<?= form_error('cmb_bangsal', '<small class="text-danger">', '</small>'); ?>
															</div>
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
																</div></br>
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
															<strong for="">2. Kesopanan dan keramahan yang diberikan oleh petugas? <b class="text-danger">*</b></strong>
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
															<strong for>3. Rasa makanan untuk pasien rawat inap? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
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
															<strong for>4. Penampilan makanan untuk pasien rawat inap? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
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
															<strong for="fw-bold mt-2">5. Apakah anda puas atas sikap tanggap petugas medis di rumah sakit ini ? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_5_1" name="p5" value="Ya" onclick="show5('none')" <?php if (set_value('p5') == 'Ya') echo 'checked' ?>>
																	<label class="form-check-label mr-3" for="rb_5_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_5_2" name="p5" value="Tidak" onclick="show5('block')" <?php if (set_value('p5') == 'Tidak') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_5_2">Tidak</label>
																	<textarea class="form-control" name="tap5" id="tap5" rows="1" style="display:none"><?= set_value('tap5') ?></textarea>
																</div><br>
																<?= form_error('p5', '<small class="text-danger">', '</small>'); ?>
																<?= form_error('tap5', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3">
															<strong for="">6. Apakah anda puas akan keterampilan petugas medis di rumah sakit ini ? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_6_1" name="p6" value="Ya" onclick="show6('none')" <?php if (set_value('p6') == 'Ya') echo 'checked' ?>>
																	<label class="form-check-label mr-3" for="rb_6_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_6_2" name="p6" value="Tidak" onclick="show6('block')" <?php if (set_value('p6') == 'Tidak') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_6_2">Tidak</label>
																	<textarea class="form-control" name="tap6" id="tap6" rows="1" style="display:none"><?= set_value('tap6') ?></textarea>
																</div><br>
																<?= form_error('p6', '<small class="text-danger">', '</small>'); ?>
																<?= form_error('tap6', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3">
															<strong for="">7. Apakah anda merasa nyaman terhadap perawatan yang diberikan petugas medis di rumah sakit ini ? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_7_1" name="p7" value="Ya" onclick="show7('none')" <?php if (set_value('p7') == 'Ya') echo 'checked' ?>>
																	<label class="form-check-label mr-3" for="rb_7_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_7_2" name="p7" value="Tidak" onclick="show7('block')" <?php if (set_value('p7') == 'Tidak') echo 'checked' ?>>
																	<label class="form-check-label" for="rb_7_2">Tidak</label>
																	<textarea class="form-control" name="tap7" id="tap7" rows="1" style="display:none"><?= set_value('tap7') ?></textarea>
																</div><br>
																<?= form_error('p7', '<small class="text-danger">', '</small>'); ?>
																<?= form_error('tap7', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3">
															<strong for="">8. Apakah anda mendapat edukasi mengenai cara:</strong><br>
															<div class="form-check">
																<input class="form-check-input" type="checkbox" name="p8a" value="Memberi ASI" id="flexCheckIndeterminate">
																<label class="form-check-label" for="flexCheckIndeterminate">
																	Memberi ASI
																</label><br>
																<input class="form-check-input" type="checkbox" name="p8b" value="Menggendong bayi" id="flexCheckIndeterminate">
																<label class="form-check-label" for="flexCheckIndeterminate">
																	Menggendong bayi
																</label><br>
																<input class="form-check-input" type="checkbox" name="p8c" value="Merawat payudara" id="flexCheckIndeterminate">
																<label class="form-check-label" for="flexCheckIndeterminate">
																	Merawat payudara
																</label><br>
																<input class="form-check-input" type="checkbox" name="p8d" value="Merawat bayi baru lahir" id="flexCheckIndeterminate">
																<label class="form-check-label" for="flexCheckIndeterminate">
																	Merawat bayi baru lahir
																</label><br>
																<?= form_error('p8', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
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
											<a href="<?= base_url('/') ?>" class="btn btn-danger rounded-pill mr-2" role="button" aria-pressed="true">Kembali</a>
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
		function show5(kondisi5) {
			$('#tap5').css('display', kondisi5);
		}

		function show6(kondisi6) {
			$('#tap6').css('display', kondisi6);
		}

		function show7(kondisi7) {
			$('#tap7').css('display', kondisi7);
		}
	</script>

</body>
</html>