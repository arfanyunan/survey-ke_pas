		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 pt-3 static-top shadow">
					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-outline-info d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>
					<h5>Data Survey Kepuasan Pasien <b>RSKIA SADEWA</b></h5>
					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Kosong -->
					</ul>
				</nav>
				<div class="content-wrapper">
					<div class="container-fluid">
						<div class="row mb-3">
							<div class="col-md-5">
								<h6>Data Berdasarkan Range Tanggal</h6>
								<?php
								if ($this->input->post('date_1') == true) {
								?>
									<form action="<?= base_url('admin/ralan'); ?>" method="POST">
										<div class="input-group input-group-sm">
											<input type="date" class="form-control" name="date_1" required value="<?php echo $date_1; ?>">
											<input type="date" class="form-control" name="date_2" required value="<?php echo $date_1; ?>">
											<span class="input-group-append">
												<button type="submit" class="btn btn-info btn-flat">Lihat Data</button>
											</span>
										</div>
									</form>
								<?php
								} else {
								?>
									<form action="<?= base_url('admin/ralan'); ?>" method="POST">
										<div class="input-group input-group-sm">
											<input type="date" class="form-control" name="date_1" required>
											<input type="date" class="form-control" name="date_2" required>
											<span class="input-group-append">
												<button type="submit" class="btn btn-info btn-flat">Lihat Data</button>
											</span>
										</div>
									</form>
								<?php }; ?>
							</div>
						</div>
					</div>
					<!-- Main content -->

					<div class="content-header">
						<div class="container-fluid">
							<div class="row mb-2">
								<div class="col-lg-12">
									<div class="card card-success card-outline">
										<div class="card-header bg-white">
											<div class="row">
												<div class="col-sm-12 col-md-12">
													<?php
													if ($this->input->post('date_1') == true) {
													?>
														<h4 class="card-title text-center">Tabel Data Survey Kepuasan Pasien Ralan (Rawat Jalan) Tanggal <b><?php echo tgl_indo2($date_1); ?></b> s.d <b><?php echo tgl_indo2($date_2); ?></b></h4>
													<?php
													} else { ?>
														<h4 class="card-title text-center">Tabel Data Survey Kepuasan Pasien Ralan (Rawat Jalan) Bulan <b><?php echo date('M'); ?> <?php echo date('Y'); ?></b> </h4>
													<?php
													} ?>
													<h6 class="font-italic text-center mb-3" style="color : #4dcfc6;">*Data Yang Ditampilkan Berdasarkan Tanggal Isi Survey</h6>
												</div>
											</div>
										</div>
										<!-- <?= $this->session->flashdata('pesan'); ?> -->
										<div class="card-body table-responsive">
											<table id="tabelsurvey" class="table table-ligh table-bordered table-striped table-hover table-sm dt-responsive nowrap" style="width: 100%;">
												<thead class="thead-dark">
													<tr>
														<th class="text-center">No</th>
														<th class="text-center">Tanggal Isi</th>
														<th class="text-center">Tanggal Periksa</th>
														<th class="text-center">Poli</th>
														<th class="text-center">Dokter</th>
														<th class="text-center">Pesien</th>
														<th class="text-center">Petugas</th>
														<th class="text-center">Pertanyaan 1</th>
														<th class="text-center">Pertanyaan 2</th>
														<th class="text-center">Pertanyaan 3</th>
														<th class="text-center">Pertanyaan 4</th>
														<th class="text-center">Pertanyaan 5</th>
														<th class="text-center">Saran</th>
														<th class="text-center">Kritik</th>

													</tr>
												</thead>
												<tbody>
													<?php $no = 1;
													foreach ($data_admin as $dt_admin) : ?>
														<tr>
															<td class="text-center"><?= $no; ?></td>
															<td class="text-center"><?= $dt_admin['tgl_isi']; ?></td>
															<td class="text-center"><?= $dt_admin['tgl_periksa']; ?></td>
															<td class="text-center"><?= $dt_admin['nm_sps']; ?></td>
															<td class="text-center"><?= $dt_admin['nm_dokter']; ?></td>
															<td class="text-center"><?= $dt_admin['nm_pasien']; ?></td>
															<td class="text-center"><?= $dt_admin['nm_petugas']; ?></td>
															<td class="text-center"><?= $dt_admin['p1']; ?></td>
															<td class="text-center"><?= $dt_admin['p2']; ?></td>
															<td class="text-center"><?= $dt_admin['p3']; ?></td>
															<td class="text-center"><?= $dt_admin['p4']; ?></td>
															<td class="text-center"><?= $dt_admin['p5']; ?></td>
															<td class="text-center"><?= $dt_admin['saran']; ?></td>
															<td class="text-center"><?= $dt_admin['kritik']; ?></td>

														</tr>
													<?php $no++;
													endforeach ?>

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- /.container-fluid -->

					</div>
					<!-- /.content -->

				</div>


			</div>
			<!-- End of Main Content -->


		<!-- Chart -->
		<script src="<?= base_url('assets/chart_bar.js'); ?>"></script>

		<!-- Bootstrap core JavaScript-->
		<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

		<!-- Core plugin JavaScript-->
		<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

		<!-- Custom scripts for all pages-->
		<script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

		<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>


		<script src="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css"></script>
		<script src="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"></script>

		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>


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
			const base_url = "/survey_sadewa/";
			$(document).ready(function() {
				$('#tabelsurvey').DataTable({
					dom: 'Bfrtip',
					buttons: [
						// 'excel', 'print'
						{
							extend: 'excel',
							
							title: 'Data Survey Kepuasan Pasien Ralan (Rawat Jalan) <?php if ($this->input->post('date_1') == true) {
																					echo 'Tanggal ' . tgl_indo2($date_1) . ' s.d ' .
																						tgl_indo2($date_2);
																				} else {
																					echo 'Bulan ' . date('M') . ' ' . date('Y');
																				} ?><?php ?>'
						},
					]
				});
			});
		</script>