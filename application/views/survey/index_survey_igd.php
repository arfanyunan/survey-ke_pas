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
							<form class="user" action="<?= base_url('survey/index_igd'); ?>" method="POST">
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
													<strong for="exampleFormControlInput1" class="form-label">Tanggal dan waktu perawatan: <b class="text-danger">*</b></strong>
													<input type="date" class="form-control rounded-pill mt-2" name="tanggal_datang" value="<?= set_value('tanggal_datang') ?>">
													<?= form_error('tanggal_datang', '<small class="text-danger">', '</small>'); ?>
												</div>
												<div class="row justify-content-center">
													<div class="col-lg-6">
														<div class="mb-3">
															<strong for="exampleFormControlInput1" class="form-label">Nama Pasien: <b class="text-danger">*</b></strong>
															<input type="text" class="form-control rounded-pill mt-2" name="txt_nama" id="txt_nama" placeholder="Masukan Nama Pasien" value="<?= set_value('txt_nama') ?>">
															<?= form_error('txt_nama', '<small class="text-danger">', '</small>'); ?>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<strong for="exampleFormControlInput1" class="form-label">Nama Petugas:</strong>
															<input type="text" class="form-control rounded-pill mt-2" name="txt_petugas" id="txt_petugas" placeholder="Masukan Nama Petugas" value="<?= set_value('txt_petugas') ?>">
															<?= form_error('txt_petugas', '<small class="text-danger">', '</small>'); ?>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3 mt-3">
															<p class="font-weight-bold">1. Sudahkah pelayanan di IGD RS ini sesuai dengan yang Anda inginkan? <b class="text-danger">*</b></p>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_1" name="p1" value="Ya" onclick="show1('none')" <?php if(set_value('p1')=='Ya') echo 'checked'?>>
																	<label class="form-check-label mr-3" for="rb_1_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_2" name="p1" value="Tidak"  onclick="show1('block')" <?php if(set_value('p1')=='Tidak') echo 'checked'?>>
																	<label class="form-check-label" for="rb_1_2">Tidak</label>
																	<textarea class="form-control mt-2" name="tap1" id="tap1" rows="1" style="display: none;"><?= set_value('tap1') ?></textarea>
																</div><br>
															<?= form_error('p1', '<small class="text-danger">', '</small>'); ?>
															<?= form_error('tap1', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3 mt-3">
															<p class="font-weight-bold">2. Apakah anda dilayani oleh petugas dalam waktu kurang dari 15 menit? <b class="text-danger">*</b></p>
																	<div class="form-group clearfix mt-2">
																		<div class="icheck-primary d-inline">
																			<input type="radio" id="rb_2_1" name="p2" value="Ya" onclick="show2('none')" <?php if(set_value('p2')=='Ya') echo 'checked'?>>
																			<label class="form-check-label mr-3" for="rb_2_1">Ya</label>
																		</div>
																		<div class="icheck-primary d-inline">
																			<input type="radio" id="rb_2_2" name="p2" value="Tidak" onclick="show2('block')" <?php if(set_value('p2')=='Tidak') echo 'checked'?>>
																			<label class="form-check-label" for="rb_2_2">Tidak</label>
																			<textarea class="form-control mt-2" name="tap2" id="tap2" rows="1" style="display: none;"><?= set_value('tap2') ?></textarea>
																		</div><br>
																	<?= form_error('p2', '<small class="text-danger">', '</small>'); ?>
																	<?= form_error('tap2', '<small class="text-danger">', '</small>'); ?>
																</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<p class="font-weight-bold">3. Apakah keterampilan petugas IGD dalam memberikan pelayanan sudah cukup baik? <b class="text-danger">*</b></p>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_1" name="p3" value="Ya" onclick="show3('none')" <?php if(set_value('p3')=='Ya') echo 'checked'?>>
																	<label class="form-check-label mr-3" for="rb_3_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_2" name="p3" value="Tidak" onclick="show3('block')" <?php if(set_value('p3')=='Tidak') echo 'checked'?>>
																	<label class="form-check-label" for="rb_3_2">Tidak</label>
																	<textarea class="form-control mt-2" name="tap3" id="tap3" rows="1" style="display: none;"><?= set_value('tap3') ?></textarea>
																</div><br>
															<?= form_error('p3', '<small class="text-danger">', '</small>'); ?>
															<?= form_error('tap3', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3">
															<p class="font-weight-bold">4. Apakah Petugas IGD sudah memberikan informasi yang anda inginkan dengan tepat? <b class="text-danger">*</b></p>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_1" name="p4" value="Ya" onclick="show4('none')" <?php if(set_value('p4')=='Ya') echo 'checked'?>>
																	<label class="form-check-label mr-3" for="rb_4_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_2" name="p4" value="Tidak" onclick="show4('block')" <?php if(set_value('p4')=='Tidak') echo 'checked'?>>
																	<label class="form-check-label" for="rb_4_2">Tidak</label>
																	<textarea class="form-control mt-2" name="tap4" id="tap4" rows="1" style="display:none"><?= set_value('tap4') ?></textarea>
																</div><br>
															<?= form_error('p4', '<small class="text-danger">', '</small>'); ?>
															<?= form_error('tap4', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3">
															<p class="font-weight-bold">5. Apakah sikap petugas IGD dalam memberikan pelayanan sudah cukup baik? <b class="text-danger">*</b></p>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_5_1" name="p5" value="Ya" onclick="show5('none')" <?php if(set_value('p5')=='Ya') echo 'checked'?>>
																	<label class="form-check-label mr-3" for="rb_5_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_5_2" name="p5" value="Tidak" onclick="show5('block')" <?php if(set_value('p5')=='Tidak') echo 'checked'?>>
																	<label class="form-check-label" for="rb_5_2">Tidak</label>
																	<textarea class="form-control" name="tap5" id="tap5" rows="1" style="display:none"><?= set_value('tap5') ?></textarea>
																</div><br>
															<?= form_error('p5', '<small class="text-danger">', '</small>'); ?>
															<?= form_error('tap5', '<small class="text-danger">', '</small>'); ?>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<!-- Masih Kosong -->
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
											<a href="<?= base_url('') ?>" class="btn btn-danger rounded-pill mr-2" role="button" aria-pressed="true">Kembali</a>
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

<script src="<?= base_url('assets/js/igd.js'); ?>"></script>


</body>
</html>