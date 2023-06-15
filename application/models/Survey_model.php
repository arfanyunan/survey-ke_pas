<?php
defined('BASEPATH') or exit('[M] What Are Yout Looking For ?');

class Survey_model extends CI_Model
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
	public function insertSurveyIgd($data_survey)
	{
		$response = array('status' => "Data Berhasil Tersimpan", 'error' => false);
		if (!$this->db->insert('jawaban_survey_igd', $data_survey)) {
			$error = $this->db->error();
			$response['status'] = "Gagal : " . $error['message'];
			$response['error'] = true;
		}
		return $response;
	}

	function showAllDataDokterSpesialis()
	{

		$hasil = $this->db->order_by('kd_sps', 'ASC')->get('spesialis')->result_array();
		return $hasil;
	}
	function showAllDataDokter($kd_sps)
	{

		return $this->db->where('status_aktif', 0)->get_where('dokter', ['kd_sps' => $kd_sps])->result();
	}
	function showAllDataBangsal()
	{

		$dokter = $this->db->order_by('kd_bangsal', 'ASC')->get('bangsal')->result_array();
		return $dokter;
	}
}
