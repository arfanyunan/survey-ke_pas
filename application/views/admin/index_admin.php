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
					<div class="row">

						<!-- IGD -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-success shadow h-100 py-2">
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
							<div class="card border-left-info shadow h-100 py-2">
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
							<div class="card border-left-warning shadow h-100 py-2">
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
							<div class="card border-left-primary shadow h-100 py-2">
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

					<!-- Bar Chart -->
					<div class="row justify-content-center">
						<!-- IGD -->
						<div class="col-md-4 mb-4">
							<div class="card shadow p-3">
								<div>
									<h5 class="text-center">Grafik Survay (IGD) <?php echo $tahun_input; ?></h5>
									<!-- Coba -->
									<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  									<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@1.0.0"></script>
									<canvas id="cnv_grafik_igd"></canvas>
								</div>
							</div>
						</div>
						<!-- Ranap -->
						<div class="col-md-4 mb-4">
							<div class="card shadow p-3">
								<div>
									<h5 class="text-center">Grafik Survay (Ranap) <?php echo $tahun_input; ?></h5>
									<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  									<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@1.0.0"></script>
									<canvas id="cnv_grafik_ranap"></canvas>
								</div>
							</div>
						</div>
						<!-- Ralan -->
						<div class="col-md-4 mb-4">
							<div class="card shadow p-3">
								<div>
									<h5 class="text-center">Grafik Survay (Rawat Jalan) <?php echo $tahun_input; ?></h5>
									<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  									<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@1.0.0"></script>
									<canvas id="cnv_grafik_ralan"></canvas>
								</div>
							</div>
						</div>
					</div>
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
			<!-- Button Data Tables -->
			<script src="<?= base_url('assets/datatables/Buttons-2.3.6/js/dataTables.buttons.min.js'); ?>"></script>

    		<!-- Page level plugins -->
    		<script src="<?= base_url('assets/chart.js/Chart.min.js'); ?>"></script>
    		<script src="<?= base_url('assets/js/demo/chart-bar-demo.js'); ?>"></script>
    		<script src="<?= base_url('assets/js/chart-ralan.js'); ?>"></script>
    		<script src="<?= base_url('assets/js/chart-ranap.js'); ?>"></script>
    		<script src="<?= base_url('assets/js/chart-igd.js'); ?>"></script>
    		<script>
    			const base_url = "/sadewa-survey/";
    			$(document).ready(function() {});
    		</script>


