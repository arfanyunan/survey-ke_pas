<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // status_log(); //helper untuk cek sttus login  
        $this->load->database();
        $this->load->model('Admin_Model');
    }


    public function index()
    {
        $this->load->database('survey_sadewa');
        $data['title'] = "Admin Survey Pasien";
        // $data['data_admin'] = $this->Admin_Model->showAllDataRalan();
        // var_dump($data['data_admin']);
        $this->load->view('admin/index_admin', $data);
        //  echo "berhasil";
    }

    public function igd()
    {
        $this->load->database('survey_sadewa');
        $data['title'] = "Admin Survey Pasien";
        $data['data_admin'] = $this->Admin_Model->showAllDataIgd(date('Y-m'));
        // var_dump($data['data_admin']);
        $this->load->view('admin/index_admin_igd', $data);
        //  echo "berhasil";
    }

    public function ralan()
    {
        $this->load->database('survey_sadewa');
        $data['title'] = "Admin Survey Pasien";
        $data['data_admin'] = $this->Admin_Model->showAllDataRalan(date('Y-m'));
        // var_dump($data['data_admin']);
        $this->load->view('admin/index_admin_ralan', $data);
        //  echo "berhasil";
    }

    public function ranap()
    {
        $this->load->database('survey_sadewa');
        $data['title'] = "Admin Survey Pasien";
        $data['data_admin'] = $this->Admin_Model->showAllDataRanap();
        // var_dump($data['data_admin']);
        $this->load->view('admin/index_admin_ranap', $data);
        //  echo "berhasil";
    }

    public function periode_bln_ralan()
    {
        $this->load->database('survey_sadewa');
        $data['title'] = "Data Survey Pasien";
        $filter_tgl = formatTahunBulan($this->input->post('date_Isi'));
        $data['periode'] = $filter_tgl;
        $data['data_admin'] = $this->Admin_Model->showPeriode($filter_tgl);
        $this->load->view('admin/periode_admin_ralan', $data);
        // var_dump($data['data_admin']);
    }
}
