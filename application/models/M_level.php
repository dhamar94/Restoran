<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_level extends CI_Model {

	public function tampil()
	{

		$this->datatables->select("id_level,nama_level");
		$this->datatables->from("tbl_level");
		$this->datatables->add_column('aksi', '<center><a href="#" data="$1" class="ubah" style="color:#686868; padding: 15px; "> <i class="fa  fa-pencil-square-o fa-lg"></i></a><a href="#" data="$1" class="hapus" style="color:#686868;"><i class="fa fa-trash fa-lg"></i></a></center>', 'id_level');
		return $this->datatables->generate();
		
	}

	public function get($id)
	{
		$this->db->where('id_level', $id);
		$query = $this->db->get('tbl_level');
		return $query->result();
	}

	public function level()
	{
		$query = $this->db->get('tbl_level');
		return $query->result();
	}

	

}

/* End of file M_level.php */
/* Location: ./application/models/M_level.php */