<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

	public function index()
	{
		// $query = $this->db->get('Table', limit, offset);
		$this->load->view('Pesanan/pesanan');
		$this->load->view('Pesanan/script');
		
	}
	
	public function des()
	{
		$this->cart->destroy();
	}

	public function remove()
	{
		$id = $this->input->post('id');
		$data = array(
			'rowid' => $id,
			'qty'   => 0
		);
		var_dump($this->cart->contents());
		
		$q = $this->cart->update($data);
		// var_dump($q);
	}

	public function cek(){
		print_r($this->cart->contents());
	}



	public function update_qty()
	{
		$id = $this->input->post('id');
		$par = $this->input->post('input');
		
		$data = array(
			'rowid' => $id,
			'qty'   => $par,
		);
		
		
		
		$q = $this->cart->update($data);
	
	}


	public function add_order()
	{
		$nama = $this->input->post('nama');
		$no_meja = $this->input->post('no_meja');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$id = uniqid();
		$keterangan = $this->input->post('keterangan');
		$array = array(
			'id' => $id,
		);
		
		$this->session->set_userdata( $array );

		$data = array(
			'id_order' => $id,
			'nama' => $nama,
			'no_hp' => $no_hp,
			'alamat' => $alamat
		);

		$this->db->insert('tbl_pelanggan', $data);

		$data2= array(
			'id_order' => $id,
			'no_meja' => $no_meja,
			'tanggal' => date('Y-m-d'),
			'id_user' => 5,
			'keterangan' => $keterangan,
			'status_order' => 'belum di proses'
		);

		$this->db->insert('tbl_order',$data2);

		foreach ($this->cart->contents() as $key) {
			$data3 =array(
				'id_order' => $id,
				'id_referensi' =>$key['id_makanan'],
				'jumlah' => $key['qty'],
			
			);
			$this->db->insert('tbl_detail_order', $data3);
			
		}
		$this->cart->destroy();
	}


	public function add_again()
	{
		foreach ($this->cart->contents() as $key) {
			$data3 =array(
				'id_order' => $this->session->userdata('id'),
				'id_referensi' =>$key['id_makanan'],
				'jumlah' => $key['qty'],
			
			);
			$this->db->insert('tbl_detail_order', $data3);
			
		}
		$this->cart->destroy();

	}

}

/* End of file Pesanan.php */
/* Location: ./application/controllers/Pesanan.php */