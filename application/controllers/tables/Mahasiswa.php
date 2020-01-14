<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Mod_user');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->Mod_user->getData()->result();
		$data ['title'] = 'Tables';
		$this->load->view('mahasiswa/vIndex', $data);
	}

	public function insert()
	{
		$data['title'] = 'Insert';

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

		$this->form_validation->set_rules('no_handphone', 'No Handphone', 'trim|required|is_unique[user.no_handphone]', [
			'required' => 'No Handphone harus diisi.',
			'is_unique' => 'No Handphone sudah terdaftar'

		]);

		$this->form_validation->set_rules('program_studi_id', 'Program Studi', 'trim|required', [
			'required' => 'Program Studi harus dipilih.'

		]);

		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]',[
			'required' => 'Password harus diisi.',
			'matches' => 'Password tidak sama.',
			'min_length' => 'Minimal 3 karakter.'
		]);

		$this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('mahasiswa/vTambah', $data);

		} else {
			$this->Mod_user->tambahData();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil ditambahkan!</div>');
			redirect(site_url('tables/mahasiswa'));
		}

	}

	public function delete($id) 
	{
		$where = array('id' => $id);
		$this->Mod_user->hapusData($where,'user');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data telah dihapus!</div>');
		redirect('tables/mahasiswa');
	}

	// public function update($id) 
	// {
	// 	$data['title'] = 'Update';

	// 	$data['nilai'] = $this->Mod_user->getId($id);

	// 	$this->form_validation->set_rules('nim', 'NIM', 'trim|required|is_unique[user.nim]', [
	// 		'required' => 'NIM harus diisi.',
	// 		'is_unique' => 'NIM sudah terdaftar'
	// 	]);

	// 	$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required', [
	// 		'required' => 'Nama Lengkap harus diisi.'
	// 	]);

	// 	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
	// 		'required' => 'Email harus diisi.',
	// 		'valid_email' => 'Email tidak valid.',
	// 		'is_unique' => 'Email sudah terdaftar'

	// 	]);

	// 	$this->form_validation->set_rules('no_handphone', 'No Handphone', 'trim|required|is_unique[user.no_handphone]', [
	// 		'required' => 'No Handphone harus diisi.',
	// 		'is_unique' => 'No Handphone sudah terdaftar'

	// 	]);

	// 	$this->form_validation->set_rules('program_studi_id', 'Program Studi', 'trim|required', [
	// 		'required' => 'Program Studi harus dipilih.'

	// 	]);

	// 	$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]',[
	// 		'required' => 'Password harus diisi.',
	// 		'matches' => 'Password tidak sama.',
	// 		'min_length' => 'Minimal 3 karakter.'
	// 	]);

	// 	$this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');

	// 	if ($this->form_validation->run() == FALSE) {

	// 		$this->load->view('mahasiswa/vEdit', $data);

	// 	} else {
	// 		$this->Mod_user->editData($id);
	// 		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil diedit!</div>');
	// 		redirect(site_url('tables/mahasiswa'));
	// 	}
	// }

	public function detail($id)
	{
		
		$data['title']	= 'Detail';
		$data['heading'] = 'Data Mahasiswa';
		$data['detail'] = $this->Mod_user->getId($id);
		$this->load->view('mahasiswa/vDetail', $data);
	}

	public function update($id)
	{
		$data['title']         = "Update";
		$where = array('md5(id)' => $id);
		$data['mahasiswa'] = $this->Mod_user->updateData($where, 'user')->result();

		$this->load->view('mahasiswa/vEdit', $data);

	}

	public function edit()
	{
		$id = $this->input->post('id');
		$nim = $this->input->post('nim');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$no_handphone = $this->input->post('no_handphone');
		$password = md5($this->input->post('password'));
		$program_studi_id = $this->input->post('program_studi_id');

			$data = array(
				'nim' => $nim,
				'nama_lengkap' => $nama_lengkap,
				'email' => $email,
				'no_handphone' => $no_handphone,
				'password' => md5($password),
				'program_studi_id' => $program_studi_id

			);

			$where = array('md5(id)' => $id);
			$this->db->update('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil diubah!</div>');
			redirect(site_url('tables/mahasiswa'));

	}


}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */
