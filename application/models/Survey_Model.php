<?php
defined('BASEPATH') or exit('[M] What Are Yout Looking For ?');

/* Model digunakan untuk menu Admin */
class Survey_Model extends CI_Model
{

    // Proses Simpan jawaban 
    public function insertSurveyRalan($data_survey)
    {
        $response = array('status' => "Data Berhasil Tersimpan", 'error' => false);
        if (!$this->db->insert('jawaban_survey_ralan', $data_survey)) {
            $error = $this->db->error();
            $response['status'] = "Gagal : " . $error['message'];
            $response['error'] = true;
        }
        return $response;
    }

    public function insertSurveyRanap($data_survey)
    {
        $response = array('status' => "Data Berhasil Tersimpan", 'error' => false);
        if (!$this->db->insert('jawaban_survey_ranap', $data_survey)) {
            $error = $this->db->error();
            $response['status'] = "Gagal : " . $error['message'];
            $response['error'] = true;
        }
        return $response;
    }
}
