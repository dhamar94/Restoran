<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_management_user extends CI_Model {

    public function tampil_user()
    {
        $this->datatables->select('id_user,username,nama_user,nama_level');
        $this->datatables->from('tbl_user');
        $this->datatables->join("tbl_level","tbl_level.id_level = tbl_user.id_level","left");
        $this->datatables->add_column('aksi', '<center><i data="$1" class="fa fa reset  fa-refresh fa-lg" style="cursor:pointer"></i>  <a href="#" data="$1" class="ubah" style="color:#686868; padding: 15px; "> <i class="fa  fa-pencil-square-o fa-lg"></i></a><a href="#" data="$1" class="hapus" style="color:#686868;"><i class="fa fa-trash fa-lg"></i></a></center>', 'id_user');

        return $this->datatables->generate();
    
    }
    public function get($id)
    {
    	$this->db->select('id_user,username,nama_user,id_level');
    	$this->db->where('id_user', $id);
    	$query = $this->db->get('tbl_user');
    	return $query->result();

    }

    public function cek_pass($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('tbl_user');
        return $query->result();

    }

    

}

/* End of file M_management_user.php */
/* Location: ./application/models/M_management_user.php */