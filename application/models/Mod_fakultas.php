<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_fakultas extends CI_Model {

	public function getData()
	{
		return $this->db->get('fakultas');
	}

	public function getProdi($fakultas_id) 
	{
	    $this->db->select('*');
	    $this->db->from('program_studi');
	    $this->db->where('fakultas_id', $fakultas_id);

	    return $this->db->get();
	}

	public function tambahFak($table, $data)
	{
		if ($this->db->insert($table, $data)) {
			return array(
				'status' => 'BERHASIL',
				'in' => $this->db->insert_id()
			);
		} else {
			return array(
				'status' => 'GAGAL',
			);
		}
	}

	// Add a new item
	public function add()
	{


	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Mod_fakultas.php */
/* Location: ./application/models/Mod_fakultas.php */
