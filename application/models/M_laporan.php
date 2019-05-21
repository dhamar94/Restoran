<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

	public function laporan_tanggal($tanggal1,$tanggal2)
	{
		$this->db->select('tbl_transaksi.tanggal,tbl_order.no_meja,tbl_user.nama_user,tbl_transaksi.total_bayar');
		$this->db->join('tbl_order', 'tbl_order.id_order = tbl_transaksi.id_order', 'left');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_order.id_user', 'left');
		$this->db->where('tbl_transaksi.tanggal >=',$tanggal1);
		$this->db->where('tbl_transaksi.tanggal <=',$tanggal2);
		$query = $this->db->get('tbl_transaksi');
		return $query->result();

	}


	

}

/* End of file M_laporan.php */
/* Location: ./application/models/M_laporan.php */