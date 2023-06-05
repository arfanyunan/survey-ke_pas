<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('nik')) {
			$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Anda Tidak Dapat Mengakses Halaman Tersebut</div>');
			redirect('survey');
		}
		$this->load->database();
		$this->load->model('admin_model');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->load->database('sadewa_survey');

		// Jika inputan tahun == True
		if ($this->input->post('tahun') == true) {
			$filter_tahun = $this->input->post('tahun');
			$data['periode_thn'] = date('Y');
			$data['periode_thn'] = $filter_tahun;
			$data['jumlah_ralan_count'] =  $this->admin_model->jumlah_ralan_count($filter_tahun);
		} else {
			$filter_tahun = date('Y');
			$data['periode_thn'] = $filter_tahun;
			$data['jumlah_ralan_count'] =  $this->admin_model->jumlah_ralan_count($filter_tahun);
		}

		// Jumlah IGD Berdasarkan Bulan
		$data['jumlah_igd'] =  $this->admin_model->jumlah_igd_thn($filter_tahun);

		// Jumlah Ranap Berdasarkan Bulan
		$data['jumlah_ranap'] =  $this->admin_model->jumlah_ranap_thn($filter_tahun);

		// Jumlah Ralan Berdasarkan Bulan
		$data['jumlah_ralan'] =  $this->admin_model->jumlah_ralan_thn($filter_tahun);


		// Menampilkan Tahun
		if ($this->input->post('tahun') == true) {
			$tahun_input = $this->input->post('tahun');
			$data['tahun_input'] = $tahun_input;
		} else {
			$data['tahun_input'] = date('Y');
		}
		$this->load->view('admin/index_admin', $data);
	}

	public function igd()
	{
		$this->load->database('sadewa_survey');

		// Tanggal Indonesia
		function tgl_indo($tanggal)
		{
			$bulan = array(
				1 =>
				'January',
				'February',
				'March',
				'April',
				'May',
				'June',
				'July',
				'August',
				'September',
				'October',
				'November',
				'December'
			);
			$pecahkan = explode('-', $tanggal);

			// variabel pecahkan 0 = tanggal
			// variabel pecahkan 1 = bulan
			// variabel pecahkan 2 = tahun

			return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
		}

		if ($this->input->post('date_1') == true) {
			$date_1  = $this->input->post('date_1');
			$date_2  = $this->input->post('date_2');
			$data['date_1'] = $date_1;
			$data['date_2'] = $date_2;
			$data['data_admin']  =  $this->admin_model->showDate1Date2Igd($date_1, $date_2);
		} else {
			$data['data_admin']  = $this->admin_model->showAllDataIgd(date('Y-m'));
		}

		$this->load->view('admin/index_admin_igd', $data);
	}

	public function ralan()
	{
		$this->load->database('sadewa_survey');

		function tgl_indo2($tanggal)
		{
			$bulan = array(
				1 =>
				'January',
				'February',
				'March',
				'April',
				'May',
				'June',
				'July',
				'August',
				'September',
				'October',
				'November',
				'December'
			);
			$pecahkan = explode('-', $tanggal);

			// variabel pecahkan 0 = tanggal
			// variabel pecahkan 1 = bulan
			// variabel pecahkan 2 = tahun

			return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
		}

		if ($this->input->post('date_1') == true) {
			$date_1  = $this->input->post('date_1');
			$date_2  = $this->input->post('date_2');
			$data['date_1'] = $date_1;
			$data['date_2'] = $date_2;
			$data['data_admin']  =  $this->admin_model->showDate1Date2Ralan($date_1, $date_2);
		} else {
			$data['data_admin']  = $this->admin_model->showAllDataRalan(date('Y-m'));
		}

		$this->load->view('template/admin_header');
		$this->load->view('admin/index_admin_ralan', $data);
	}

	public function ranap()
	{

		$this->load->database('sadewa_survey');
		$data['title'] = "Survey Kepuasan Pasien RSKIA Sadewa";

		// Tanggal Indonesia
		function tgl_indo3($tanggal)
		{
			$bulan = array(
				1 =>
				'January',
				'February',
				'March',
				'April',
				'May',
				'June',
				'July',
				'August',
				'September',
				'October',
				'November',
				'December'
			);
			$pecahkan = explode('-', $tanggal);

			// variabel pecahkan 0 = tanggal
			// variabel pecahkan 1 = bulan
			// variabel pecahkan 2 = tahun

			return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
		}

		if ($this->input->post('date_1') == true) {
			$date_1  = $this->input->post('date_1');
			$date_2  = $this->input->post('date_2');
			$data['date_1'] = $date_1;
			$data['date_2'] = $date_2;
			$data['data_admin']  =  $this->admin_model->showDate1Date2Ranap($date_1, $date_2);
		} else {
			$data['data_admin']  = $this->admin_model->showAllDataRanap(date('Y-m'));
		}

		$this->load->view('admin/index_admin_ranap', $data);
	}


