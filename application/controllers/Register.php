<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->library('form_validation');

	}

	// List all your items
	public function index()
	{
		$this->form_validation->set_rules('nim', 'Nim', 'trim|required', [
			'required' => 'NIM harus diisi.'
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Password harus diisi.'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data ['title'] = 'Login';
			$this->load->view('register/login', $data);
		} else {
			$this->_login();
		}

	}

	private function _login()
	{
		$nim = $this->input->post('nim');
		$password = $this->input->post('password');

		$login = $this->db->get_where('user', ['nim' => $nim])->row_array();

		if ($login) {
			if ($login['is_active'] == 1) {
				if (password_verify($password, $user['password'])) {
					# code...
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password tidak sesuai!</div>');
					redirect('dashboard');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun belum diaktivasi!</div>');
				redirect('register');
			}

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIM belum terdaftar!</div>');
			redirect('register');
		}
	}

	public function create()
	{
		$this->form_validation->set_rules('nim', 'NIM', 'trim|required|is_unique[user.nim]', [
			'required' => 'NIM harus diisi.',
			'is_unique' => 'NIM sudah terdaftar'
		]);
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required', [
			'required' => 'Nama Lengkap harus diisi.'
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
			'required' => 'Email harus diisi.',
			'valid_email' => 'Email tidak valid.',
			'is_unique' => 'Email sudah terdaftar'

		]);
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]',[
			'required' => 'Password harus diisi.',
			'matches' => 'Password tidak sama.',
			'min_length' => 'Minimal 3 karakter.'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');

		if ($this->form_validation->run() == FALSE) {
			$data ['title'] = 'Register';
			$this->load->view('register/create', $data);
		} else {
			$data = [
				'nim' => htmlspecialchars($this->input->post('nim', TRUE)),
				'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', TRUE)),
				'email' => htmlspecialchars($this->input->post('email', TRUE)),
				'no_handphone' => '',
				'image' => 'default.jpg',
				'password' => md5($this->input->post('password')),
				'program_studi_id' => 1,
				'role_id' => 2,
				'is_active' => 1,
				'data_created' => time()
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! pendaftaran berhasil. Silahkan Login</div>');
			redirect('register');
		}
	}

	public function logout()
	{
		 $this->session->unset_userdata('nim');
		 $this->session->unset_userdata('role_id');

		 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah Loguot!</div>');
		 redirect('register');
	}

}

/* End of file register.php */
/* Location: ./application/controllers/register.php */
