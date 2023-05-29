<?php
defined('BASEPATH') or exit('[M] What Are Yout Looking For ?');

/* Model digunakan untuk menu Admin */
class Admin_Model extends CI_Model
{

	// IGD
	public function showAllDataIgd($periode)
	{
		return $this->db->order_by('tgl_isi', 'ASC')->like(['tgl_isi' => $periode])->get('jawaban_survey_igd')->result_array();
	}
	function showDate1Date2Igd($date_1, $date_2)
	{

		$this->db->select("*");
		$this->db->from('jawaban_survey_igd');
		$this->db->where('tgl_isi BETWEEN "' . date('Y-m-d', strtotime($date_1)) . '" and "' . date('Y-m-d', strtotime("+1 day", strtotime($date_2))) . '"');
		return $this->db->get()->result_array();
	}
	function jumlah_igd_sekarang()
	{
		$this->db->select('*');
		$this->db->from('jawaban_survey_igd');
		$this->db->where('MONTH(tgl_isi)', date('m'));
		$this->db->where('year(tgl_isi)', date('Y'));

		return $this->db->get()->num_rows();
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

		$this->db->select("DATE_FORMAT(tgl_isi,'%M') as bulan ,month(tgl_isi) AS bulanku, year(tgl_isi) AS tahun, COUNT(tgl_isi) AS jumlah");
		$this->db->from('jawaban_survey_igd');
		$this->db->group_by('MONTH(tgl_isi)');
		$this->db->order_by('bulanku', "ASC");
		$this->db->like(['year(tgl_isi)' => $periode_thn]);
		return $this->db->get()->result_array();
	}
	public function showPeriodeIgd($periode)
	{
		$hasil = $this->db->order_by('tgl_isi', 'ASC')->like(['tgl_isi' => $periode])->get('jawaban_survey_igd')->result_array();
		return $hasil;
	}

	// RALAN
	public function showAllDataRalan($periode)
	{
		return $this->db->order_by('tgl_isi', 'ASC')->like(['tgl_isi' => $periode])->get('vw_jawaban_survey_ralan')->result_array();
	}
	function showDate1Date2Ralan($date_1, $date_2)
	{

		$this->db->select("*");
		$this->db->from('vw_jawaban_survey_ralan');
		$this->db->where('tgl_isi BETWEEN "' . date('Y-m-d', strtotime($date_1)) . '" and "' . date('Y-m-d', strtotime("+1 day", strtotime($date_2))) . '"');
		return $this->db->get()->result_array();
	}
	function jumlah_ralan_sekarang()
	{
		$this->db->select('*');
		$this->db->from('jawaban_survey_ralan');
		$this->db->where('MONTH(tgl_isi)', date('m'));
		$this->db->where('year(tgl_isi)', date('Y'));

		return $this->db->get()->num_rows();
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
	public function showPeriodeRalan($periode)
	{
		$hasil = $this->db->order_by('tgl_isi', 'ASC')->like(['tgl_isi' => $periode])->get('jawaban_survey_ralan')->result_array();
		return $hasil;
	}

	// RANAP
	public function showAllDataRanap($periode)
	{
		return $this->db->order_by('tgl_isi', 'ASC')->like(['tgl_isi' => $periode])->get('jawaban_survey_ranap')->result_array();
	}
	function jumlah_ranap_sekarang()
	{
		$this->db->select('*');
		$this->db->from('jawaban_survey_ranap');
		$this->db->where('MONTH(tgl_isi)', date('m'));
		$this->db->where('year(tgl_isi)', date('Y'));

		return $this->db->get()->num_rows();
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

		$this->db->select("DATE_FORMAT(tgl_isi,'%M') as bulan ,month(tgl_isi) AS bulanku, year(tgl_isi) AS tahun, COUNT(tgl_isi) AS jumlah");
		$this->db->from('jawaban_survey_ranap');
		$this->db->group_by('MONTH(tgl_isi)');
		$this->db->order_by('bulanku', "ASC");
		$this->db->like(['year(tgl_isi)' => $periode_thn]);
		return $this->db->get()->result_array();
	}

	function showDate1Date2Ranap($date_1, $date_2)
	{

		$this->db->select("*");
		$this->db->from('jawaban_survey_ranap');
		$this->db->where('tgl_isi BETWEEN "' . date('Y-m-d', strtotime($date_1)) . '" and "' . date('Y-m-d', strtotime("+1 day", strtotime($date_2))) . '"');
		return $this->db->get()->result_array();
	}

	
	// Dokter
	function showAllDataDokter()
	{

		$dokter = $this->db->order_by('kd_dokter', 'ASC')->get('dokter')->result_array();
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



	public function showPeriodeRanap($periode)
	{
		$hasil = $this->db->order_by('tgl_isi', 'ASC')->like(['tgl_isi' => $periode])->get('jawaban_survey_ranap')->result_array();
		return $hasil;
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
	

}
