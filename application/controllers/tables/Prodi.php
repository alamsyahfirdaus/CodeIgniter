<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Mod_prodi');
	}

	public function index()
	{
		$data['prodi'] = $this->Mod_prodi->getData()->result();
		$data['title']	  = 'Program Studi';
		$this->load->view('prodi/indexProdi', $data);
	}
}

/* End of file Prodi.php */
/* Location: ./application/controllers/tables/Prodi.php */
