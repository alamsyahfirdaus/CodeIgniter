<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fakultas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Mod_fakultas');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['fakultas'] = $this->Mod_fakultas->getData()->result();
		$data['title']	  = 'Fakultas';
		$this->load->view('fakultas/indexFak', $data);

	}

	public function prodi($where)
	{
		$data['prodi'] 	  = $this->Mod_fakultas->getProdi()->result();
		$data['title']	  = 'Fakultas';
		$this->load->view('fakultas/detailFak', $data);
	}

	// Add a new item
	public function insert()
	{
		$data['title'] = 'Insert';
		$this->load->view('mahasiswa/vTambah', $data);
	}


	public function simpan($aksi = 'tambah')
	{
		$input =  $this->input->post();

		$data['fakultas_name'] = $input['fakultas_name'];
		$query = $this->Mod_fakultas->tambahFak('fakultas', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Fakultas berhasil ditambahkan!</div>');
		redirect(site_url('tables/fakultas'));
	}

}

/* End of file Fakultas.php */
/* Location: ./application/controllers/tables/Fakultas.php */
