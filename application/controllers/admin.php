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
        $data['data_admin'] = $this->Admin_Model->showAllData(); 
        // var_dump($data['data_admin']);
        $this->load->view('admin/index_admin', $data);
        //  echo "berhasil";
    }
}
