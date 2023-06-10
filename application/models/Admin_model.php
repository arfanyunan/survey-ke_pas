<?php
defined('BASEPATH') or exit('[M] What Are Yout Looking For ?');

class Admin_model extends CI_Model
{

	// IGD
	function showDate1Date2Igd($date_1, $date_2)
	{

		$this->db->select("*");
		$this->db->from('jawaban_survey_igd');
		$this->db->where('tgl_isi BETWEEN "' . date('Y-m-d', strtotime($date_1)) . '" and "' . date('Y-m-d', strtotime("+1 day", strtotime($date_2))) . '"');
		return $this->db->get()->result_array();
	}

	function jumlah_igd_thn($periode_thn)
	{
		$this->db->select('*');
		$this->db->from('jawaban_survey_igd');
		$this->db->where('MONTH(tgl_isi)', date('m'));
		$this->db->like(['year(tgl_isi)' => $periode_thn]);

		return $this->db->get()->num_rows();
	}

	function jumlah_igd_count($periode_thn)
	{

		$this->db->select("DATE_FORMAT(tgl_isi,'%M') as bulan, month(tgl_isi) AS bulanku, year(tgl_isi) AS tahun, COUNT(tgl_isi) AS jumlah");
		$this->db->from('jawaban_survey_igd');
		$this->db->group_by('MONTH(tgl_isi)');
		$this->db->order_by('bulanku', "ASC");
		$this->db->like(['year(tgl_isi)' => $periode_thn]);
		return $this->db->get()->result_array();
	}

	// RALAN
	function showDate1Date2Ralan($date_1, $date_2)
	{

		$this->db->select("*");
		$this->db->from('vw_jawaban_survey_ralan');
		$this->db->where('tgl_isi BETWEEN "' . date('Y-m-d', strtotime($date_1)) . '" and "' . date('Y-m-d', strtotime("+1 day", strtotime($date_2))) . '"');
		return $this->db->get()->result_array();
	}

	function jumlah_ralan_thn($periode_thn)
	{
		$this->db->select('*');
		$this->db->from('jawaban_survey_ralan');
		$this->db->where('MONTH(tgl_isi)', date('m'));
		$this->db->like(['year(tgl_isi)' => $periode_thn]);

		return $this->db->get()->num_rows();
	}

	function jumlah_ralan_count($periode_thn)
	{

		$this->db->select("DATE_FORMAT(tgl_isi,'%M') as bulan ,month(tgl_isi) AS bulanku, year(tgl_isi) AS tahun, COUNT(tgl_isi) AS jumlah");
		$this->db->from('jawaban_survey_ralan');
		$this->db->group_by('MONTH(tgl_isi)');
		$this->db->order_by('bulanku', "ASC");
		$this->db->like(['year(tgl_isi)' => $periode_thn]);
		return $this->db->get()->result_array();
	}

	// RANAP
	function showDate1Date2Ranap($date_1, $date_2)
	{

		$this->db->select("*");
		$this->db->from('jawaban_survey_ranap');
		$this->db->where('tgl_isi BETWEEN "' . date('Y-m-d', strtotime($date_1)) . '" and "' . date('Y-m-d', strtotime("+1 day", strtotime($date_2))) . '"');
		return $this->db->get()->result_array();
	}

	function jumlah_ranap_thn($periode_thn)
	{
		$this->db->select('*');
		$this->db->from('jawaban_survey_ranap');
		$this->db->where('MONTH(tgl_isi)', date('m'));
		$this->db->like(['year(tgl_isi)' => $periode_thn]);

		return $this->db->get()->num_rows();
	}

	function jumlah_ranap_count($periode_thn)
	{

		$this->db->select("DATE_FORMAT(tgl_isi,'%M') as bulan, month(tgl_isi) AS bulanku, year(tgl_isi) AS tahun, COUNT(tgl_isi) AS jumlah");
		$this->db->from('jawaban_survey_ranap');
		$this->db->group_by('MONTH(tgl_isi)');
		$this->db->order_by('bulanku', "ASC");
		$this->db->like(['year(tgl_isi)' => $periode_thn]);
		return $this->db->get()->result_array();
	}

	// Dokter
	function showAllDataDokter()
	{
		$dokter = $this->db->order_by('kd_dokter', 'ASC')->get('vw_dokter')->result_array();
		return $dokter;
	}

	function showAllDataDokterSpesialis()
	{
		$dokter = $this->db->order_by('kd_sps', 'ASC')->get('spesialis')->result_array();
		return $dokter;
	}

