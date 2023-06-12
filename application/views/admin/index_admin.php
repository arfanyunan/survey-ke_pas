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
					<ul class=" navbar-nav ml-auto">
						<!-- kosong -->
					</ul>
				</nav>
				<div class="container-fluid">
					<div class="row mb-3">
						<div class="col-md-5">
							<form class="user" action="<?= base_url('admin/index'); ?>" method="POST">
								<div class="input-group shadow input-group-sm">
									<select class="form-control" id="cmb_tahun" name="tahun" aria-label="Default select example">
										<?php
										for ($tahun = date('Y'); $tahun > date('Y') - 3; $tahun--) {
											echo '<option value="' . $tahun . '" ' . ($this->input->post('tahun') == $tahun ? "selected" : ($tahun == date('Y') ? "selected" : "")) . '>' . 'Tahun ' . $tahun . '</option>';
										} ?>
									</select>
									<span class="input-group-append">
										<button type="submit" class="btn btn-info btn-flat">Lihat Data</button>
									</span>
								</div>
							</form>
						</div>
					</div>


					<!-- Bar Chart -->
					<div class="card shadow p-3">
					<h4 class="text-center mt-3 mb-3">Grafik Survey Berdasarkan Jumlah Pengisi Survey</h4>
					<div class="row">
						<!-- IGD -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-success h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
												Total Survey (IGD) <br> <?php echo date('F') . ' ' . $tahun_input; ?></div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_igd; ?> </div>
										</div>
										<div class="col-auto">
											<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Ranap -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-info h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Survey (Ranap)<br> <?php echo date('F') . ' ' . $tahun_input; ?>
											</div>
											<div class="row no-gutters align-items-center">
												<div class="col-auto">
													<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $jumlah_ranap; ?></div>
												</div>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Ralan -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-warning h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
												Total Survey (Ralan) <br> <?php echo date('F') . ' ' . $tahun_input; ?></div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_ralan; ?> </div>
										</div>
										<div class="col-auto">
											<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Total -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
												Total Survey <br> <?php echo date('F') . ' ' . $tahun_input; ?></div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?php
												$jumlah = $jumlah_ranap + $jumlah_ralan + $jumlah_igd;
												echo $jumlah;
												?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-hospital fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<!-- IGD -->
						<div class="col-md-4 mb-4">
							<div class="card p-3">
								<div>
									<h5 class="text-center">IGD <?php echo $tahun_input; ?></h5>
									<canvas id="cnv_grafik_igd"></canvas>
								</div>
							</div>
						</div>
						<!-- Ranap -->
						<div class="col-md-4 mb-4">
							<div class="card p-3">
								<div>
									<h5 class="text-center">Rawat Inap <?php echo $tahun_input; ?></h5>
									<canvas id="cnv_grafik_ranap"></canvas>
								</div>
							</div>
						</div>
						<!-- Ralan -->
						<div class="col-md-4 mb-4">
							<div class="card p-3">
								<div>
									<h5 class="text-center">Rawat Jalan <?php echo $tahun_input; ?></h5>
									<canvas id="cnv_grafik_ralan"></canvas>
								</div>
							</div>
						</div>
					</div>
					</div>
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


