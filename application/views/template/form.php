<!-- Modal Tambah Dokter -->
<div class="modal fade" id="tambahDokter" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white bg_admin">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Dokter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="user" action="<?= base_url('admin/tambah_dokter'); ?>" method="POST">
        <div class="mb-3">
			<strong for="exampleFormControlInput1" class="form-label">Nama Dokter:</strong>
			<input type="text" class="form-control rounded-pill mt-2" name="txt_nm_dokter" id="txt_nm_dokter" required placeholder="Masukan Nama Dokter">
		</div>
        <div class="mb-3">
		        <strong for="fw-bold">Kode Spesialis:</strong>
				<div class="form-group">
		    	<select class="form-control select2bs4 rounded-pill mt-2 select2-hidden-accessible" required style="width: 100%;" id="cmb_kd_sps" name="cmb_kd_sps" required="" data-select2-id="cmb_kd_sps" tabindex="-1" aria-hidden="true">
          <option selected="selected" value="">-- Pilih Dokter --</option>
          <?php foreach ($data_admin_sps as $dt_admin) : ?>
              <option value="<?= $dt_admin['kd_sps']; ?>"><?= $dt_admin['kd_sps']; ?> - <?= $dt_admin['nm_sps']; ?></option>
          <?php endforeach; ?>

				  </select>
        <span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="1" style="width: 100%;">
			</div>
		</div>
        <div class="mb-3">
  		        <strong for="fw-bold">Status Aktif:</strong>
          <div class="form-group">
              <select class="form-control select2bs4 rounded-pill mt-2 select2-hidden-accessible" required style="width: 100%;" id="cmb_status" name="cmb_status" required="" data-select2-id="cmb_status" tabindex="-1" aria-hidden="true">
            <option value="0" data-select2-id="0">Aktif</option>
            <option value="1" data-select2-id="1">Tidak Aktif</option>
          </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="1" style="width: 100%;">
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

<!-- Modal Tambah Spesialis -->
<div class="modal fade" id="tambahSpesialis" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white bg_admin">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Spesialis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="user" action="<?= base_url('admin/tambah_spesialis'); ?>" method="POST">
        <div class="mb-3">
			<strong for="exampleFormControlInput1" class="form-label">Nama Spesialis:</strong>
			<input type="text" class="form-control rounded-pill mt-2" name="txt_nm_spesialis" id="txt_nm_spesialis" required placeholder="Masukan Nama Spesialis">
		</div>
		<div class="text-right">
			<button type="submit" style="background-color: #4dcfc6;" class="btn text-light rounded-pill">Simpan</button>
		</div>
	  </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah Bangsal -->
<div class="modal fade" id="tambahBangsal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white bg_admin">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Bangsal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="user" action="<?= base_url('admin/tambah_bangsal'); ?>" method="POST">
        <div class="mb-3">
			<strong for="exampleFormControlInput1" class="form-label">Nama Bangsal:</strong>
			<input type="text" class="form-control rounded-pill mt-2" name="txt_nm_bangsal" id="txt_nm_bangsal" required placeholder="Masukan Nama Bangsal">
		</div>
		<div class="text-right">
			<button type="submit" style="background-color: #4dcfc6;" class="btn text-light rounded-pill">Simpan</button>
		</div>
	  </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal Tambah User -->
<div class="modal fade" id="tambahUser" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white bg_admin">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="user" action="<?= base_url('admin/tambah_user'); ?>" method="POST">
        <div class="mb-3">
     			<strong for="exampleFormControlInput1" class="form-label">NIK</strong>
          <input type="text" class="form-control rounded-pill mt-2" name="txt_nik" id="txt_nik" pattern="[0-9]+" Title="NIK Harus Berupa Angka" required placeholder="Masukan NIK">
        </div>
        <div class="mb-3">
     			<strong for="exampleFormControlInput1" class="form-label">Nama</strong>
          <input type="text" class="form-control rounded-pill mt-2" name="txt_nama" id="txt_nama" required placeholder="Masukan Nama">
        </div>
        <div class="mb-3">
				  <label for="disabledSelect" class="form-label ms-1">Password</label>
						<div class="input-group">
							  <input type="password" class="form-control rounded-pill input-md" name="txt_password" data-toggle="password" required autocomplete="off" title="Hanya Bisa Huruf dan Angka" pattern="[A-Za-z0-9]+" placeholder="Masukan Password">
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




