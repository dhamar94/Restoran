<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_referensi extends CI_Model {

	public function tampil()
	{
		$query = $this->db->get('tbl_referensi');
		return $query->result();
	}
	public function tampil_autocomplate()
	{
		$this->db->where('status_referensi', "Tersedia");
		$query = $this->db->get('tbl_referensi');
		return $query->result();
	}

	public function get($id)
	{
		$this->db->where('id_referensi', $id);
		$query = $this->db->get('tbl_referensi');
		return $query->result();
	}
	public function cek_makanan($nama)
	{
		$this->db->where('nama_referensi', $nama);
		$query = $this->db->get('tbl_referensi');
		return $query->result();
	}
	

	

}

/* End of file M_referensi.php */
/* Location: ./application/models/M_referensi.php */