	function showAllDataBangsal()
	{
		$dokter = $this->db->order_by('kd_bangsal', 'ASC')->get('bangsal')->result_array();
		return $dokter;
	}

    public function insertAdminDokter($data_dokter)
    {
        $response = array('status' => "Data Berhasil Tersimpan", 'error' => false);
        if (!$this->db->insert('dokter', $data_dokter)) {
            $error = $this->db->error();
            $response['status'] = "Gagal : " . $error['message'];
            $response['error'] = true;
        }
        return $response;
    }

	public function insertAdminBangsal($data_bangsal)
    {
        $response = array('status' => "Data Berhasil Tersimpan", 'error' => false);
        if (!$this->db->insert('bangsal', $data_bangsal)) {
            $error = $this->db->error();
            $response['status'] = "Gagal : " . $error['message'];
            $response['error'] = true;
        }
        return $response;
    }

	public function insertAdminSpesialis($data_spesialis)
    {
        $response = array('status' => "Data Berhasil Tersimpan", 'error' => false);
        if (!$this->db->insert('spesialis', $data_spesialis)) {
            $error = $this->db->error();
            $response['status'] = "Gagal : " . $error['message'];
            $response['error'] = true;
        }
        return $response;
    }

	public function insertAdminUser($data_user)
    {
        $response = array('status' => "Data Berhasil Tersimpan", 'error' => false);
        if (!$this->db->insert('user', $data_user)) {
            $error = $this->db->error();
            $response['status'] = "Gagal : " . $error['message'];
            $response['error'] = true;
        }
        return $response;
    }

	function showAllDataUser()
	{

		$dokter = $this->db->order_by('nik', 'ASC')->get('user')->result_array();
		return $dokter;
	}
	
