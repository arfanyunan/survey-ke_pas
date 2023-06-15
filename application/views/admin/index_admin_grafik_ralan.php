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
    								<h6>Data Berdasarkan Bulan dan Tahun Tahun</h6>
									<form class="user" action="<?= base_url('admin/data_grafik_ralan'); ?>" method="POST">
										<div class="input-group shadow input-group-sm">
											<select class="form-control" id="cmb_bulan" name="bulan" aria-label="Default select example">
												<?php
													echo '<option value="1"' . ($this->input->post('bulan') == TRUE ? ($this->input->post('bulan') == '1' ? "selected" : "") : (date('m') == '1' ? "selected" : "") )  . '>' . "January" . '</option>';
													echo '<option value="2"' . ($this->input->post('bulan') == TRUE ? ($this->input->post('bulan') == '2' ? "selected" : "") : (date('m') == '2' ? "selected" : "") )  . '>' . "February" . '</option>';
													echo '<option value="3"' . ($this->input->post('bulan') == TRUE ? ($this->input->post('bulan') == '3' ? "selected" : "") : (date('m') == '3' ? "selected" : "") )  . '>' . "March" . '</option>';
													echo '<option value="4"' . ($this->input->post('bulan') == TRUE ? ($this->input->post('bulan') == '4' ? "selected" : "") : (date('m') == '4' ? "selected" : "") ) . '>' . "April" . '</option>';
													echo '<option value="5"' . ($this->input->post('bulan') == TRUE ? ($this->input->post('bulan') == '5' ? "selected" : "") : (date('m') == '5' ? "selected" : "") )  . '>' . "May" . '</option>';
													echo '<option value="6"' . ($this->input->post('bulan') == TRUE ? ($this->input->post('bulan') == '6' ? "selected" : "") : (date('m') == '6' ? "selected" : "") )  . '>' . "June" . '</option>';
													echo '<option value="7"' . ($this->input->post('bulan') == TRUE ? ($this->input->post('bulan') == '7' ? "selected" : "") : (date('m') == '7' ? "selected" : "") ) . '>' . "July" . '</option>';
													echo '<option value="8"' . ($this->input->post('bulan') == TRUE ? ($this->input->post('bulan') == '8' ? "selected" : "") : (date('m') == '8' ? "selected" : "") ) . '>' . "August" . '</option>';
													echo '<option value="9"' . ($this->input->post('bulan') == TRUE ? ($this->input->post('bulan') == '9' ? "selected" : "") : (date('m') == '9' ? "selected" : "") )  . '>' . "September" . '</option>';
													echo '<option value="10"' . ($this->input->post('bulan') == TRUE ? ($this->input->post('bulan') == '10' ? "selected" : "") : (date('m') == '10' ? "selected" : "") )  . '>' . "October" . '</option>';
													echo '<option value="11"' . ($this->input->post('bulan') == TRUE ? ($this->input->post('bulan') == '11' ? "selected" : "") : (date('m') == '11' ? "selected" : "") )  . '>' . "November" . '</option>';
													echo '<option value="12"' . ($this->input->post('bulan') == TRUE ? ($this->input->post('bulan') == '12' ? "selected" : "") : (date('m') == '12' ? "selected" : "") )  . '>' . "December" . '</option>';
												?>
											</select>
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
										<h4 class="card-title text-center">Tabel Grafik Survey Kepuasan Pasien Rawat Jalan Bulan <b><?php $bulan = date('m'); $this->input->post('bulan') == TRUE ? $bulan =  $this->input->post('bulan') : $bulan = date('m'); echo edit_bulan($bulan); ?> <?php $this->input->post('tahun') == TRUE ? $tahun =  $this->input->post('tahun') : $tahun = date('Y'); echo $tahun; ?></b></h4>
											<h6 class="font-italic text-center mb-3" style="color : #4dcfc6;">*Data Yang Ditampilkan Berdasarkan Tanggal Isi Survey</h6>
										</div>
    										<div class="card-body table-responsive">
											<table id="tabelsurvey_grafik_ranap" class="table table-bordered align-middle table-hover dt-responsive nowrap" style="width: 100%;">
    												<thead class="thead-dark">
    													<tr>
    														<th class="text-center bg_44 align-middle" rowspan="2">No</th>
    														<!-- <th class="text-center bg_44 align-middle" rowspan="2">Bulan</th>
    														<th class="text-center bg_44 align-middle" rowspan="2">Tahun</th></th> -->
    														<th class="text-center bg_44 align-middle" rowspan="2">Nama Dokter</th>
    														<th class="text-center bg_44" colspan="5">Pertanyaan 1</th>
    														<th class="text-center bg_44" colspan="5">Pertanyaan 2</th>
    														<th class="text-center bg_44" colspan="5">Pertanyaan 3</th>
    														<th class="text-center bg_44" colspan="5">Pertanyaan 4</th>
    														<th class="text-center bg_44" colspan="5">Pertanyaan 5</th>
    													</tr>
														<tr class="text-center">
															<th class="text-center bg_44">KS</th>
															<th class="text-center bg_44">K</th>
															<th class="text-center bg_44">C</th>
															<th class="text-center bg_44">B</th>
															<th class="text-center bg_44">SB</th>
															<th class="text-center bg_44">KS</th>
															<th class="text-center bg_44">K</th>
															<th class="text-center bg_44">C</th>
															<th class="text-center bg_44">B</th>
															<th class="text-center bg_44">SB</th>
															<th class="text-center bg_44">KS</th>
															<th class="text-center bg_44">K</th>
															<th class="text-center bg_44">C</th>
															<th class="text-center bg_44">B</th>
															<th class="text-center bg_44">SB</th>
															<th class="text-center bg_44">KS</th>
															<th class="text-center bg_44">K</th>
															<th class="text-center bg_44">C</th>
															<th class="text-center bg_44">B</th>
															<th class="text-center bg_44">SB</th>
															<th class="text-center bg_44">KS</th>
															<th class="text-center bg_44">K</th>
															<th class="text-center bg_44">C</th>
															<th class="text-center bg_44">B</th>
															<th class="text-center bg_44">SB</th>
															
    													</tr>
    												</thead>
    												<tbody>
    													<?php $no = 1;
														foreach ($data_admin as $dt_admin) : ?>
    														<tr>
    															<td class="text-center"><?= $no; ?></td>
    															<!-- <td class="text-center"><?= $dt_admin['bulan']; ?></td>
    															<td class="text-center"><?= $dt_admin['tahun']; ?></td> -->
    															<td class="text-center font-weight-bold"><?= $dt_admin['nm_dokter']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p1_kurang_sekali']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p1_kurang']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p1_cukup']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p1_baik']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p1_baik_sekali']; ?></td>
    															<td class="text-center"><?= $dt_admin['p2_kurang_sekali']; ?></td>
    															<td class="text-center"><?= $dt_admin['p2_kurang']; ?></td>
    															<td class="text-center"><?= $dt_admin['p2_cukup']; ?></td>
    															<td class="text-center"><?= $dt_admin['p2_baik']; ?></td>
    															<td class="text-center"><?= $dt_admin['p2_baik_sekali']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p3_kurang_sekali']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p3_kurang']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p3_cukup']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p3_baik']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p3_baik_sekali']; ?></td>
    															<td class="text-center"><?= $dt_admin['p4_kurang_sekali']; ?></td>
    															<td class="text-center"><?= $dt_admin['p4_kurang']; ?></td>
    															<td class="text-center"><?= $dt_admin['p4_cukup']; ?></td>
    															<td class="text-center"><?= $dt_admin['p4_baik']; ?></td>
    															<td class="text-center"><?= $dt_admin['p4_baik_sekali']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p5_kurang_sekali']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p5_kurang']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p5_cukup']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p5_baik']; ?></td>
    															<td class="text-center bg_4"><?= $dt_admin['p5_baik_sekali']; ?></td>
    														</tr>
    													<?php $no++;
														endforeach ?>
    												</tbody>
    											</table>
    										</div>
											<div class="mt-4">
												<canvas id="cnv_grafik_ralan_pertanyaan"></canvas>
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