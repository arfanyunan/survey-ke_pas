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
    								<h6>Data Berdasarkan Tahun</h6>
									<form class="user" action="<?= base_url('admin/data_grafik_igd'); ?>" method="POST">
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
    					</div>
    					<!-- Main content -->
    					<div class="content-header">
    						<div class="container-fluid">
    							<div class="row mb-2">
    								<div class="col-lg-12">
    									<div class="card card-success card-outline">
										<div class="card-header bg-white">
											<h4 class="card-title text-center">Tabel Grafik Survey Kepuasan Pasien IGD Tahun <b><?php $this->input->post('tahun') == TRUE ? $tahun =  $this->input->post('tahun') : $tahun = date('Y'); echo $tahun; ?></b></h4>
											<h6 class="font-italic text-center mb-3" style="color : #4dcfc6;">*Data Yang Ditampilkan Berdasarkan Tanggal Isi Survey</h6>
										</div>
    										<div class="card-body table-responsive">
											<table id="tabelsurvey_grafik_ranap" class="table table-bordered align-middle table-hover dt-responsive nowrap" style="width: 100%;">
    												<thead class="thead-dark">
    													<tr>
    														<th class="text-center bg_44" rowspan="2" style="display:none;">Bulan</th>
															<th class="text-center bg_44" rowspan="2">Bulan</th>
    														<th class="text-center bg_44" rowspan="2">Tahun</th>
    														<th class="text-center bg_44" colspan="2">Pertanyaan 1</th>
    														<th class="text-center bg_44" colspan="2">Pertanyaan 2</th>
    														<th class="text-center bg_44" colspan="2">Pertanyaan 3</th>
    														<th class="text-center bg_44" colspan="2">Pertanyaan 4</th>
    														<th class="text-center bg_44" colspan="2">Pertanyaan 5</th>
    													</tr>
														<tr class="text-center">
															<th class="text-center bg_44">Y</th>
															<th class="text-center bg_44">T</th>
															<th class="text-center bg_44">Y</th>
															<th class="text-center bg_44">T</th>
															<th class="text-center bg_44">Y</th>
															<th class="text-center bg_44">T</th>
															<th class="text-center bg_44">Y</th>
															<th class="text-center bg_44">T</th>
															<th class="text-center bg_44">Y</th>
															<th class="text-center bg_44">T</th>
    													</tr>
    												</thead>
    												<tbody>
    													<?php $no = 1;
														foreach ($data_admin as $dt_admin) : ?>
    														<tr>
    															<td style="display:none;" class="text-center"><?= $dt_admin['bulanku']; ?></td>
																<td class="text-center"><?= $dt_admin['bulan']; ?></td>
    															<td class="text-center"><?= $dt_admin['tahun']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p1_ya']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p1_tidak']; ?></td>
    															<td class="text-center"><?= $dt_admin['p2_ya']; ?></td>
    															<td class="text-center"><?= $dt_admin['p2_tidak']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p3_ya']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p3_tidak']; ?></td>
    															<td class="text-center"><?= $dt_admin['p4_ya']; ?></td>
    															<td class="text-center"><?= $dt_admin['p4_tidak']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p5_ya']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p5_tidak']; ?></td>
    														</tr>
    													<?php $no++;
														endforeach ?>
    												</tbody>
    											</table>
    										</div>

											<div class="mt-4">
												<canvas id="cnv_grafik_igd_pertanyaan"></canvas>
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