	function jumlah_ranap_pertanyaan_date($bulan, $tahun)
	{

		$this->db->select("DATE_FORMAT(tgl_isi,'%M') as bulan, month(tgl_isi) AS bulanku, year(tgl_isi) AS tahun, bangsal,

		SUM(IF(p1='Kurang Sekali',1,0)) AS p1_kurang_sekali, 
		SUM(IF(p1='Kurang',1,0)) AS p1_kurang,
		SUM(IF(p1='Cukup',1,0)) AS p1_cukup,
		SUM(IF(p1='Baik',1,0)) AS p1_baik,
		SUM(IF(p1='Baik Sekali',1,0)) AS p1_baik_sekali,

		SUM(IF(p2='Kurang Sekali',1,0)) AS p2_kurang_sekali, 
		SUM(IF(p2='Kurang',1,0)) AS p2_kurang,
		SUM(IF(p2='Cukup',1,0)) AS p2_cukup,
		SUM(IF(p2='Baik',1,0)) AS p2_baik,
		SUM(IF(p2='Baik Sekali',1,0)) AS p2_baik_sekali,
		
		SUM(IF(p3='Kurang Sekali',1,0)) AS p3_kurang_sekali, 
		SUM(IF(p3='Kurang',1,0)) AS p3_kurang,
		SUM(IF(p3='Cukup',1,0)) AS p3_cukup,
		SUM(IF(p3='Baik',1,0)) AS p3_baik,
		SUM(IF(p3='Baik Sekali',1,0)) AS p3_baik_sekali,
		
		SUM(IF(p4='Kurang Sekali',1,0)) AS p4_kurang_sekali, 
		SUM(IF(p4='Kurang',1,0)) AS p4_kurang,
		SUM(IF(p4='Cukup',1,0)) AS p4_cukup,
		SUM(IF(p4='Baik',1,0)) AS p4_baik,
		SUM(IF(p4='Baik Sekali',1,0)) AS p4_baik_sekali,
		
		SUM(IF(p5='Ya',1,0)) AS p5_ya,
		SUM(IF(p5!='Ya',1,0)) AS p5_tidak,

		SUM(IF(p6='Ya',1,0)) AS p6_ya,
		SUM(IF(p6!='Ya',1,0)) AS p6_tidak,

		SUM(IF(p7='Ya',1,0)) AS p7_ya,
		SUM(IF(p7!='Ya',1,0)) AS p7_tidak");
		
		$this->db->from('jawaban_survey_ranap');
		$this->db->group_by('bangsal');
		$this->db->like(['month(tgl_isi)' => $bulan]);
		$this->db->like(['year(tgl_isi)' => $tahun]);
		return $this->db->get()->result_array();
	}

	function jumlah_ranap_pertanyaan($bulan, $tahun)
	{

		$this->db->select("DATE_FORMAT(tgl_isi,'%M') as bulan, month(tgl_isi) AS bulanku, year(tgl_isi) AS tahun, bangsal,

		SUM(IF(p1='Kurang Sekali',1,0)) AS p1_kurang_sekali, 
		SUM(IF(p1='Kurang',1,0)) AS p1_kurang,
		SUM(IF(p1='Cukup',1,0)) AS p1_cukup,
		SUM(IF(p1='Baik',1,0)) AS p1_baik,
		SUM(IF(p1='Baik Sekali',1,0)) AS p1_baik_sekali,

		SUM(IF(p2='Kurang Sekali',1,0)) AS p2_kurang_sekali, 
		SUM(IF(p2='Kurang',1,0)) AS p2_kurang,
		SUM(IF(p2='Cukup',1,0)) AS p2_cukup,
		SUM(IF(p2='Baik',1,0)) AS p2_baik,
		SUM(IF(p2='Baik Sekali',1,0)) AS p2_baik_sekali,
		
		SUM(IF(p3='Kurang Sekali',1,0)) AS p3_kurang_sekali, 
		SUM(IF(p3='Kurang',1,0)) AS p3_kurang,
		SUM(IF(p3='Cukup',1,0)) AS p3_cukup,
		SUM(IF(p3='Baik',1,0)) AS p3_baik,
		SUM(IF(p3='Baik Sekali',1,0)) AS p3_baik_sekali,
		
		SUM(IF(p4='Kurang Sekali',1,0)) AS p4_kurang_sekali, 
		SUM(IF(p4='Kurang',1,0)) AS p4_kurang,
		SUM(IF(p4='Cukup',1,0)) AS p4_cukup,
		SUM(IF(p4='Baik',1,0)) AS p4_baik,
		SUM(IF(p4='Baik Sekali',1,0)) AS p4_baik_sekali,
		
		SUM(IF(p5='Ya',1,0)) AS p5_ya,
		SUM(IF(p5!='Ya',1,0)) AS p5_tidak,

		SUM(IF(p6='Ya',1,0)) AS p6_ya,
		SUM(IF(p6!='Ya',1,0)) AS p6_tidak,

		SUM(IF(p7='Ya',1,0)) AS p7_ya,
		SUM(IF(p7!='Ya',1,0)) AS p7_tidak");
		
		$this->db->from('jawaban_survey_ranap');
		$this->db->group_by('bangsal');
		$this->db->like(['month(tgl_isi)' => $bulan]);
		$this->db->like(['year(tgl_isi)' => $tahun]);
		return $this->db->get()->result_array();

	}

	function jumlah_ralan_pertanyaan_date($bulan, $tahun)
	{

		$this->db->select("DATE_FORMAT(tgl_isi,'%M') as bulan, month(tgl_isi) AS bulanku, year(tgl_isi) AS tahun, nm_sps, nm_dokter,
		SUM(IF(p1='Kurang Sekali',1,0)) AS p1_kurang_sekali, 
		SUM(IF(p1='Kurang',1,0)) AS p1_kurang,
		SUM(IF(p1='Cukup',1,0)) AS p1_cukup,
		SUM(IF(p1='Baik',1,0)) AS p1_baik,
		SUM(IF(p1='Baik Sekali',1,0)) AS p1_baik_sekali,
		
		SUM(IF(p2='Kurang Sekali',1,0)) AS p2_kurang_sekali, 
		SUM(IF(p2='Kurang',1,0)) AS p2_kurang,
		SUM(IF(p2='Cukup',1,0)) AS p2_cukup,
		SUM(IF(p2='Baik',1,0)) AS p2_baik,
		SUM(IF(p2='Baik Sekali',1,0)) AS p2_baik_sekali,
		
		SUM(IF(p3='Kurang Sekali',1,0)) AS p3_kurang_sekali, 
		SUM(IF(p3='Kurang',1,0)) AS p3_kurang,
		SUM(IF(p3='Cukup',1,0)) AS p3_cukup,
		SUM(IF(p3='Baik',1,0)) AS p3_baik,
		SUM(IF(p3='Baik Sekali',1,0)) AS p3_baik_sekali,
		
		SUM(IF(p4='Kurang Sekali',1,0)) AS p4_kurang_sekali, 
		SUM(IF(p4='Kurang',1,0)) AS p4_kurang,
		SUM(IF(p4='Cukup',1,0)) AS p4_cukup,
		SUM(IF(p4='Baik',1,0)) AS p4_baik,
		SUM(IF(p4='Baik Sekali',1,0)) AS p4_baik_sekali,
		
		SUM(IF(p5='Kurang Sekali',1,0)) AS p5_kurang_sekali, 
		SUM(IF(p5='Kurang',1,0)) AS p5_kurang,
		SUM(IF(p5='Cukup',1,0)) AS p5_cukup,
		SUM(IF(p5='Baik',1,0)) AS p5_baik,
		SUM(IF(p5='Baik Sekali',1,0)) AS p5_baik_sekali");
		
		$this->db->from('vw_jawaban_survey_ralan');
		$this->db->group_by('nm_dokter');
		$this->db->like(['month(tgl_isi)' => $bulan]);
		$this->db->like(['year(tgl_isi)' => $tahun]);
		
		
		return $this->db->get()->result_array();
	}

	function jumlah_ralan_pertanyaan($bulan, $tahun)
	{

		$this->db->select("DATE_FORMAT(tgl_isi,'%M') as bulanku, month(tgl_isi) AS bulan, year(tgl_isi) AS tahun, nm_dokter,

		SUM(IF(p1='Kurang Sekali',1,0)) AS p1_kurang_sekali, 
		SUM(IF(p1='Kurang',1,0)) AS p1_kurang,
		SUM(IF(p1='Cukup',1,0)) AS p1_cukup,
		SUM(IF(p1='Baik',1,0)) AS p1_baik,
		SUM(IF(p1='Baik Sekali',1,0)) AS p1_baik_sekali,

		SUM(IF(p2='Kurang Sekali',1,0)) AS p2_kurang_sekali, 
		SUM(IF(p2='Kurang',1,0)) AS p2_kurang,
		SUM(IF(p2='Cukup',1,0)) AS p2_cukup,
		SUM(IF(p2='Baik',1,0)) AS p2_baik,
		SUM(IF(p2='Baik Sekali',1,0)) AS p2_baik_sekali,
		
		SUM(IF(p3='Kurang Sekali',1,0)) AS p3_kurang_sekali, 
		SUM(IF(p3='Kurang',1,0)) AS p3_kurang,
		SUM(IF(p3='Cukup',1,0)) AS p3_cukup,
		SUM(IF(p3='Baik',1,0)) AS p3_baik,
		SUM(IF(p3='Baik Sekali',1,0)) AS p3_baik_sekali,
		
		SUM(IF(p4='Kurang Sekali',1,0)) AS p4_kurang_sekali, 
		SUM(IF(p4='Kurang',1,0)) AS p4_kurang,
		SUM(IF(p4='Cukup',1,0)) AS p4_cukup,
		SUM(IF(p4='Baik',1,0)) AS p4_baik,
		SUM(IF(p4='Baik Sekali',1,0)) AS p4_baik_sekali,
		
		SUM(IF(p5='Kurang Sekali',1,0)) AS p5_kurang_sekali, 
		SUM(IF(p5='Kurang',1,0)) AS p5_kurang,
		SUM(IF(p5='Cukup',1,0)) AS p5_cukup,
		SUM(IF(p5='Baik',1,0)) AS p5_baik,
		SUM(IF(p5='Baik Sekali',1,0)) AS p5_baik_sekali");
		
		$this->db->from('vw_jawaban_survey_ralan');
		$this->db->group_by('nm_dokter');
		$this->db->like(['month(tgl_isi)' => $bulan]);
		$this->db->like(['year(tgl_isi)' => $tahun]);
		return $this->db->get()->result_array();

	}

	function jumlah_igd_pertanyaan_date($periode_thn)
	{

		$this->db->select("DATE_FORMAT(tgl_isi,'%M') as bulan, month(tgl_isi) AS bulanku, year(tgl_isi) AS tahun,
		SUM(IF(p1='Ya',1,0)) AS p1_ya, 
		SUM(IF(p1!='Ya',1,0)) AS p1_tidak,
		
		SUM(IF(p2='Ya',1,0)) AS p2_ya, 
		SUM(IF(p2!='Ya',1,0)) AS p2_tidak,
		
		SUM(IF(p3='Ya',1,0)) AS p3_ya, 
		SUM(IF(p3!='Ya',1,0)) AS p3_tidak,
		
		SUM(IF(p4='Ya',1,0)) AS p4_ya, 
		SUM(IF(p4!='Ya',1,0)) AS p4_tidak,
		
		SUM(IF(p5='Ya',1,0)) AS p5_ya, 
		SUM(IF(p5!='Ya',1,0)) AS p5_tidak");
		
		$this->db->from('jawaban_survey_igd');
		$this->db->group_by('MONTH(tgl_isi)');
		$this->db->order_by('month(tgl_isi)', "ASC");
		$this->db->like(['year(tgl_isi)' => $periode_thn]);
		
		return $this->db->get()->result_array();
	}

	function jumlah_igd_pertanyaan($periode_thn)
	{

		$this->db->select("DATE_FORMAT(tgl_isi,'%M') as bulan, month(tgl_isi) AS bulanku, year(tgl_isi) AS tahun,
		SUM(IF(p1='Ya',1,0)) AS p1_ya, 
		SUM(IF(p1!='Ya',1,0)) AS p1_tidak,
		
		SUM(IF(p2='Ya',1,0)) AS p2_ya, 
		SUM(IF(p2!='Ya',1,0)) AS p2_tidak,
		
		SUM(IF(p3='Ya',1,0)) AS p3_ya, 
		SUM(IF(p3!='Ya',1,0)) AS p3_tidak,
		
		SUM(IF(p4='Ya',1,0)) AS p4_ya, 
		SUM(IF(p4!='Ya',1,0)) AS p4_tidak,
		
		SUM(IF(p5='Ya',1,0)) AS p5_ya, 
		SUM(IF(p5!='Ya',1,0)) AS p5_tidak");
		
		$this->db->from('jawaban_survey_igd');
		$this->db->group_by('MONTH(tgl_isi)');
		$this->db->order_by('bulanku', "ASC");
		$this->db->like(['year(tgl_isi)' => $periode_thn]);
		return $this->db->get()->result_array();

	}

	function jumlah_ranap_bangsal()
	{

		$this->db->select("DATE_FORMAT(tgl_isi,'%M') as bulan, month(tgl_isi) AS bulanku, year(tgl_isi) AS tahun, bangsal,

		SUM(IF(p1='Kurang Sekali',1,0)) AS p1_kurang_sekali, 
		SUM(IF(p1='Kurang',1,0)) AS p1_kurang,
		SUM(IF(p1='Cukup',1,0)) AS p1_cukup,
		SUM(IF(p1='Baik',1,0)) AS p1_baik,
		SUM(IF(p1='Baik Sekali',1,0)) AS p1_baik_sekali,

		SUM(IF(p2='Kurang Sekali',1,0)) AS p2_kurang_sekali, 
		SUM(IF(p2='Kurang',1,0)) AS p2_kurang,
		SUM(IF(p2='Cukup',1,0)) AS p2_cukup,
		SUM(IF(p2='Baik',1,0)) AS p2_baik,
		SUM(IF(p2='Baik Sekali',1,0)) AS p2_baik_sekali,
		
		SUM(IF(p3='Kurang Sekali',1,0)) AS p3_kurang_sekali, 
		SUM(IF(p3='Kurang',1,0)) AS p3_kurang,
		SUM(IF(p3='Cukup',1,0)) AS p3_cukup,
		SUM(IF(p3='Baik',1,0)) AS p3_baik,
		SUM(IF(p3='Baik Sekali',1,0)) AS p3_baik_sekali,
		
		SUM(IF(p4='Kurang Sekali',1,0)) AS p4_kurang_sekali, 
		SUM(IF(p4='Kurang',1,0)) AS p4_kurang,
		SUM(IF(p4='Cukup',1,0)) AS p4_cukup,
		SUM(IF(p4='Baik',1,0)) AS p4_baik,
		SUM(IF(p4='Baik Sekali',1,0)) AS p4_baik_sekali,
		
		SUM(IF(p5='Ya',1,0)) AS p5_ya,
		SUM(IF(p5!='Ya',1,0)) AS p5_tidak,

		SUM(IF(p6='Ya',1,0)) AS p6_ya,
		SUM(IF(p6!='Ya',1,0)) AS p6_tidak,

		SUM(IF(p7='Ya',1,0)) AS p7_ya,
		SUM(IF(p7!='Ya',1,0)) AS p7_tidak");
		
		$this->db->from('jawaban_survey_ranap');
		$this->db->where('month(tgl_isi)', 06);
		$this->db->group_by('bangsal');
		$this->db->like('year(tgl_isi)', 2023);
		return $this->db->get()->result_array();

	}

}
