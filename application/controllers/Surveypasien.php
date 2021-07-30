<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surveypasien extends CI_Controller
{


    public function index()
    {
        $this->load->view('survey/index');
        // echo "berhasil";
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
