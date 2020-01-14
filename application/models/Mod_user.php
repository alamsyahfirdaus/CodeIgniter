<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_user extends CI_Model 
{
	public $nim;
	public $nama_lengkap;
	public $no_handphone;
	public $program_studi_id;
	public $fakultas_name;

    public function getData() {
    	$this->db->select('*');
    	$this->db->from('user u');
    	$this->db->join('program_studi ps', 'u.program_studi_id = ps.program_studi_id', 'left' );
    	$this->db->join('fakultas f', 'ps.fakultas_id = f.fakultas_id', 'left' );
    	return $this->db->get();
	}

	public function tambahData()
	{
		$data = [
			'nim' => $this->input->post('nim', TRUE),
			'nama_lengkap' => $this->input->post('nama_lengkap', TRUE),
			'email' => $this->input->post('email', TRUE),
			'no_handphone' => $this->input->post('no_handphone', TRUE),
			'image' => 'default.jpg',
			'password' => md5($this->input->post('password')),
			'program_studi_id' => $this->input->post('program_studi_id', TRUE),
			'is_active' => 1,
			'date_created' => time()
		];

		$this->db->insert('user', $data);
	}

	// public function editData($id)
	// {
	// 	$data = [
	// 		'nim' => $this->input->post('nim', TRUE),
	// 		'nama_lengkap' => $this->input->post('nama_lengkap', TRUE),
	// 		'email' => $this->input->post('email', TRUE),
	// 		'no_handphone' => $this->input->post('no_handphone', TRUE),
	// 		'image' => 'default.jpg',
	// 		'password' => md5($this->input->post('password')),
	// 		'program_studi_id' => $this->input->post('program_studi_id', TRUE),
	// 		'is_active' => 1,
	// 		'date_created' => time()
	// 	];

	// 	$this->db->where('md5(id)', $id);
	// 	$this->db->update('user', $data);
	// }
	
	public function hapusData($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function getId($id)
	{
		$this->db->where('md5(id)', $id);
		return $this->getData()->row_array();
	}

	public function updateData($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

}

/* End of file Mod_user.php */
/* Location: ./application/models/Mod_user.php */