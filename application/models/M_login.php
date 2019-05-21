<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function get_user($username)
	{
		$this->db->select('tbl_user.id_user,tbl_user.nama_user,tbl_user.password,tbl_user.username,tbl_level.id_level,tbl_level.nama_level');
		$this->db->join('tbl_level', 'tbl_level.id_level = tbl_user.id_level', 'left');
		$this->db->where('username', $username);
		$query =  $this->db->get('tbl_user');
		return $query->result();

	}

	

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */