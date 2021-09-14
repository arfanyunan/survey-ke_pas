<?php
defined('BASEPATH') or exit('[M] What Are Yout Looking For ?');

/* Model digunakan untuk menu Admin */
class Admin_Model extends CI_Model
{
    public function showAllData()
    {
        return $this->db->order_by('tgl_isi', 'ASC')->get('jawaban_survey_ralan')->result_array();
    }


    public function showAllDataRalan()
    {
        return $this->db->order_by('tgl_isi', 'ASC')->get('jawaban_survey_ralan')->result_array();
    }

    public function showPeriodeRalan($periode)
    {
        $hasil = $this->db->order_by('tgl_isi', 'ASC')->like(['tgl_isi' => $periode])->get('jawaban_survey_ralan')->result_array();
        return $hasil;
    }

    public function showAllDataRanap()
    {
        return $this->db->order_by('tgl_isi', 'ASC')->get('jawaban_survey_ranap')->result_array();
    }

    public function showPeriodeRanap($periode)
    {
        $hasil = $this->db->order_by('tgl_isi', 'ASC')->like(['tgl_isi' => $periode])->get('jawaban_survey_ranap')->result_array();
        return $hasil;
    }
}