public function dokter()
{
		$this->load->database('sadewa_survey');
		
		$data['data_admin']  = $this->admin_model->showAllDataDokter();
		$data['data_admin_sps']  = $this->admin_model->showAllDataDokterSpesialis();

		
		$this->load->view('admin/index_admin_dokter', $data);
		$this->load->view('template/form');
}

public function tambah_dokter()
{
		$data_dokter = array(
			'kd_dokter' => $this->input->post('txt_kd_dokter'),
			'nm_dokter' => $this->input->post('txt_nm_dokter'),
			'kd_sps' => $this->input->post('cmb_kd_sps'),
			'status_aktif' => $this->input->post('cmb_status')
		);
		$this->admin_model->insertAdminDokter($data_dokter);
	
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Menambahkan Data Dokter</div>');
		redirect("admin/dokter");

}

public function edit_dokter()
{

	$kd_dokter = $this->input->post('txt_kd_dokter');
	$nm_dokter = $this->input->post('txt_nm_dokter');
	$kd_sps    = $this->input->post('cmb_kd_sps');

	$this->db->set('nm_dokter', $nm_dokter);
	$this->db->set('kd_sps', $kd_sps);
	$this->db->where('kd_dokter', $kd_dokter);
	$this->db->update('dokter');

	$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Mengedit Data Dokter</div>');
	redirect("admin/dokter");
	
}

public function edit_status()
{

	$kd_dokter    = $this->input->post('txt_kd_dokter');
	$status_aktif = $this->input->post('cmb_status_dokter');

	$this->db->set('status_aktif', $status_aktif);
	$this->db->where('kd_dokter', $kd_dokter);
	$this->db->update('dokter');

	$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Mengedit Data Status Dokter</div>');
	redirect("admin/dokter");
	
}

public function spesialis()
{
		$this->load->database('sadewa_survey');
		
		$data['data_admin']  = $this->admin_model->showAllDataDokterSpesialis();

		$this->load->view('admin/index_admin_spesialis', $data);
		$this->load->view('template/form');
}

public function tambah_spesialis()
{

	$data_spesialis = array(
		
		'kd_sps' => $this->input->post('txt_kd_spesialis'),
		'nm_sps' => $this->input->post('txt_nm_spesialis'),
	);
		$this->admin_model->insertAdminSpesialis($data_spesialis);
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Menambahkan Data Bangsal</div>');
		redirect("admin/spesialis");

}

public function edit_spesialis()
{

	$kd_sps = $this->input->post('txt_kd_sps');
	$nm_sps = $this->input->post('txt_nm_sps');

	$this->db->set('nm_sps', $nm_sps);
	$this->db->where('kd_sps', $kd_sps);
	$this->db->update('spesialis');

	$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Mengedit Data Spesialis</div>');
	redirect("admin/spesialis");
	
}

public function bangsal()
{
		$this->load->database('sadewa_survey');
		
		$data['data_admin']  = $this->admin_model->showAllDataBangsal();

		$this->load->view('admin/index_admin_bangsal', $data);
		$this->load->view('template/form');
}

