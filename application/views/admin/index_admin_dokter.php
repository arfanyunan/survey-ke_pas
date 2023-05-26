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
					<!-- Main content -->
					<div class="content-header">
						<div class="container-fluid">
							<div class="row mb-2">
								<div class="col-lg-12">
									<div class="card card-success card-outline">
										<div class="card-header bg-white">
											<div class="row mt-2">
												<div class="col-sm-3 col-md-3">
													<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tambahDokter"><i class="fas fa-plus mr-2"></i>Tambah Dokter</button>
												</div>
												<div class="col-sm-6 col-md-6">
													<h4 class="card-title text-center">Tabel Data Dokter  <b>RSKIA SADEWA</b></h4>
												</div>
												<div class="col-sm-3 col-md-3">
												<div class="text-center">
													<?= $this->session->flashdata('massage'); ?>
												</div>
												</div>
											</div>
										</div>

										<div class="card-body table-responsive">

											<table id="tabelsurvey" class="table table-light table-bordered table-striped table-hover table-sm dt-responsive nowrap" style="width: 100%;">
												<thead class="thead-dark">
													<tr>
														<th class="text-center">No</th>
														<th class="text-center">Kode Dokter</th>
														<th class="text-center">Nama Dokter</th>
														<th class="text-center">Kode Spesialis</th>
														<th class="text-center">Status Aktif</th>
														<th class="text-center">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php $no = 1;
													foreach ($data_admin as $dt_admin) : ?>
														<tr>
															<td class="text-center col-sm-1"><?= $no; ?></td>
															<td class="text-center col-sm-2"><?= $dt_admin['kd_dokter']; ?></td>
															<td class="text-center col-sm-4"><?= $dt_admin['nm_dokter']; ?></td>
															<td class="text-center col-sm-1"><?= $dt_admin['kd_sps']; ?></td>
															<?php 
															if ($dt_admin['status_aktif'] == 0){
															?>
																<td class="text-center col-sm-2"><span class="badge badge-success text-white btn-block">Aktif</span></td>
															<?php
															}elseif($dt_admin['status_aktif'] == 1){
															?>
																<td class="text-center"><span class="badge badge-warning btn-block">Tidak Aktif</span></td>
															<?php
															}
															?>
															<td class="text-center col-sm-2">
																<button type="button" class="btn  bg_admin text-white btn-sm" data-toggle="modal" data-target="#editDokter<?= $dt_admin['kd_dokter']; ?>"><i class="fas fa-pen mr-2"></i>Edit Data</button>
																<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editStatus<?= $dt_admin['kd_dokter']; ?>"><i class="fas fa-pen mr-2"></i>Edit Status</button>
															</td>
														</tr>

														<!-- Modal Edit Dokter -->
														<div class="modal fade" id="editDokter<?= $dt_admin['kd_dokter']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
															<div class="modal-header text-white bg_admin">
																<h5 class="modal-title" id="staticBackdropLabel">Edit Dokter</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
															<form class="user" action="<?= base_url('admin/edit_dokter'); ?>" method="POST">
															<div class="mb-3">
																<strong for="exampleFormControlInput1" class="form-label">Kode Dokter:</strong>
																<input type="text" class="form-control rounded-pill mt-2" name="txt_kd_dokter" id="txt_kd_dokter" readonly value="<?= $dt_admin['kd_dokter']; ?>">
																<input type="hidden" class="form-control rounded-pill mt-2" name="txt_kd_dokter" id="txt_kd_dokter" value="<?= $dt_admin['kd_dokter']; ?>">
															</div>
																<div class="mb-3">
																<strong for="exampleFormControlInput1" class="form-label">Nama Dokter:</strong>
																<input type="text" class="form-control rounded-pill mt-2" name="txt_nm_dokter" id="txt_nm_dokter" required placeholder="Masukan Nama Dokter" value="<?= $dt_admin['nm_dokter']; ?>">
																</div>
																<div class="mb-3">
																		<strong for="fw-bold">Kode Spesialis:</strong>
																		<div class="form-group">
																			<select class="form-control select2bs4 rounded-pill mt-2 select2-hidden-accessible" required style="width: 100%;" id="cmb_kd_sps" name="cmb_kd_sps" required="" data-select2-id="cmb_kd_sps" tabindex="-1" aria-hidden="true">
																			<?php
																			
																			$a = $dt_admin['kd_sps'];
																			
																			foreach ($data_admin_sps as $dt_sps) : ?>
																				<option  <?= ($a == $dt_sps['kd_sps'] ? 'selected' : ''); ?>  > <?= $dt_sps['kd_sps']; ?> - <?= $dt_sps['nm_sps']; ?></option>
																			<?php endforeach; ?>
																			</select>

																		<span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="1" style="width: 100%;">
																		</div>
																</div>

																<div class="text-right">
																	<button type="submit" style="background-color: #4dcfc6;" class="btn text-light rounded-pill">Simpan</button>
																</div>
															</form>
															</div>
															</div>
														</div>
														</div>

														<!-- Modal Edit Dokter -->
														<div class="modal fade" id="editStatus<?= $dt_admin['kd_dokter']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
															<div class="modal-header text-white bg_admin">
																<h5 class="modal-title" id="staticBackdropLabel">Edit Status Aktif Dokter</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
															<form class="user" action="<?= base_url('admin/edit_status'); ?>" method="POST">
															<div class="mb-3">
																<strong for="exampleFormControlInput1" class="form-label">Kode Dokter:</strong>
																<input type="text" class="form-control rounded-pill mt-2" name="txt_kd_dokter" id="txt_kd_dokter" readonly value="<?= $dt_admin['kd_dokter']; ?>">
																<input type="hidden" class="form-control rounded-pill mt-2" name="txt_kd_dokter" id="txt_kd_dokter" value="<?= $dt_admin['kd_dokter']; ?>">
															</div>
																<div class="mb-3">
																		<strong for="fw-bold">Kode Spesialis:</strong>
																		<div class="form-group">
																			<select class="form-control select2bs4 rounded-pill mt-2 select2-hidden-accessible" required style="width: 100%;" id="cmb_status_dokter" name="cmb_status_dokter" required="" data-select2-id="cmb_kd_sps" tabindex="-1" aria-hidden="true">
																			<?= $a = $dt_admin['status_aktif']; ?>
																				<option value="0" <?php echo ( $a == 0) ? "selected" : "" ?>>Aktif</option>
																				<option value="1"  <?php echo ( $a == 1) ? "selected" : "" ?>>Tidak Aktif</option>
																			</select>
																			
																		<span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="1" style="width: 100%;">
																		</div>
																</div>

																<div class="text-right">
																	<button type="submit" style="background-color: #4dcfc6;" class="btn text-light rounded-pill">Simpan</button>
																</div>
															</form>
															</div>
															</div>
														</div>
														</div>

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

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; SURVEY SADEWA 2023</span>
					</div>
				</div>
			</footer>
			</div>
			<!-- End of Content Wrapper -->
			</div>
			<!-- End of Page Wrapper -->

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
			<!-- <script src="<?= base_url('assets/js/chart-igd.js'); ?>"></script>
			<script>
				const base_url = "/survey_sadewa/";
				$(document).ready(function() {
					$('#tabelsurvey').DataTable({
						dom: 'Bfrtip',
						buttons: [
							'excel', 'print'
						]
					});
				});
			</script> -->
			<script>
				const base_url = "/survey_sadewa/";
				$(document).ready(function() {
					$('#tabelsurvey').DataTable({
					});
				});
			</script>

			</body>

			</html>