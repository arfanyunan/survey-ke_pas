		<!-- Sidebar -->
		<ul class="navbar-nav sidebar sidebar-dark accordion bg_admin" id="accordionSidebar">
			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" target="_blank" href="/sadewa-survey">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-2">
					<h6 class="pt-2">Hallo Admin</h6>
				</div>
			</a>
			<!-- Nav Item - Dashboard -->
			<hr class="sidebar-divider my-1">
			<li class="nav-item">
				<a class="nav-link" href="/sadewa-survey/admin/">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/igd') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data IGD</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/ralan') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Ralan</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('/admin/ranap') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Ranap</span></a>
			</li>
			<hr class="sidebar-divider">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/bangsal') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Bangsal</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/dokter') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Dokter</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/spesialis') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Spesialis</span></a>
			</li>
			<hr class="sidebar-divider my-1">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/user') ?>">
					<i class="fas fa-user"></i>
					<span>Lihat Data User</span></a>
			</li>
			<hr class="sidebar-divider my-1">
			<li class="nav-item">
				<a href="" class="nav-link" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-sign-out-alt"></i>
					<strong>Logout</strong>
				</a>
			</li>
			<hr class="sidebar-divider">
			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

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
    									<form action="<?= base_url('admin/ranap'); ?>" method="POST">
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
    									<form action="<?= base_url('admin/ranap'); ?>" method="POST">
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
    														<h4 class="card-title text-center">Tabel Data Survey Kepuasan Pasien Ranap (Rawat Inap) Tanggal <b><?php echo tgl_indo3($date_1); ?></b> s.d <b><?php echo tgl_indo3($date_2); ?></b></h4>
    													<?php
														} else { ?>
    														<h4 class="card-title text-center">Tabel Data Survey Kepuasan Pasien Ranap (Rawat Inap) Bulan <b><?php echo date('M'); ?> <?php echo date('Y'); ?></b> </h4>
    													<?php
														} ?>
														<h6 class="font-italic text-center mb-3" style="color : #4dcfc6;">*Data Yang Ditampilkan Berdasarkan Tanggal Isi Survey</h6>
    												</div>
    											</div>
    										</div>
    										<div class="card-body table-responsive">
    											<table id="tabelsurvey" class="table table-bordered table-striped table-hover dt-responsive nowrap" style="width: 100%;">
    												<thead class="thead-dark">
    													<tr>
    														<th class="text-center">No</th>
    														<th class="text-center">Tanggal Isi</th>
    														<th class="text-center">Tanggal Perawatan</th>
    														<th class="text-center">Nama Pasien</th>
    														<th class="text-center">Petugas</th>
    														<th class="text-center">Bangsal</th>
    														<th class="text-center">Pertanyaan 1</th>
    														<th class="text-center">Pertanyaan 2</th>
    														<th class="text-center">Pertanyaan 3</th>
    														<th class="text-center">Pertanyaan 4</th>
    														<th class="text-center">Pertanyaan 5</th>
    														<th class="text-center">Pertanyaan 6</th>
    														<th class="text-center">Pertanyaan 7</th>
    														<th class="text-center">Pertanyaan 8a</th>
    														<th class="text-center">Pertanyaan 8b</th>
    														<th class="text-center">Pertanyaan 8c</th>
    														<th class="text-center">Pertanyaan 8d</th>
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
    															<td class="text-center"><?= $dt_admin['tgl_ranap']; ?></td>
    															<td class="text-center"><?= $dt_admin['pasien']; ?></td>
    															<td class="text-center"><?= $dt_admin['petugas']; ?></td>
    															<td class="text-center"><?= $dt_admin['bangsal']; ?></td>
    															<td class="text-center"><?= $dt_admin['p1']; ?></td>
    															<td class="text-center"><?= $dt_admin['p2']; ?></td>
    															<td class="text-center"><?= $dt_admin['p3']; ?></td>
    															<td class="text-center"><?= $dt_admin['p4']; ?></td>
    															<td class="text-center"><?= $dt_admin['p5']; ?></td>
    															<td class="text-center"><?= $dt_admin['p6']; ?></td>
    															<td class="text-center"><?= $dt_admin['p7']; ?></td>
    															<td class="text-center"><?= $dt_admin['p8a']; ?></td>
    															<td class="text-center"><?= $dt_admin['p8b']; ?></td>
    															<td class="text-center"><?= $dt_admin['p8c']; ?></td>
    															<td class="text-center"><?= $dt_admin['p8d']; ?></td>
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
		<script src="<?= base_url('assets/chart.js/Chart.min.js'); ?>"></script>
		<script src="<?= base_url('assets/js/demo/chart-bar-demo.js'); ?>"></script>
		<script src="<?= base_url('assets/js/chart-ralan.js'); ?>"></script>
		<script src="<?= base_url('assets/js/chart-ranap.js'); ?>"></script>
		<script src="<?= base_url('assets/js/chart-igd.js'); ?>"></script>
		<script>
			const base_url = "/sadewa-survey/";
			$(document).ready(function() {
				$('#tabelsurvey').DataTable({
					dom: 'Bfrtip',
					buttons: [
						// 'excel', 'print'
						{
							extend: 'excel',
							
							title: 'Data Survey Kepuasan Pasien Ranap (Rawat Inap) <?php if ($this->input->post('date_1') == true) {
																					echo 'Tanggal ' . tgl_indo3($date_1) . ' s.d ' .
																						tgl_indo3($date_2);
																				} else {
																					echo 'Bulan ' . date('M') . ' ' . date('Y');
																				} ?><?php ?>'
						},
					]
				});
			});
		</script>