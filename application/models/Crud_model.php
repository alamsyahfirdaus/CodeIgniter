<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
	
	public function methodInsert($table, $data)
	{
		if ($this->db->insert($table, $data)) {
			return array(
				'status' => 'success',
				'value' => $this->db->insert_id()
			);
		} else {
			return array('status' => 'failed');
		}
	}

	public function methodDelete($table, $data)
	{
		$this->db->where($data);
		if ($this->db->delete($table)) {
			return array('status' => 'success');
		} else {
			return array('status' => 'failed');
		}
	}

	public function methodUpdate($table, $where, $data)
	{
		$this->db->where($where);
		if ($this->db->update($table, $data)) {
			return array('status' => 'success');
		} else {
			return array('status' => 'failed');
		}
	}

	public function methodGet($table, $where = NULL, $limit = NULL, $like = NULL)
	{
		if ($like != NULL) {
			$this->db->like($like);
		} 
		if ($limit != NULL) {
			$this->db->limit($limit);
		if ($where != NULL) {
			$this->db->where($where);
		}
		return $this->db->get($table);
	}
	
	public function methodOrderBy($table, $where = NULL, $orderBy = NULL, $type = NULL)
	{
		if ($where != NULL) {
			$this->db->where($table);
		}
		if ($orderBy != NULL) {
			$this->db->order_by($orderBy, $type);
		}
		return $this->db->get($table);
	}

	public function methodSearch($table, $search = NULL, $where = NULL)
	{
		if ($search != NULL) {
			$this->db->like($search);
		}
		if ($where != NULL) {
			$this->db->where($where);
		}
		return $this->db->get($table);
	}

	public function methodSearchByWhere($table, $where = NULL, $search = NULL)
	{
		if ($search != NULL) {
			$this->db->like($search);
		}
		if ($where != NULL) {
			$this->db->where($where);
		}
		return $this->db->get($table);
	}

	public function methodCount($table, $where = NULL)
	{
		if ($where != NULL) {
			$this->db->get($where);
		}
		return $this->db->get($table);
	}

	public function methodSearchMax($table, $field = NULL, $row = NULL, $where = NULL)
	{
	    if ($field != NULL) {
	        $this->db->select_max($field, $row);
	    }
	    if ($where != NULL) {
	        $this->db->where($where);
	    }
	    return $this->db->get($table);
	}

	public function methodSearchAmount($table, $field, $row, $where = NULL)
	{
	    $this->db->select('sum(' . $field . ') as ' . $row);
	    if ($where != NULL) {
	        $this->db->where($where);
	    }
	    return $this->db->get($table);
	}

	public function methodWhereIn($table, $field, $where)
	{
	    if ($where != NULL) {
	        $this->db->where_in($field, $where);
	    }
	    return $this->db->get($table);
	}

	public function methodGetFunction($table, $where = NULL)
	{
	    if ($where != NULL) {
	        $where;
	    }
	    return $this->db->get($table);
	}
}

/* End of file Crud_model.php */
/* Location: ./application/models/Crud_model.php */