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

		$filter_tahun = date('Y');
		$data['periode_thn'] = $filter_tahun;
		
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
			$hari_ini = date("Y-m-d");
			$tgl_pertama = date('Y-m-01', strtotime($hari_ini));
			$tgl_terakhir = date('Y-m-t', strtotime($hari_ini));
			$data['data_admin']  = $this->admin_model->showDate1Date2Igd($tgl_pertama, $tgl_terakhir);
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
			$hari_ini = date("Y-m-d");
			$tgl_pertama = date('Y-m-01', strtotime($hari_ini));
			$tgl_terakhir = date('Y-m-t', strtotime($hari_ini));
			$data['data_admin']  = $this->admin_model->showDate1Date2Ralan($tgl_pertama, $tgl_terakhir);
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
			$hari_ini = date("Y-m-d");
			$tgl_pertama = date('Y-m-01', strtotime($hari_ini));
			$tgl_terakhir = date('Y-m-t', strtotime($hari_ini));
			$data['data_admin']  = $this->admin_model->showDate1Date2Ranap($tgl_pertama, $tgl_terakhir);
		}

		$this->load->view('admin/index_admin_ranap', $data);
	}

	public function data_grafik_ranap()
	{

		$this->load->database('sadewa_survey');
		$data['title'] = "Survey Kepuasan Pasien RSKIA Sadewa";

		// Tanggal Indonesia
		function tgl_indo4($tanggal)
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
		if ($this->input->post('tahun') == true) {
			$bulan   = $this->input->post('bulan');
			$tahun   = $this->input->post('tahun');
			$data['bulan'] = $bulan;
			$data['tahun'] = $tahun;
			$data['data_admin']  =  $this->admin_model->jumlah_ranap_pertanyaan_date($bulan,$tahun);
		} else {
			$data['data_admin']  = $this->admin_model->jumlah_ranap_pertanyaan_date_skrng();
		}

		$this->load->view('admin/index_admin_grafik_ranap', $data);
	}

	public function data_grafik_ralan()
	{

		$this->load->database('sadewa_survey');
		$data['title'] = "Survey Kepuasan Pasien RSKIA Sadewa";

		// Tanggal Indonesia
		function tgl_indo5($tanggal)
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
		if ($this->input->post('bulan') == true) {
			$bulan   = $this->input->post('bulan');
			$tahun   = $this->input->post('tahun');
			$data['bulan'] = $bulan;
			$data['tahun'] = $tahun;
			$data['data_admin']  =  $this->admin_model->jumlah_ralan_pertanyaan_date($bulan,$tahun);
		} else {
			$data['data_admin']  = $this->admin_model->jumlah_ralan_pertanyaan_date_skrng();
		}

		$this->load->view('admin/index_admin_grafik_ralan', $data);
	}

	public function data_grafik_igd()
	{

		$this->load->database('sadewa_survey');
		$data['title'] = "Survey Kepuasan Pasien RSKIA Sadewa";

		// Tanggal Indonesia

		if ($this->input->post('tahun') == true) {
			$periode_thn   = $this->input->post('tahun');
			$data['tahun'] = $periode_thn;
			$data['data_admin']  =  $this->admin_model->jumlah_igd_pertanyaan_date($periode_thn);
		} else {
			$periode_thn = date("Y");
			$data['data_admin']  = $this->admin_model->jumlah_igd_pertanyaan_date($periode_thn);
		}

		$this->load->view('admin/index_admin_grafik_igd', $data);
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

	public function grafik_ranap_bangsal()
	{
		if ($this->input->method(true) == "GET") {
			$data = $this->admin_model->jumlah_ranap_bangsal($this->input->get('tahun'));
			$result = array();
			foreach ($data as $dt) {
				$result['labels1'][] = $dt['bangsal'];
				$result['data1'][] = $dt['p1_kurang_sekali'];
				$result['data2'][] = $dt['p1_kurang'];
				$result['data3'][] = $dt['p1_cukup'];
				$result['data4'][] = $dt['p1_baik'];
				$result['data5'][] = $dt['p1_baik_sekali'];
			};
			echo json_encode($result);
		}
	}

	public function grafik_ranap_pertanyaan()
	{
		if ($this->input->method(true) == "GET") {
			$data = $this->admin_model->jumlah_ranap_pertanyaan($this->input->get('bulan'), $this->input->get('tahun'));
			$result = array();
			foreach ($data as $dt) {
				$result['labels'][] = $dt['bangsal'];
				$result['data1'][] = $dt['p1_kurang_sekali'];
				$result['data2'][] = $dt['p1_kurang'];
				$result['data3'][] = $dt['p1_cukup'];
				$result['data4'][] = $dt['p1_baik'];
				$result['data5'][] = $dt['p1_baik_sekali'];

				$result['data6'][] = $dt['p2_kurang_sekali'];
				$result['data7'][] = $dt['p2_kurang'];
				$result['data8'][] = $dt['p2_cukup'];
				$result['data9'][] = $dt['p2_baik'];
				$result['data10'][] = $dt['p2_baik_sekali'];

				$result['data11'][] = $dt['p3_kurang_sekali'];
				$result['data12'][] = $dt['p3_kurang'];
				$result['data13'][] = $dt['p3_cukup'];
				$result['data14'][] = $dt['p3_baik'];
				$result['data15'][] = $dt['p3_baik_sekali'];

				$result['data16'][] = $dt['p4_kurang_sekali'];
				$result['data17'][] = $dt['p4_kurang'];
				$result['data18'][] = $dt['p4_cukup'];
				$result['data19'][] = $dt['p4_baik'];
				$result['data20'][] = $dt['p4_baik_sekali'];

				$result['data21'][] = $dt['p5_ya'];
				$result['data22'][] = $dt['p5_tidak'];

				$result['data23'][] = $dt['p6_ya'];
				$result['data24'][] = $dt['p6_tidak'];

				$result['data25'][] = $dt['p7_ya'];
				$result['data26'][] = $dt['p7_tidak'];
			};
			echo json_encode($result);
		}
	}

	public function grafik_ralan_pertanyaan()
	{
		if ($this->input->method(true) == "GET") {
			$data = $this->admin_model->jumlah_ralan_pertanyaan($this->input->get('bulan'), $this->input->get('tahun'));
			$result = array();
			foreach ($data as $dt) {
				$result['labels'][] = $dt['nm_dokter'];
				$result['data1'][] = $dt['p1_kurang_sekali'];
				$result['data2'][] = $dt['p1_kurang'];
				$result['data3'][] = $dt['p1_cukup'];
				$result['data4'][] = $dt['p1_baik'];
				$result['data5'][] = $dt['p1_baik_sekali'];

				$result['data6'][] = $dt['p2_kurang_sekali'];
				$result['data7'][] = $dt['p2_kurang'];
				$result['data8'][] = $dt['p2_cukup'];
				$result['data9'][] = $dt['p2_baik'];
				$result['data10'][] = $dt['p2_baik_sekali'];

				$result['data11'][] = $dt['p3_kurang_sekali'];
				$result['data12'][] = $dt['p3_kurang'];
				$result['data13'][] = $dt['p3_cukup'];
				$result['data14'][] = $dt['p3_baik'];
				$result['data15'][] = $dt['p3_baik_sekali'];

				$result['data16'][] = $dt['p4_kurang_sekali'];
				$result['data17'][] = $dt['p4_kurang'];
				$result['data18'][] = $dt['p4_cukup'];
				$result['data19'][] = $dt['p4_baik'];
				$result['data20'][] = $dt['p4_baik_sekali'];

				$result['data21'][] = $dt['p5_kurang_sekali'];
				$result['data22'][] = $dt['p5_kurang'];
				$result['data23'][] = $dt['p5_cukup'];
				$result['data24'][] = $dt['p5_baik'];
				$result['data25'][] = $dt['p5_baik_sekali'];
			};
			echo json_encode($result);
		}
	}

	public function grafik_igd_pertanyaan()
	{
		if ($this->input->method(true) == "GET") {
			$data = $this->admin_model->jumlah_igd_pertanyaan($this->input->get('tahun'));
			$result = array();
			foreach ($data as $dt) {
				$result['labels'][] = $dt['bulan'];
				$result['data1'][]  = $dt['p1_ya'];
				$result['data2'][]  = $dt['p1_tidak'];
				$result['data3'][]  = $dt['p2_ya'];
				$result['data4'][]  = $dt['p2_tidak'];
				$result['data5'][]  = $dt['p3_ya'];
				$result['data6'][]  = $dt['p3_tidak'];
				$result['data7'][]  = $dt['p4_ya'];
				$result['data8'][]  = $dt['p4_tidak'];
				$result['data9'][]  = $dt['p5_ya'];
				$result['data10'][] = $dt['p5_tidak'];
			};
			echo json_encode($result);
		}
	}
}
