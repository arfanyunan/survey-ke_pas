<div class="container">
	<!-- Outer Row -->
	<div class="row justify-content-center">
		<div class="col-xl-6 col-lg-12 col-md-9">
			<div class="card o-hidden my-5" id="card-menu-pelayanan">
				<div class="card-body">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
						<div class="col-lg-12">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Sistem Survey Kepuasan Pasien<br><b style="color:#4dcfc6;">RSKIA SADEWA</b></h1>
									<?= $this->session->flashdata('massage'); ?>
								</div>
								<form class="user" method="post" action="<?= base_url('auth') ?>">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="Masukan NIK" value="<?= set_value('nik') ?>">
										<?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
									<div class="mb-3">
										<div class="input-group">
											<input type="password" class="form-control form-control-user" name="password" data-toggle="password" required autocomplete="off" title="Hanya Bisa Huruf dan Angka" pattern="[A-Za-z0-9]+" placeholder="Masukan Password">
											<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>	
										<div class="input-group-append">
											<span class="input-group-text ms-1 bg-light" style="border-radius: 0% 50% 50% 0%;"><i class="fa fa-eye"></i></span>
										</div>
										</div>
									</div>
										<hr>
									<button type="submit" style="background-color: #4dcfc6;" class="btn text-light btn-block btn-user">
										LOGIN
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>