<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // status_log(); //helper untuk cek sttus login  
        $this->load->database();
        $this->load->model('Survey_Model');
    }


    public function index()
    {
        $this->load->database('survey_sadewa');
        $this->load->view('survey/index_survey');
        $data['title'] = "Data Survey Pasien";
        // echo "berhasil";
    }

    public function index_ralan()
    {
        $this->load->database('survey_sadewa');
        $this->load->view('survey/index_survey_ralan');
        $data['title'] = "Rawat Jalan";
        // echo "berhasil";
    }

    public function index_ranap()
    {
        $this->load->database('survey_sadewa');
        $this->load->view('survey/index_survey_ranap');
        $data['title'] = "Rawat Inap";
        // echo "berhasil";
    }

    public function index_igd()
    {
        $this->load->database('survey_sadewa');
        $this->load->view('survey/index_survey_igd');
        $data['title'] = "Instalasi Gawat Darurat";
        // echo "berhasil";
    }

    public function simpan_ralan()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data_survey = array(
            'tgl_isi' => date('Y-m-d H:i:s'),
            'poli' => $this->input->post('cmb_poli'),
            'nm_dokter' => $this->input->post('cmb_dokter'),
            'petugas' => $this->input->post('txt_petugas'),
            'p1' => $this->input->post('p1'),
            'p2' => $this->input->post('p2'),
            'p3' => $this->input->post('p3'),
            'p4' => $this->input->post('p4'),
            'p5' => $this->input->post('p5'),
            'saran' => $this->input->post('ta_saran'),
            'kritik' => $this->input->post('ta_kritik')
        );
        $this->Survey_Model->insertSurveyRalan($data_survey);
        // $this->load->set_flashdata('pesan', 'Berhasil Disimpan');       
        redirect("/");
    }


    public function simpan_ranap()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data_survey = array(
            'tgl_isi' => date('Y-m-d H:i:s'),
            'pasien' => $this->input->post('txt_nama'),
            'petugas' => $this->input->post('txt_petugas'),
            'bangsal' => $this->input->post('cmb_bangsal'),
            'p1' => $this->input->post('p1'),
            'p2' => $this->input->post('p2'),
            'p3' => $this->input->post('p3'),
            'p4' => $this->input->post('p4'),
            'p5' => $this->input->post('p5') == "Ya" ? "Ya" :  $this->input->post('tap5'),
            'p6' => $this->input->post('p6') == "Ya" ? "Ya" :  $this->input->post('tap6'),
            'p7a' => $this->input->post('p7a') == "Memberi ASI" ? "Memberi ASI" :  "Tidak",
            'p7b' => $this->input->post('p7b') == "Menggendong bayi" ? "Menggendong bayi" :  "Tidak",
            'p7c' => $this->input->post('p7c') == "Merawat payudara" ? "Merawat payudara" :  "Tidak",
            'p7d' => $this->input->post('p7d') == "Merawat bayi baru lahir" ? "Merawat bayi baru lahir" :  "Tidak",
            'p8' => $this->input->post('p8') == "Ya" ? "Ya" :  $this->input->post('tap8'),
            'saran' => $this->input->post('ta_saran'),
            'kritik' => $this->input->post('ta_kritik')
        );

        $this->Survey_Model->insertSurveyRanap($data_survey);
        // $this->load->set_flashdata('pesan','Berhasil Disimpan');
        // echo json_encode($data_survey);
        redirect("/");
    }

    public function simpan_igd()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data_survey = array(
            'tgl_isi' => date('Y-m-d H:i:s'),
            'tgl_periksa' => $this->input->post('tanggal_datang'),
            'nama' => $this->input->post('txt_nama'),
            'petugas' => $this->input->post('txt_petugas'),
            'p1' => $this->input->post('p1') == "Ya" ? "Ya" :  $this->input->post('tap1'),
            'p2' => $this->input->post('p2') == "Ya" ? "Ya" :  $this->input->post('tap2'),
            'p3' => $this->input->post('p3') == "Ya" ? "Ya" :  $this->input->post('tap3'),
            'p4' => $this->input->post('p4') == "Ya" ? "Ya" :  $this->input->post('tap4'),
            'p5' => $this->input->post('p5') == "Ya" ? "Ya" :  $this->input->post('tap5'),
            'saran' => $this->input->post('ta_saran'),
            'kritik' => $this->input->post('ta_kritik')
        );
        $this->Survey_Model->insertSurveyIgd($data_survey);
        redirect("/");
        // echo json_encode($data_survey);
    }

    public function isi_dokter()
    {
        if ($this->input->post()) {
            $db_sadewa = $this->load->database('sadewa', TRUE);
            $data = $db_sadewa->get_where('dokter', ['kd_sps' => $this->input->post('kd_sps')])->result_array();
            echo json_encode($data);
        }
    }
}
