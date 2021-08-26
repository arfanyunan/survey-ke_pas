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

    public function simpan_survey()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data_survey = array(
            'tgl_isi' => date('Y-m-d H:i:s'),
            'poli' => $this->input->post('cmb_poli'),
            'nm_dokter' => $this->input->post('cmb_dokter'),
            'p1' => $this->input->post('p1'),
            'p2' => $this->input->post('p2'),
            'p3' => $this->input->post('p3'),
            'p4' => $this->input->post('p4'),
            'p5' => $this->input->post('p5'),
            'p6' => $this->input->post('p6')

        );

        $this->Survey_Model->insertSurvey($data_survey);
        // $this->load->set_flashdata('pesan','Berhasil Disimpan');

        // redirect('http://www.rskiasadewa.co.id');
        redirect("/");
        // echo "berhasil tersimpan";
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
