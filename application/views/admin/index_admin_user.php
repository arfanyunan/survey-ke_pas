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


						<!-- <div class="card col-lg-12 mb-3">
							<div class="card-body p-0">
								<div class="row p-3">
									<div class="col-lg-12">
											<form class="user" method="post" action="<?= base_url('auth/registration') ?>">
												<div class="form-group row">
													<div class="col-sm-6 mb-3 mb-sm-0">
														<strong for="exampleFormControlInput1" class="form-label">NIK:</strong>
														<input type="text" class="form-control rounded-pill mt-2" id="nik" name="nik" placeholder="Masukan NIK" value="<?= set_value('name') ?>">
														<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
													<div class="col-sm-6">
														<strong for="exampleFormControlInput1" class="form-label">Nama:</strong>
														<input type="text" class="form-control rounded-pill mt-2" id="nama" name="nama" placeholder="Masukan Nama Lengkap" value="<?= set_value('name') ?>">
														<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-6 mb-3 mb-sm-0">
														<strong for="exampleFormControlInput1" class="form-label">Password :</strong>
														<input type="password" class="form-control rounded-pill mt-2" id="password1" name="password1" placeholder="Masukan Password">
														<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
													<div class="col-sm-6">
														<strong for="exampleFormControlInput1" class="form-label">Ulangi Password:</strong>
														<input type="password" class="form-control rounded-pill mt-2" id="password2" name="password2" placeholder="Ulangi Password">
														<?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="text-right">
													<button type="submit" style="background-color: #4dcfc6;" class="btn text-light rounded-pill">Simpan</button>
												</div>
											</form>
									</div>
								</div>
							</div>
						</div> -->

							<div class="row mb-2">
								<div class="col-lg-12">
									<div class="card card-success card-outline">
										<div class="card-header bg-white">
											<div class="row mt-2">
												<div class="col-sm-3 col-md-3">
													<!-- <a href="<?= base_url('admin/tambah_user') ?>" type="button" class="btn btn-info btn-sm">Tambah User</a> -->
													<button type="button" class="btn btn-info btn-sm mb-2" data-toggle="modal" data-target="#tambahUser"><i class="fas fa-plus mr-2"></i>Tambah User</button>
												</div>
												<div class="col-sm-6 col-md-6">
													<h4 class="card-title text-center">Tabel Data User <b>RSKIA SADEWA</b></h4>
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
														<th class="text-center">NIK</th>
														<th class="text-center">Nama</th>
														<th class="text-center">Role Id</th>
														<th class="text-center">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php $no = 1;
													foreach ($data_admin as $dt_admin) : ?>
														<tr>
															<td class="text-center col-sm-1"><?= $no; ?></td>
															<td class="text-center col-sm-3"><?= $dt_admin['nik']; ?></td>
															<td class="text-center col-sm-3"><?= $dt_admin['nama']; ?></td>
															<?php 
															if ($dt_admin['role_id'] == 1){
															?>
																<td class="text-center col-sm-2"><span class="badge badge-success text-white btn-block">Admin</span></td>
															<?php
															}else{
															?>
																<td class="text-center col-sm-2"><span class="badge badge-danger btn-block">Pasien</span></td>
															<?php
															}
															?>
															<td class="text-center col-sm-1">
																<button type="button" class="btn bg_admin text-white btn-sm" data-toggle="modal" data-target="#editUser<?= $dt_admin['nik']; ?>"><i class="fas fa-pen mr-2"></i>Edit Data</button>
																<button type="button" class="btn btn-success text-white btn-sm" data-toggle="modal" data-target="#gantiPassword<?= $dt_admin['nik']; ?>"><i class="fas fa-pen mr-2"></i>Ganti Password</button>
															</td>
														</tr>


														<!-- Modal Edit User -->
														<div class="modal fade" id="editUser<?= $dt_admin['nik']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
															<div class="modal-header text-white bg_admin">
																<h5 class="modal-title" id="staticBackdropLabel">Edit User</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
															<form class="user" action="<?= base_url('admin/edit_user'); ?>" method="POST">
															<div class="mb-3">
																<strong for="exampleFormControlInput1" class="form-label">NIK:</strong>
																<input type="text" class="form-control rounded-pill mt-2" name="txt_nik" id="txt_nik" readonly value="<?= $dt_admin['nik']; ?>">
																<input type="hidden" class="form-control rounded-pill mt-2" name="txt_nik" id="txt_nik" value="<?= $dt_admin['nik']; ?>">
															</div>
															<div class="mb-3">
																<strong for="exampleFormControlInput1" class="form-label">Role Id:</strong>
																<?php 
																if ($dt_admin['role_id'] == 1){
																?>
																	<input type="text" class="form-control rounded-pill mt-2" readonly value="Admin">
																<?php
																}else{
																?>
																	<input type="text" class="form-control rounded-pill mt-2" readonly value="">
																<?php
																}
																?>
															</div>
															<div class="mb-3">
																<strong for="exampleFormControlInput1" class="form-label">Nama :</strong>
																<input type="text" class="form-control rounded-pill mt-2" name="txt_nama" id="txt_nama" required placeholder="Masukan Nama Lengkap" value="<?= $dt_admin['nama']; ?>">
															</div>
																<div class="text-right">
																	<button type="submit" style="background-color: #4dcfc6;" class="btn text-light rounded-pill">Simpan</button>
																</div>
															</form>
															</div>
															</div>
														</div>
														</div>

														<!-- Modal Ganti Password -->
														<div class="modal fade" id="gantiPassword<?= $dt_admin['nik']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
															<div class="modal-header text-white bg_admin">
																<h5 class="modal-title" id="staticBackdropLabel">Ganti Password</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
															<form class="user" action="<?= base_url('admin/ganti_password'); ?>" method="POST">
															<div class="mb-3">
																<label for="disabledSelect" class="form-label ms-1">Password</label>
																<div class="input-group">
																	<input type="password" class="form-control rounded-pill input-md" name="txt_password" data-toggle="password" required autocomplete="off" title="Hanya Bisa Huruf dan Angka" pattern="[A-Za-z0-9]+" placeholder="Masukan Password">
																	<input type="hidden" class="form-control rounded-pill mt-2" name="txt_nik" id="txt_nik" value="<?= $dt_admin['nik']; ?>">
																<div class="input-group-append">
																	<span class="input-group-text ms-1 rounded-pill bg-light" style="padding:0.6rem;"><i class="fa fa-eye"></i></span>
																</div>
																</div>
															</div>
															<div class="mb-3">
																<label for="disabledSelect" class="form-label ms-1">Password</label>
																<div class="input-group">
																	<input type="password" class="form-control rounded-pill input-md" name="txt_password2" data-toggle="password" required title="Hanya Bisa Huruf dan Angka" pattern="[A-Za-z0-9]+" placeholder="Masukan Ulangi Password">
																<div class="input-group-append">
																	<span class="input-group-text ms-1 rounded-pill bg-light" style="padding:0.6rem;"><i class="fa fa-eye"></i></span>
																</div>
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