<?= $this->load->view('admin/sidebar',null,true); ?>

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
								<form action="<?= base_url('admin/igd'); ?>" method="POST">
									<div class="input-group input-group-sm">
										<input type="date" class="form-control" id="date_1" name="date_1" required value="<?= isset($date_1) ? $date_1 : date('Y-m-d') ; ?>">
										<input type="date" class="form-control" name="date_2" required value="<?= isset($date_2) ? $date_2 : date('Y-m-d') ; ?>">
										<span class="input-group-append">
											<button type="submit" class="btn btn-info btn-flat">Lihat Data</button>
										</span>
									</div>
								</form>

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
														<h4 class="card-title text-center">Tabel Data Survey Kepuasan Pasien IGD Tanggal <b><?php echo tgl_indo($date_1); ?></b> s.d <b><?php echo tgl_indo($date_2); ?></b></h4>
													<?php
													} else { ?>
														<h4 class="card-title text-center">Tabel Data Survey Kepuasan Pasien IGD Bulan <b><?php echo date('M'); ?> <?php echo date('Y'); ?></b> </h4>
													<?php
													} ?>
													<h6 class="font-italic text-center mb-3" style="color : #4dcfc6;">*Data Yang Ditampilkan Berdasarkan Tanggal Isi Survey</h6>
												</div>
											</div>
										</div>

										<div class="card-body table-responsive">
											<table id="tabelsurvey" class="table table-light table-bordered table-striped table-hover table-sm dt-responsive nowrap" style="width: 100%;">
												<thead class="thead-dark">
													<tr>
														<th class="text-center">No</th>
														<th class="text-center">Tgl Isi</th>
														<th class="text-center">Tgl Periksa</th>
														<th class="text-center">Nama Pasien</th>
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
															<td class="text-center"><?= $dt_admin['pasien']; ?></td>
															<td class="text-center"><?= $dt_admin['petugas']; ?></td>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@1.0.0"></script>
		<script src="<?= base_url('assets/chart.js/Chart.min.js'); ?>"></script>
		<script src="<?= base_url('assets/js/demo/chart-bar-demo.js'); ?>"></script>
		<script src="<?= base_url('assets/js/chart-ralan.js'); ?>"></script>
		<script src="<?= base_url('assets/js/chart-ranap.js'); ?>"></script>
		<script src="<?= base_url('assets/js/chart-igd.js'); ?>"></script>
		<script>
			const base_url = "/sadewa-survey/";
			let label_1 = $('#date_1').val();
			let label_2 = $('#date_1').val();
			$(document).ready(function() {
				$('#tabelsurvey').DataTable({
					dom: 'Bfrtip',
					buttons: [
						{
							extend: 'excel',
							title: `Data Survey Kepuasan Pasien IGD ${label_1} s.d ${label_2}`
						},
					]
				});
			});
		</script>

		