<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('survey_model');
	}

	public function index()
	{
		$this->load->database('sadewa_survey');
		$this->load->view('template/survey_header');
		$this->load->view('survey/index_survey');
		$this->load->view('template/survey_footer');
		$data['title'] = "Data Survey Pasien";
	}

	public function index_ralan()
	{
		$this->load->database('sadewa_survey');
		$data['spesialis'] = $this->survey_model->showAllDataDokterSpesialis();
		// $data['data_admin_sps'] = $this->survey_model->showAllDataDokterSpesialis();
		$this->load->view('template/survey_header');
		$this->load->view('survey/index_survey_ralan', $data);
		$this->load->view('template/survey_footer');
	}

	public function index_ranap()
	{
		$this->load->database('survey_sadewa');
		$data['data_bangsal']  = $this->survey_model->showAllDataBangsal();

		$this->load->view('template/survey_header');
		$this->load->view('survey/index_survey_ranap', $data);
		$this->load->view('template/survey_footer');
	}
	public function index_igd()
	{
		$this->load->database('survey_sadewa');
		$this->load->view('template/survey_header');
		$this->load->view('survey/index_survey_igd');
		$this->load->view('template/survey_footer');
	}

	public function simpan_ralan()
	{
		$data_survey = array(
			'tgl_isi' => date('Y-m-d H:i:s'),
			'tgl_periksa' => $this->input->post('tgl_periksa'),
			'kd_sps' => $this->input->post('spesialis'),
			'kd_dokter' => $this->input->post('dokter'),
			'nm_pasien' => $this->input->post('txt_nama'),
			'nm_petugas' => $this->input->post('txt_petugas'),
			'p1' => $this->input->post('p1'),
			'p2' => $this->input->post('p2'),
			'p3' => $this->input->post('p3'),
			'p4' => $this->input->post('p4'),
			'p5' => $this->input->post('p5'),
			'saran' => $this->input->post('ta_saran'),
			'kritik' => $this->input->post('ta_kritik')
		);
		$this->survey_model->insertSurveyRalan($data_survey);
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Terimakasih Telah Mengisi Survey Kepuasan Pasien Rawat Jalan</div>');
		redirect("/");
	}

	public function simpan_ranap()
	{

		$this->load->database('sadewa_survey');
		$data['data_bangsal']  = $this->survey_model->showAllDataBangsal();


		$data_survey = array(
			'tgl_isi' => date('Y-m-d H:i:s'),
			'tgl_ranap' => $this->input->post('tanggal_datang'),
			'pasien' => $this->input->post('txt_nama'),
			'petugas' => $this->input->post('txt_petugas'),
			'bangsal' => $this->input->post('cmb_bangsal'),
			// 'nm_dokter' => $this->input->post('cmb_dokter'),
			'p1' => $this->input->post('p1'),
			'p2' => $this->input->post('p2'),
			'p3' => $this->input->post('p3'),
			'p4' => $this->input->post('p4'),

			'p5' => $this->input->post('p5') . ($this->input->post('p5') == "Tidak" ? ($this->input->post('tap5') != NULL ? ', ' . $this->input->post('tap5') : $this->input->post('tap5')) : ""),
			'p6' => $this->input->post('p6') . ($this->input->post('p6') == "Tidak" ? ($this->input->post('tap6') != NULL ? ', ' . $this->input->post('tap6') : $this->input->post('tap6')) : ""),
			'p7' => $this->input->post('p7') . ($this->input->post('p7') == "Tidak" ? ($this->input->post('tap7') != NULL ? ', ' . $this->input->post('tap7') : $this->input->post('tap7')) : ""),
			'p8a' => $this->input->post('p8a'),
			'p8b' => $this->input->post('p8b'),
			'p8c' => $this->input->post('p8c'),
			'p8d' => $this->input->post('p8d'),
			'saran' => $this->input->post('ta_saran'),
			'kritik' => $this->input->post('ta_kritik')
		);



		$this->survey_model->insertSurveyRanap($data_survey);
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Terimakasih Telah Mengisi Survey Kepuasan Pasien Rawat Inap</div>');
		redirect("/");
	}

	public function simpan_igd()
	{
		$data_survey = array(
			'tgl_isi' => date('Y-m-d H:i:s'),
			'tgl_periksa' => $this->input->post('tanggal_datang'),
			'pasien' => $this->input->post('txt_nama'),
			'petugas' => $this->input->post('txt_petugas'),
			'p1' => $this->input->post('p1') . ($this->input->post('p1') == "Tidak" ? ($this->input->post('tap1') != NULL ? ', ' . $this->input->post('tap1') : $this->input->post('tap1')) : ""),
			'p2' => $this->input->post('p2') . ($this->input->post('p2') == "Tidak" ? ($this->input->post('tap2') != NULL ? ', ' . $this->input->post('tap2') : $this->input->post('tap2')) : ""),
			'p3' => $this->input->post('p3') . ($this->input->post('p3') == "Tidak" ? ($this->input->post('tap3') != NULL ? ', ' . $this->input->post('tap3') : $this->input->post('tap3')) : ""),
			'p4' => $this->input->post('p4') . ($this->input->post('p4') == "Tidak" ? ($this->input->post('tap4') != NULL ? ', ' . $this->input->post('tap4') : $this->input->post('tap4')) : ""),
			'p5' => $this->input->post('p5') . ($this->input->post('p5') == "Tidak" ? ($this->input->post('tap5') != NULL ? ', ' . $this->input->post('tap5') : $this->input->post('tap5')) : ""),
			'saran' => $this->input->post('ta_saran'),
			'kritik' => $this->input->post('ta_kritik')
		);

		$this->survey_model->insertSurveyIgd($data_survey);
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Terimakasih Telah Mengisi Survey Kepuasan Pasien IGD</div>');
		redirect("/");
	}

	public function isi_dokter()
	{


		$kd_sps = $this->input->post('kd_sps');
		$data   = $this->survey_model->showAllDataDokter($kd_sps);
		$output = '<option value="" selected="selected" required>-- Pilih Dokter --</option>';
		foreach ($data as $row) :
			$output .= '<option value="' . $row->kd_dokter . '">' . $row->nm_dokter . ' </option>';
		endforeach;
		$this->output->set_content_type('aplication/json')->set_output(json_encode($output));
	}
}
