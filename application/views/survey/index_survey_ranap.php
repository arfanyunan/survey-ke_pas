	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card o-hidden border-bottom-info my-5" id="card-menu-pelayanan">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<form class="user" action="<?= base_url('survey/simpan_ranap'); ?>" method="POST">
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
													<input type="date" class="form-control rounded-pill mt-2" name="tanggal_datang" value="" required>
												</div>
												<div class="row justify-content-center">
													<div class="col-lg-4">
														<div class="mb-3">
															<strong for="exampleFormControlInput1" class="form-label">Nama Pasien: <b class="text-danger">*</b></strong>
															<input type="text" class="form-control rounded-pill mt-2" name="txt_nama" id="txt_nama" required placeholder="Masukan Nama Pasien">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="mb-3">
															<strong for="exampleFormControlInput1" class="form-label">Nama Petugas:</strong>
															<input type="text" class="form-control rounded-pill mt-2" name="txt_petugas" id="txt_petugas" placeholder="Masukan Nama Petugas">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="mb-3">
															<strong for="fw-bold">Bangsal: <b class="text-danger">*</b></strong>
															<div class="form-group">
																<select class="form-control select2bs4 rounded-pill mt-2 select2-hidden-accessible" required style="width: 100%;" id="cmb_bangsal" name="cmb_bangsal" required="" data-select2-id="cmb_dokter" tabindex="-1" aria-hidden="true">
																<option selected="selected" value="">-- Pilih Bangsal --</option>
											
																<?php foreach ($data_bangsal as $dt_bangsal) : ?>
																	<option value="<?= $dt_bangsal['nm_bangsal']; ?>"><?= $dt_bangsal['nm_bangsal']; ?></option>
																<?php endforeach; ?>

																</select>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3 mt-3">
															<strong for="fw-bold">1. Kenyamanan dan kebersihan Rumah Sakit? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_1" name="p1" value="Kurang Sekali" required="">
																	<label class="form-check-label" for="rb_1_1">Kurang Sekali</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_2" name="p1" value="Kurang" required="">
																	<label class="form-check-label" for="rb_1_2">Kurang</label>
																</div></br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_3" name="p1" value="Cukup" required="">
																	<label class="form-check-label" for="rb_1_3">Cukup</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_4" name="p1" value="Baik" required="">
																	<label class="form-check-label" for="rb_1_4">Baik</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_1_5" name="p1" value="Baik Sekali" required="">
																	<label class="form-check-label" for="rb_1_5">Baik Sekali</label>
																</div>
															</div>

														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3 mt-3">
															<strong for="">2. Kesopanan dan keramahan yang diberikan oleh petugas? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_2_1" name="p2" value="Kurang Sekali" required="">
																	<label class="form-check-label" for="rb_2_1">Kurang Sekali</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_2_2" name="p2" value="Kurang" required="">
																	<label class="form-check-label" for="rb_2_2">Kurang</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_2_3" name="p2" value="Cukup" required="">
																	<label class="form-check-label" for="rb_2_3">Cukup</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_2_4" name="p2" value="Baik" required="">
																	<label class="form-check-label" for="rb_2_4">Baik</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_2_5" name="p2" value="Baik Sekali" required="">
																	<label class="form-check-label" for="rb_2_5">Baik Sekali</label>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<strong for>3. Rasa makanan untuk pasien rawat inap? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_1" name="p3" value="Kurang Sekali" required="">
																	<label class="form-check-label" for="rb_3_1">Kurang Sekali</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_2" name="p3" value="Kurang" required="">
																	<label class="form-check-label" for="rb_3_2">Kurang</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_3" name="p3" value="Cukup" required="">
																	<label class="form-check-label" for="rb_3_3">Cukup</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_4" name="p3" value="Baik" required="">
																	<label class="form-check-label" for="rb_3_4">Baik</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_3_5" name="p3" value="Baik Sekali" required="">
																	<label class="form-check-label" for="rb_3_5">Baik Sekali</label>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3">
															<strong for>4. Penampilan makanan untuk pasien rawat inap? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_1" name="p4" value="Kurang Sekali" required="">
																	<label class="form-check-label" for="rb_4_1">Kurang Sekali</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_2" name="p4" value="Kurang" required="">
																	<label class="form-check-label" for="rb_4_2">Kurang</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_3" name="p4" value="Cukup" required="">
																	<label class="form-check-label" for="rb_4_3">Cukup</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_4" name="p4" value="Baik" required="">
																	<label class="form-check-label" for="rb_4_4">Baik</label>
																</div><br>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_4_5" name="p4" value="Baik Sekali" required="">
																	<label class="form-check-label" for="rb_4_5">Baik Sekali</label>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3">
															<strong for="fw-bold mt-2">5. Apakah anda puas atas sikap tanggap petugas medis di rumah sakit ini ? <b class="text-danger">*</b></strong>
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
														<div class="form-group mb-3">
															<strong for="">6. Apakah anda puas akan keterampilan petugas medis di rumah sakit ini ? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_6_1" name="p6" value="Ya" required="" onclick="show6('none')">
																	<label class="form-check-label mr-3" for="rb_6_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_6_2" name="p6" value="Tidak" required="" onclick="show6('block')">
																	<label class="form-check-label" for="rb_6_2">Tidak</label>
																	<textarea class="form-control" name="tap6" id="tap6" rows="1" style="display:none"></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group mb-3">
															<strong for="">7. Apakah anda merasa nyaman terhadap perawatan yang diberikan petugas medis di rumah sakit ini ? <b class="text-danger">*</b></strong>
															<div class="form-group clearfix mt-2">
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_7_1" name="p7" value="Ya" required="" onclick="show7('none')">
																	<label class="form-check-label mr-3" for="rb_7_1">Ya</label>
																</div>
																<div class="icheck-primary d-inline">
																	<input type="radio" id="rb_7_2" name="p7" value="Tidak" required="" onclick="show7('block')">
																	<label class="form-check-label" for="rb_7_2">Tidak</label>
																	<textarea class="form-control" name="tap7" id="tap7" rows="1" style="display:none"></textarea>
																</div>
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
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<Strong for="exampleFormControlTextarea1">Saran:</Strong>
															<textarea class="form-control" name="ta_saran" id="ta_saran" rows="3" placeholder="Masukan Saran"></textarea>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<strong for="exampleFormControlTextarea1">Kritik:</strong>
															<textarea class="form-control" name="ta_kritik" id="ta_kritik" rows="3" placeholder="Masukan Kritik"></textarea>
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
	</div>
	</div>

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