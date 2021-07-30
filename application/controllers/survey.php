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
        $this->load->view('survey/index');
        $data['title'] = "Data Survey Pasien";
        // echo "berhasil";
    }

    public function simpan_survey()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data_survey = array(
            'tgl_isi' => date('Y-m-d H:i:s'),
            'p1' => $this->input->post('p1'),
            'p2' => $this->input->post('p2'),
            'p3' => $this->input->post('p3'),
            'p4' => $this->input->post('p4'),
            'p5' => $this->input->post('p5'),
            'p6' => $this->input->post('p6'),
            'p7' => $this->input->post('p7')
        );

        $this->Survey_Model->insertSurvey($data_survey);
        // $this->load->set_flashdata('pesan','Berhasil Disimpan');
                       
        redirect('/survey');
        // echo "berhasil tersimpan";
    }
}
