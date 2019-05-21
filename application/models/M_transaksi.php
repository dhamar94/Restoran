<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

	public function orderan($meja)
	{
		$this->db->select('tbl_order.id_order,tbl_order.no_meja,tbl_detail_order.jumlah,tbl_referensi.nama_referensi,tbl_referensi.harga');
		$this->db->from('tbl_order');
		$this->db->join('tbl_detail_order', 'tbl_detail_order.id_order = tbl_order.id_order', 'left');
		$this->db->join('tbl_referensi', 'tbl_referensi.id_referensi = tbl_detail_order.id_referensi', 'left');
		$this->db->where('no_meja', $meja);
		$this->db->where('status_order', "sudah di proses");
		$this->db->where("tanggal",date("Y-m-d"));
		// $this->db->where("(status_order='belum di proses' OR status_order='sedang di proses')");
		$query = $this->db->get();
		return $query->result();

	}

	public function jumlah()
	{
		$this->db->from('tbl_transaksi');
        $this->db->where('tanggal', date("Y-m-d"));
        // $this->db->get();
        return $this->db->count_all_results();
	}

	public function tampil_transaksi()
	{
		$this->datatables->select("tbl_transaksi.id_transaksi,tbl_user.nama_user,tbl_transaksi.tanggal,tbl_transaksi.total_bayar,tbl_order.no_meja,tbl_transaksi.id_order");
		$this->datatables->from("tbl_transaksi");
		$this->datatables->join("tbl_user","tbl_user.id_user=tbl_transaksi.id_user","left");
		$this->datatables->join("tbl_order","tbl_order.id_order=tbl_transaksi.id_order","left");
		$this->datatables->where("tbl_transaksi.tanggal",date('Y-m-d'));
		$this->datatables->add_column('detail', '<center><a href="#" data="$1" data2="$2" class="hapus" style="color:#686868;"><i class="fa fa-trash fa-lg"></i></a></center>', 'id_transaksi,id_order');
		return $this->datatables->generate();
	}


	public function chart($tanggal)
	{
		$this->db->select('total_bayar,tanggal, SUM(total_bayar) AS sum');
		$this->db->where('tanggal <=',date("Y-m-d"));
		$this->db->where('tanggal >=',$tanggal);
		$this->db->group_by('MONTH(tanggal)');
		$this->db->order_by(' DATE (tanggal)  ',"asc");
		// $this->db->order_by('YEAR (tanggal) ',"DESC");
		$query = $this->db->get('tbl_transaksi');
		return $query->result();
	}

	

}

/* End of file M_transaksi.php */
/* Location: ./application/models/M_transaksi.php */