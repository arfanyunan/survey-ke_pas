<?php
defined('BASEPATH') or exit('[M] What Are Yout Looking For ?');

/* Model digunakan untuk menu Admin */
class Admin_Model extends CI_Model
{
    public function showAllData()
    {
        return $this->db->order_by('tgl_isi', 'ASC')->get('jawaban_survey')->result_array();
       
    }
}
