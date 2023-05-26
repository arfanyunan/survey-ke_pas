<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules(
			'nik',
			'Nik',
			'required|trim|integer|exact_length[8]',
			[
				'integer' => 'NIK Harus Berupa Angka',
				'exact_length' => 'NIK Harus 8 Angka',
				'required' => 'NIK Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim',
			[
				'required' => 'Password Tidak Boleh Kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$data['title'] = "Login";
			$this->load->view('template/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('template/form');
			$this->load->view('template/auth_footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['nik' => $nik])->row_array();
		// jika user ada
		if ($user) {
			// cek password
			if (password_verify($password, $user['password'])) {
				$data = [
					'nik' => $user['nik'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				redirect('admin');
			} else {
				$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Password Salah</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">NIK Belum Terdaftar</div>');
			redirect('auth');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules(
			'nama',
			'nama',
			'required|trim',
			['required' => 'Tidak Boleh Kosong']
		);
		$this->form_validation->set_rules(
			'nik',
			'Nik',
			'required|trim|integer|exact_length[8]',
			[
				'integer' => 'NIK Harus Berupa Angka',
				'exact_length' => 'NIK Harus 8 Angka',
				'required' => 'NIK Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'password1',
			'Password',
			'required|trim|min_length[5]|matches[password2]',
			[
				'required' => 'Tidak Boleh Kosong',
				'matches' => 'Password Tidak Valid',
				'min_length' => 'Password Minimal 5 Karakter'
			]
		);

		$this->form_validation->set_rules(
			'password2',
			'Password',
			'trim'
		);

		if ($this->form_validation->run() == false) {

			$data['title'] = "Registration";
			$this->load->view('template/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('auth/registration');
			$this->load->view('template/auth_footer');
		} else {

			$data = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 1,
				'date_created' => date('y-m-d')
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Login</div>');
			redirect('auth');
		}


		
	}


	public function logout()
	{
		$this->session->unset_userdata('nik');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Logout</div>');
		redirect('auth');
	}
}
