<?php
defined('BASEPATH') or exit('[C] What Are Yout Looking For ?');

/* Controller digunakan untuk menu Admin */
class survey extends CI_Controller
{
    /* constructor */
    public function __construct()
    {
        parent::__construct();
        status_log(); //helper untuk cek sttus login        
        $this->load->model('Survey_Model');
        // $this->load->model('Regonline_Model');
    }

    public function index()
    {
        $dbsadewa = $this->load->database('survey', true);
        $this->load->view('survey/nilai');
        $data['title'] = "Data Admin";
        $data['user_login'] = $dbsadewa->query("SELECT nama, jk, nik  FROM pegawai where nik = " . $this->session->userdata('id_user'))->row_array();
        $data['data_admin'] = $this->Survey_Model->showAllData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index_admin', $data);
        $this->load->view('templates/footer');
    }


    public function simpan()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data_admin = array(
            'tanggal_input' => date('Y-m-d H:i:s'),
            'p1' => $this->input->post('p1'),
            'p2' => $this->input->post('p2'),
            'p3' => $this->input->post('p3'),
            'p4' => $this->input->post('p4'),
            'p5' => $this->input->post('p5'),
            'p6' => $this->input->post('p6'),
            'p7' => $this->input->post('p7'),
        );

        redirect('admin/index');
    }
}