public function tambah_bangsal()
{

	$nm_bangsal = $this->input->post('txt_nm_bangsal');
    $this->db->where('nm_bangsal', $nm_bangsal);

	$data_bangsal = array(
		'nm_bangsal' => $this->input->post('txt_nm_bangsal'),
	);
	$this->admin_model->insertAdminBangsal($data_bangsal);
	$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Menambahkan Data Bangsal</div>');
	redirect("admin/bangsal");

}

public function edit_bangsal()
{

	$kd_bangsal = $this->input->post('txt_kd_bangsal');
	$nm_bangsal = $this->input->post('txt_nm_bangsal');

	$this->db->set('nm_bangsal', $nm_bangsal);
	$this->db->where('kd_bangsal', $kd_bangsal);
	$this->db->update('bangsal');

	$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Mengedit Data Bangsal</div>');
	redirect("admin/bangsal");
	
}

public function user()
{
		$this->load->database('sadewa_survey');
		$data['data_admin']  = $this->admin_model->showAllDataUser();

		$this->load->view('admin/index_admin_user', $data);
		$this->load->view('template/form');
}
  
public function tambah_user(){

	$nik  = $this->input->post('txt_nik');
	$nama = $this->input->post('txt_nama');
	$password = $this->input->post('txt_password');
	$password2 = $this->input->post('txt_password2');
    $this->db->where('nik', $nik);
    $result = $this->db->get('user');

    if($result->num_rows() > 0){
		$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Gagal Menambah User. NIK Sudah Terdaftar</div>');
		redirect("admin/user");
        return false;
    }else{

		if($password != $password2){
			$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Gagal Menambah User. Password dan Ulangi Password Tidak Sesuai</div>');
			redirect("admin/user");
			return false;
		}else{
			$data_user = array(
				
				'nik' => $this->input->post('txt_nik'),
				'nama' => $this->input->post('txt_nama'),
				'password' => password_hash($this->input->post('txt_password'), PASSWORD_DEFAULT),
				'role_id' => 1,
				'date_created' => date('y-m-d')
			);
				$this->admin_model->insertAdminUser($data_user);
				$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Menambahkan User</div>');
				redirect("admin/user");
		}

	}

}

public function edit_user()
{

	$nik   = $this->input->post('txt_nik');
	$nama  = $this->input->post('txt_nama');

	$this->db->set('nama', $nama);
	$this->db->where('nik', $nik);
	$this->db->update('user');

	$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Mengedit Data User</div>');
	redirect("admin/user");
	
}

public function ganti_password()
{

	$nik       = $this->input->post('txt_nik');
	$password  = $this->input->post('txt_password');
	$password2 = $this->input->post('txt_password2');

	$enkripsi  = password_hash($password, PASSWORD_DEFAULT);

	if($password != $password2){
		$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Gagal Ganti Password. Password dan Ulangi Password Tidak Sesuai</div>');
		redirect("admin/user");
		return false;
	}else{
		$this->db->set('password', $enkripsi);
		$this->db->where('nik', $nik);
		$this->db->update('user');
	
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Password Baru Berhasil Disimpan</div>');
		redirect("admin/user");
	}
	
}

public function grafik_ralan()
{
	if ($this->input->method(true) == "GET") {
		$data = $this->admin_model->jumlah_ralan_count($this->input->get('tahun'));
		$result = array();
		foreach ($data as $dt) {
			$result['labels'][] = $dt['bulan'];
			$result['data'][] = $dt['jumlah'];
		}
		echo json_encode($result);
	}
}

	public function grafik_ranap()
	{
		if ($this->input->method(true) == "GET") {
			$data = $this->admin_model->jumlah_ranap_count($this->input->get('tahun'));
			$result = array();
			foreach ($data as $dt) {
				$result['labels'][] = $dt['bulan'];
				$result['data'][] = $dt['jumlah'];
			}
			echo json_encode($result);
		}
	}

	public function grafik_igd()
	{
		if ($this->input->method(true) == "GET") {
			$data = $this->admin_model->jumlah_igd_count($this->input->get('tahun'));
			$result = array();
			foreach ($data as $dt) {
				$result['labels'][] = $dt['bulan'];
				$result['data'][] = $dt['jumlah'];
			}
			echo json_encode($result);
		}
	}
}
