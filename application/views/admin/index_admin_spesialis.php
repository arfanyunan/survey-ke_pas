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
					<!-- Main content -->
					<div class="content-header">
						<div class="container-fluid">
							<div class="row mb-2">
								<div class="col-lg-12">
									<div class="card card-success card-outline">
									<div class="card-header bg-white">
										<div class="row mt-2">
											<div class="col-sm-3 col-md-3">
												<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tambahSpesialis" data-toggle="tooltip" data-placement="top" title="Tambah Spesialis"><i class="fas fa-plus mr-2"></i>Tambah Spesialis</button>
											</div>
											<div class="col-sm-6 col-md-6">
												<h4 class="card-title text-center">Tabel Data Spesialis <b>RSKIA SADEWA</b></h4>
											</div>
											<div class="col-sm-3 col-md-3">
											<div class="text-center">
												<?= $this->session->flashdata('massage'); ?>
											</div>
											</div>
										</div>
									</div>
										<div class="card-body table-responsive">

											<table id="tabelsurvey_spesialis" class="table table-light table-bordered table-striped table-hover table-sm dt-responsive nowrap" style="width: 100%;">
												<thead class="thead-dark">
													<tr>
														<th class="text-center">No</th>
														<th class="text-center">Kode Spesialis</th>
														<th class="text-center">Nama Spesialis</th>
														<th class="text-center">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php $no = 1;
													foreach ($data_admin as $dt_admin) : ?>
														<tr>
															<td class="text-center col-sm-1"><?= $no; ?></td>
															<td class="text-center col-sm-5"><?= $dt_admin['kd_sps']; ?></td>
															<td class="text-center col-sm-5"><?= $dt_admin['nm_sps']; ?></td>
															<td class="text-center col-sm-1">
																<button type="button" class="btn bg_admin text-white btn-sm" data-toggle="modal" data-target="#editSpesialis<?= $dt_admin['kd_sps']; ?>"data-toggle="tooltip" data-placement="top" title="Edit Spesialis"><i class="fas fa-pen"></i></button>
															</td>
														</tr>

														<!-- Modal Edit Spesialis -->
														<div class="modal fade" id="editSpesialis<?= $dt_admin['kd_sps']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
															<div class="modal-header text-white bg_admin">
																<h5 class="modal-title" id="staticBackdropLabel">Edit Spesialis</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
															<form class="user" action="<?= base_url('admin/edit_spesialis'); ?>" method="POST">
																<div class="mb-3">
																	<strong for="exampleFormControlInput1" class="form-label">Kode Spesialis:</strong>
																	<input type="text" class="form-control rounded-pill mt-2" readonly value="<?= $dt_admin['kd_sps']; ?>">
																	<input type="hidden" class="form-control rounded-pill mt-2" name="txt_kd_sps" id="txt_kd_sps" value="<?= $dt_admin['kd_sps']; ?>">
																</div>
																
																<div class="mb-3">
																	<strong for="exampleFormControlInput1" class="form-label">Nama Spesialis:</strong>
																	<input type="text" class="form-control rounded-pill mt-2" name="txt_nm_sps" id="txt_nm_sps" required placeholder="Masukan Nama Spesialis" value="<?= $dt_admin['nm_sps']; ?>">
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
			<?= $this->load->view('/template/admin_footer',null,true); ?>

			</div>
			<!-- End of Content Wrapper -->
			</div>
			<!-- End of Page Wrapper -->

			<!-- Bottom -->
			<?= $this->load->view('/template/admin_bottom',null,true); ?>
	</body>
</html>