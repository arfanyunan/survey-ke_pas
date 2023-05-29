<img class="img-fluid d-lg-block d-md-block d-sm-none d-none" src="<?= base_url('assets/img/header_3.png'); ?>"></img>
<img class="img-fluid d-lg-none d-md-none d-sm-block d-block" src="<?= base_url('assets/img/header_4.png'); ?>"></img>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-10">
			<p class="text-center mt-4">Terimakasih Telah Memilih <b style="color:#4dcfc6;">RSKIA SADEWA</b>. Bantu kami menjadi lebih baik lagi dengan mengisi Form Kepuasan Pasien di <b style="color:#4dcfc6;">RSKIA SADEWA.</b> Silahkan pilih dan klik tombol menu dibawah sesuai pelayanan yang akan dinilai.</p>
			<div class="card ps-3 pe-3 pt-3 mb-4" id="card-menu-pelayanan">

				<h4 class="text-center font-weight-bold" style="color: #4dcfc6;">Form Pelayanan Kepuasan Pasien</h4>

				<div class="row row-cols-2 row-cols-md-4 row-cols-sm-2 g-1 justify-content-center mt-3">
					<div class="col">
						<a href="survey/index_igd" class="nav-link mb-3">
							<div class="card gambar shadow_cus">
								<img src="<?= base_url('assets/img/igd.png'); ?>" class="card-img" alt="..." style="box-shadow: 0px 0px 10px 5px var(--brand2)">
							</div>
						</a>
					</div>
					<div class="col" id="left">
						<a href="survey/index_ralan" class="nav-link mb-3">
							<div class="card gambar shadow_cus">
								<img src="<?= base_url('assets/img/rawat_jalan.png'); ?>" class="card-img" alt="..." style="box-shadow: 0px 0px 10px 5px var(--brand2)">
							</div>
						</a>
					</div>
					<div class="col" id="right">
						<a href="survey/index_ranap" class="nav-link mb-3">
							<div class="card gambar shadow_cus">
								<img src="<?= base_url('assets/img/rawat_inap.png'); ?>" class="card-img" alt="..." style="box-shadow: 0px 0px 10px 5px var(--brand2)">
							</div>
						</a>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-10 mb-3 ">
						<div class="text-center pl-3 pr-3">
							<?= $this->session->flashdata('massage'); ?>
							<marquee behavior="center" direction="left">-- Terimakasih atas ketersediaan Anda untuk mengisi Form Kepuasan Pasien <b style="color:#4dcfc6;">RSKIA SADEWA</b> --</marquee>
						</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
