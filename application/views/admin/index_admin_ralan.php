<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?= $this->load->view('/template/admin_header',null,true); ?>

<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">

	<!-- Side Bar -->
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
									<form action="<?= base_url('admin/ralan'); ?>" method="POST">
									<div class="input-group input-group-sm">
										<?php
											$hari_ini = date("Y-m-d");
											$tgl_pertama = date('Y-m-01', strtotime($hari_ini));
											$tgl_terakhir = date('Y-m-t', strtotime($hari_ini));
										?>
										<input type="date" class="form-control" id="date_1" name="date_1" required value="<?= isset($date_1) ? $date_1 : $tgl_pertama ; ?>">
										<input type="date" class="form-control" id="date_2" name="date_2" required value="<?= isset($date_2) ? $date_2 : $tgl_terakhir ; ?>">
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
											<h4 class="card-title text-center">Tabel Data Survey Kepuasan Pasien Rawat Jalan Tanggal <b><?= isset($date_1) ? tgl_indo2($date_1) : tgl_indo2($tgl_pertama) ; ?></b> s.d <b><?= isset($date_2) ? tgl_indo2($date_2) : tgl_indo2($tgl_terakhir) ; ?></b></h4>
											<h6 class="font-italic text-center mb-3" style="color : #4dcfc6;">*Data Yang Ditampilkan Berdasarkan Tanggal Isi Survey</h6>
										</div>
										<!-- <?= $this->session->flashdata('pesan'); ?> -->
										<div class="card-body table-responsive">
											<table id="tabelsurvey_ralan" class="table table-ligh table-bordered table-striped table-hover table-sm dt-responsive nowrap" style="width: 100%;">
												<thead class="thead-dark">
													<tr>
														<th class="text-center">No</th>
														<th class="text-center">Tanggal Isi</th>
														<th class="text-center">Tanggal Periksa</th>
														<th class="text-center">Spesialis</th>
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

			<!-- Footer -->
			<?= $this->load->view('/template/admin_footer',null,true); ?>

			</div>
			<!-- End of Content Wrapper -->
			</div>
			<!-- End of Page Wrapper -->

			<!-- Bottom -->
			<?= $this->load->view('/template/admin_bottom',null,true); ?>

	</body>
</html>