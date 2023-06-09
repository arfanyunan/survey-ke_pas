<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('survey_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->database('sadewa_survey');
		$this->load->view('survey/index_survey');
		$data['title'] = "Data Survey Pasien";
	}

	public function index_ralan()
	{
		$this->form_validation->set_rules(
			'tgl_periksa',
			'Tgl_periksa',
			'required|htmlspecialchars',
			[
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'txt_nama',
			'Txt_nama',
			'required|trim|max_length[150]|htmlspecialchars',
			[
				'max_length' => 'Nama Pasien terlalu panjang, maksimal 150 karakter',
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'spesialis',
			'Spesialis',
			'required|htmlspecialchars',
			[
				'required' => 'Tidak Boleh Kosong'
			]
		);
		// $this->form_validation->set_rules(
		// 	'dokter',
		// 	'Dokter',
		// 	'required',
		// 	[
		// 		'required' => 'Tidak Boleh Kosong'
		// 	]
		// );
		$this->form_validation->set_rules(
			'txt_petugas',
			'Txt_petugas',
			'trim|max_length[150]|htmlspecialchars',
			[
				'max_length' => 'Nama Petugas terlalu panjang, maksimal 150 karakter',
			]
		);
		$this->form_validation->set_rules(
			'p1',
			'P1',
			'trim|required|in_list[Kurang Sekali,Kurang,Cukup,Baik,Baik Sekali]|htmlspecialchars',
			[
				'in_list'  => 'Value Tidak Valid',
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'p2',
			'P2',
			'trim|required|in_list[Kurang Sekali,Kurang,Cukup,Baik,Baik Sekali]|htmlspecialchars',
			[
				'in_list'  => 'Value Tidak Valid',
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'p3',
			'P3',
			'trim|required|in_list[Kurang Sekali,Kurang,Cukup,Baik,Baik Sekali]|htmlspecialchars',
			[
				'in_list'  => 'Value Tidak Valid',
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'p4',
			'P4',
			'trim|required|in_list[Kurang Sekali,Kurang,Cukup,Baik,Baik Sekali]|htmlspecialchars',
			[
				'in_list'  => 'Value Tidak Valid',
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'p5',
			'P5',
			'trim|required|in_list[Kurang Sekali,Kurang,Cukup,Baik,Baik Sekali]|htmlspecialchars',
			[
				'in_list'  => 'Value Tidak Valid',
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'ta_saran',
			'Ta_saran',
			'trim|max_length[300]|htmlspecialchars',
			[
				'max_length' => 'Text Saran terlalu panjang, maksimal 300 karakter',
			]
		);
		$this->form_validation->set_rules(
			'ta_kritik',
			'Ta_kritik',
			'trim|max_length[300]|htmlspecialchars',
			[
				'max_length' => 'Text Kritik terlalu panjang, maksimal 300 karakter',
			]
		);

		if ($this->form_validation->run() == false) {
			$this->load->database('sadewa_survey');
			$data['spesialis'] = $this->survey_model->showAllDataDokterSpesialis();
			$this->load->view('template/survey_header');
			$this->load->view('survey/index_survey_ralan', $data);
		} else {

			$data_survey = array(
				'tgl_isi' => date('Y-m-d H:i:s'),
				'tgl_periksa' => $this->input->post('tgl_periksa', TRUE),
				'kd_sps' => $this->input->post('spesialis', TRUE),
				'kd_dokter' => $this->input->post('dokter', TRUE),
				'nm_pasien' => $this->input->post('txt_nama', TRUE),
				'nm_petugas' => $this->input->post('txt_petugas', TRUE),
				'p1' => $this->input->post('p1', TRUE),
				'p2' => $this->input->post('p2', TRUE),
				'p3' => $this->input->post('p3', TRUE),
				'p4' => $this->input->post('p4', TRUE),
				'p5' => $this->input->post('p5', TRUE),
				'saran' => $this->input->post('ta_saran', TRUE),
				'kritik' => $this->input->post('ta_kritik', TRUE)
			);
			$this->survey_model->insertSurveyRalan($data_survey);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Terimakasih Telah Mengisi Survey Kepuasan Pasien Rawat Jalan</div>');
			redirect("/");
		}
	}
	public function index_ranap()
	{
		$this->form_validation->set_rules(
			'tanggal_datang',
			'Tanggal_datang',
			'required|htmlspecialchars',
			[
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'txt_nama',
			'Txt_nama',
			'required|trim|max_length[150]|htmlspecialchars',
			[
				'max_length' => 'Nama Pasien terlalu panjang, maksimal 150 karakter',
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'cmb_bangsal',
			'Cmb_bangsal',
			'required|htmlspecialchars',
			[
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'txt_petugas',
			'Txt_petugas',
			'trim|max_length[150]|htmlspecialchars',
			[
				'max_length' => 'Nama Petugas terlalu panjang, maksimal 150 karakter',
			]
		);
		$this->form_validation->set_rules(
			'p1',
			'P1',
			'trim|required|in_list[Kurang Sekali,Kurang,Cukup,Baik,Baik Sekali]|htmlspecialchars',
			[
				'in_list'  => 'Value Tidak Valid',
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'p2',
			'P2',
			'trim|required|in_list[Kurang Sekali,Kurang,Cukup,Baik,Baik Sekali]|htmlspecialchars',
			[
				'in_list'  => 'Value Tidak Valid',
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'p3',
			'P3',
			'trim|required|in_list[Kurang Sekali,Kurang,Cukup,Baik,Baik Sekali]|htmlspecialchars',
			[
				'in_list'  => 'Value Tidak Valid',
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'p4',
			'P4',
			'trim|required|in_list[Kurang Sekali,Kurang,Cukup,Baik,Baik Sekali]|htmlspecialchars',
			[
				'in_list'  => 'Value Tidak Valid',
				'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'p5',
			'P5',
			'trim|required|in_list[Ya,Tidak]|htmlspecialchars',
			[
				'in_list'  => 'Value Tidak Valid',
				 'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'p6',
			'P6',
			'trim|required|in_list[Ya,Tidak]|htmlspecialchars',
			[
				'in_list'  => 'Value Tidak Valid',
				 'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'p7',
			'P7',
			'trim|required|in_list[Ya,Tidak]|htmlspecialchars',
			[
				'in_list'  => 'Value Tidak Valid',
				 'required' => 'Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'tap5',
			'Tap5',
			'trim|max_length[300]|htmlspecialchars',
			[
				'max_length' => 'Text terlalu panjang, maksimal 300 karakter',
			]
		);
		$this->form_validation->set_rules(
			'tap6',
			'Tap6',
			'trim|max_length[300]|htmlspecialchars',
			[
				'max_length' => 'Text terlalu panjang, maksimal 300 karakter',
			]
		);
		$this->form_validation->set_rules(
			'tap7',
			'Tap7',
			'trim|max_length[300]|htmlspecialchars',
			[
				'max_length' => 'Text terlalu panjang, maksimal 300 karakter',
			]
		);
		$this->form_validation->set_rules(
			'p8',
			'P8',
			'max_length[200]|htmlspecialchars',
			[
				'max_length' => 'Text terlalu panjang, maksimal 200 karakter',
			]
		);
		$this->form_validation->set_rules(
			'ta_saran',
			'Ta_saran',
			'trim|max_length[300]|htmlspecialchars',
			[
				'max_length' => 'Text Saran terlalu panjang, maksimal 300 karakter',
			]
		);
		$this->form_validation->set_rules(
			'ta_kritik',
			'Ta_kritik',
			'trim|max_length[300]|htmlspecialchars',
			[
				'max_length' => 'Text Kritik terlalu panjang, maksimal 300 karakter',
			]
		);
		if ($this->form_validation->run() == false) {
			$this->load->database('survey_sadewa');
			$data['data_bangsal']  = $this->survey_model->showAllDataBangsal();

			$this->load->view('template/survey_header');
			$this->load->view('survey/index_survey_ranap', $data);
		} else {

			$this->load->database('sadewa_survey');
			$data['data_bangsal']  = $this->survey_model->showAllDataBangsal();


			$data_survey = array(
				'tgl_isi' => date('Y-m-d H:i:s'),
				'tgl_ranap' => $this->input->post('tanggal_datang', TRUE),
				'pasien' => $this->input->post('txt_nama', TRUE),
				'petugas' => $this->input->post('txt_petugas', TRUE),
				'bangsal' => $this->input->post('cmb_bangsal', TRUE),
				'p1' => $this->input->post('p1', TRUE),
				'p2' => $this->input->post('p2', TRUE),
				'p3' => $this->input->post('p3', TRUE),
				'p4' => $this->input->post('p4', TRUE),
				'p5' => $this->input->post('p5', TRUE) . ($this->input->post('p5', TRUE) == "Tidak" ? ($this->input->post('tap5', TRUE) != NULL ? ', ' . $this->input->post('tap5', TRUE) : $this->input->post('tap5', TRUE)) : ""),
				'p6' => $this->input->post('p6', TRUE) . ($this->input->post('p6', TRUE) == "Tidak" ? ($this->input->post('tap6', TRUE) != NULL ? ', ' . $this->input->post('tap6', TRUE) : $this->input->post('tap6', TRUE)) : ""),
				'p7' => $this->input->post('p7', TRUE) . ($this->input->post('p7', TRUE) == "Tidak" ? ($this->input->post('tap7', TRUE) != NULL ? ', ' . $this->input->post('tap7', TRUE) : $this->input->post('tap7', TRUE)) : ""),
				'p8a' => $this->input->post('p8a', TRUE),
				'p8b' => $this->input->post('p8b', TRUE),
				'p8c' => $this->input->post('p8c', TRUE),
				'p8d' => $this->input->post('p8d', TRUE),
				'saran' => $this->input->post('ta_saran', TRUE),
				'kritik' => $this->input->post('ta_kritik', TRUE)
			);



			$this->survey_model->insertSurveyRanap($data_survey);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Terimakasih Telah Mengisi Survey Kepuasan Pasien Rawat Inap</div>');
			redirect("/");
		}
	}
	
	public function index_igd()
	{
		{
			$this->form_validation->set_rules(
				'tanggal_datang',
				'Tanggal_datang',
				'required|htmlspecialchars',
				[
					'required' => 'Tidak Boleh Kosong'
				]
			);
			$this->form_validation->set_rules(
				'txt_nama',
				'Txt_nama',
				'required|trim|max_length[150]|htmlspecialchars',
				[
					'max_length' => 'Nama Pasien terlalu panjang, maksimal 150 karakter',
					'required' => 'Tidak Boleh Kosong'
				]
			);
			$this->form_validation->set_rules(
				'txt_petugas',
				'Txt_petugas',
				'trim|max_length[150]|htmlspecialchars',
				[
					'max_length' => 'Nama Petugas terlalu panjang, maksimal 150 karakter',
				]
			);
			$this->form_validation->set_rules(
				'p1',
				'P1',
				'trim|required|in_list[Ya,Tidak]|htmlspecialchars',
				[
					'in_list'  => 'Value Tidak Valid',
 					'required' => 'Tidak Boleh Kosong'
				]
			);
			$this->form_validation->set_rules(
				'tap1',
				'Tap1',
				'trim|max_length[300]|htmlspecialchars',
				[
					'max_length' => 'Text terlalu panjang, maksimal 300 karakter',
				]
			);
			$this->form_validation->set_rules(
				'p2',
				'P2',
				'trim|required|in_list[Ya,Tidak]|htmlspecialchars',
				[
					'in_list'  => 'Value Tidak Valid',
 					'required' => 'Tidak Boleh Kosong'
				]
			);
			$this->form_validation->set_rules(
				'tap2',
				'Tap2',
				'trim|max_length[300]|htmlspecialchars',
				[
					'max_length' => 'Text terlalu panjang, maksimal 300 karakter',
				]
			);
			$this->form_validation->set_rules(
				'p3',
				'P3',
				'trim|required|in_list[Ya,Tidak]|htmlspecialchars',
				[
					'in_list'  => 'Value Tidak Valid',
 					'required' => 'Tidak Boleh Kosong'
				]
			);
			$this->form_validation->set_rules(
				'tap3',
				'Tap3',
				'trim|max_length[300]|htmlspecialchars',
				[
					'max_length' => 'Text terlalu panjang, maksimal 300 karakter',
				]
			);
			$this->form_validation->set_rules(
				'p4',
				'P4',
				'trim|required|in_list[Ya,Tidak]|htmlspecialchars',
				[
					'in_list'  => 'Value Tidak Valid',
 					'required' => 'Tidak Boleh Kosong'
				]
			);
			$this->form_validation->set_rules(
				'tap4',
				'Tap4',
				'trim|max_length[300]',
				[
					'max_length' => 'Text terlalu panjang, maksimal 300 karakter',
				]
			);
			$this->form_validation->set_rules(
				'p5',
				'P5',
				'trim|required|in_list[Ya,Tidak]|htmlspecialchars',
				[
					'in_list'  => 'Value Tidak Valid',
 					'required' => 'Tidak Boleh Kosong'
				]
			);
			$this->form_validation->set_rules(
				'tap5',
				'Tap5',
				'trim|max_length[300]|htmlspecialchars',
				[
					'max_length' => 'Text terlalu panjang, maksimal 300 karakter',
				]
			);
			$this->form_validation->set_rules(
				'ta_saran',
				'Ta_saran',
				'trim|max_length[300]|htmlspecialchars',
				[
					'max_length' => 'Text Saran terlalu panjang, maksimal 300 karakter',
				]
			);
			$this->form_validation->set_rules(
				'ta_kritik',
				'Ta_kritik',
				'trim|max_length[300]|htmlspecialchars',
				[
					'max_length' => 'Text Kritik terlalu panjang, maksimal 300 karakter',
				]
			);

			if ($this->form_validation->run() == false) {
				$this->load->database('survey_sadewa');
				$this->load->view('survey/index_survey_igd');
			} else {
	
				$data_survey = array(
					'tgl_isi' => date('Y-m-d H:i:s'),
					'tgl_periksa' => $this->input->post('tanggal_datang',TRUE),
					'pasien' => $this->input->post('txt_nama',TRUE),
					'petugas' => $this->input->post('txt_petugas',TRUE),
					'p1' => $this->input->post('p1',TRUE) . ($this->input->post('p1',TRUE) == "Tidak" ? ($this->input->post('tap1',TRUE) != NULL ? ', ' . $this->input->post('tap1',TRUE) : $this->input->post('tap1',TRUE)) : ""),
					'p2' => $this->input->post('p2',TRUE) . ($this->input->post('p2',TRUE) == "Tidak" ? ($this->input->post('tap2',TRUE) != NULL ? ', ' . $this->input->post('tap2',TRUE) : $this->input->post('tap2',TRUE)) : ""),
					'p3' => $this->input->post('p3',TRUE) . ($this->input->post('p3',TRUE) == "Tidak" ? ($this->input->post('tap3',TRUE) != NULL ? ', ' . $this->input->post('tap3',TRUE) : $this->input->post('tap3',TRUE)) : ""),
					'p4' => $this->input->post('p4',TRUE) . ($this->input->post('p4',TRUE) == "Tidak" ? ($this->input->post('tap4',TRUE) != NULL ? ', ' . $this->input->post('tap4',TRUE) : $this->input->post('tap4',TRUE)) : ""),
					'p5' => $this->input->post('p5',TRUE) . ($this->input->post('p5',TRUE) == "Tidak" ? ($this->input->post('tap5',TRUE) != NULL ? ', ' . $this->input->post('tap5',TRUE) : $this->input->post('tap5',TRUE)) : ""),
					'saran' => $this->input->post('ta_saran',TRUE),
					'kritik' => $this->input->post('ta_kritik',TRUE)
				);
		
				$this->survey_model->insertSurveyIgd($data_survey);
				$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Terimakasih Telah Mengisi Survey Kepuasan Pasien IGD</div>');
				redirect("/");
			}
		}
	}

	public function isi_dokter()
	{


		$kd_sps = $this->input->post('kd_sps',TRUE);
		$data   = $this->survey_model->showAllDataDokter($kd_sps);
		$output = '<option value="" selected="selected" required>-- Pilih Dokter --</option>';
		foreach ($data as $row) :
			$output .= '<option value="' . $row->kd_dokter . '">' . $row->nm_dokter . ' </option>';
		endforeach;
		$this->output->set_content_type('aplication/json')->set_output(json_encode($output));
	}
}
