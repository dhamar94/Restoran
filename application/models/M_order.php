 <?php

class M_order extends CI_Model {

	public function get_id_order($menu)
	{
		$this->db->where('nama_referensi', $menu);
		$query =  $this->db->get('tbl_referensi');
		return $query->result();
	}

	public function tampil_order()
    {
        $this->datatables->select('id_order,no_meja,tanggal,nama_user,keterangan,status_order');
        $this->datatables->from('tbl_order');
        $this->datatables->join("tbl_user","tbl_user.id_user=tbl_order.id_user","left");
        $this->db->where("(status_order='belum di proses' OR status_order='sedang di proses' OR status_order='sudah di proses')");
        $this->datatables->where("tanggal",date("Y-m-d"));
        $this->db->order_by('id_order', 'desc');
        $this->datatables->add_column("sts","<input type='submit' data='$2' class='btn sts btn-sm' value='$1'> ","status_order,id_order");
        $this->datatables->add_column('aksi', '<center><i class="fa fa-eye fa-lg detail" data="$1" style="cursor:pointer;"></i><a href="#" data="$1" class="ubah" style="color:#686868; padding: 15px; "> <i class="fa  fa-pencil-square-o fa-lg"></i></a><a href="#" data="$1" class="hapus" style="color:#686868;"><i class="fa fa-trash fa-lg"></i></a></center>', 'id_order');

        return $this->datatables->generate();
    
    }
    public function histori_order()
    {
        $this->datatables->select('id_order,no_meja,tanggal,nama_user,keterangan,status_order');
        $this->datatables->from('tbl_order');
        $this->datatables->join("tbl_user","tbl_user.id_user=tbl_order.id_user","left");
        $this->datatables->where("tbl_order.status_order","selesai");
        $this->datatables->where("tanggal",date("Y-m-d"));
        $this->db->order_by('id_order', 'desc');
       
        return $this->datatables->generate();
    
    }
    public function jumlah()
    {

        $this->db->from('tbl_order');
        $this->db->where("(status_order='belum di proses' OR status_order='sedang di proses' OR status_order='sudah di proses')");
        $this->db->where('tanggal', date("Y-m-d"));
        // $this->db->get();
        return $this->db->count_all_results();
        
    }

    public function get_order($id)
    {
    	$this->db->where('id_order', $id);
    	$query = $this->db->get('tbl_order');
    	return $query->result();
    }

    public function get_detail_order($id)
    {
    	$this->db->select('*');
        $this->db->from('tbl_detail_order');
        $this->db->join('tbl_referensi', 'tbl_referensi.id_referensi = tbl_detail_order.id_referensi', 'left');
        $this->db->where('id_order', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function cek_no_meja($no)
    {
        $this->db->where('no_meja', $no);
        $this->db->where("(status_order='belum di proses' OR status_order='sedang di proses' OR status_order='sudah di proses')");
        $this->db->where("tanggal",date("Y-m-d"));
      
        $query = $this->db->get('tbl_order');
        return $query->result();
    }

    public function user_order($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_detail_order', 'tbl_order.id_order = tbl_detail_order.id_order', 'left');
        $this->db->join('tbl_referensi', 'tbl_referensi.id_referensi = tbl_detail_order.id_referensi', 'left');
        $this->db->where('tbl_order.id_order', $id);
        $query = $this->db->get();
        return $query->result();
    }

	

	

}

/* End of file M_order.php */
/* Location: ./application/models/M_order.php */