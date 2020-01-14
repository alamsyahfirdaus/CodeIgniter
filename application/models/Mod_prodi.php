<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_prodi extends CI_Model {

    public function getData() {
    	$this->db->select('*');
    	$this->db->from('program_studi ps');
    	$this->db->join('fakultas f', 'ps.fakultas_id = f.fakultas_id', 'left' );

    	return $this->db->get();
	}

}

/* End of file Mod_prodi.php */
/* Location: ./application/models/Mod_prodi.php */