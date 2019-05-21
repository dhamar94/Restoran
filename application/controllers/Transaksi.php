<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$session =  htmlspecialchars($this->session->userdata("nama_level"));
		if ($this->session->userdata('id_user') == "") {
			redirect('Login');
		}else{
			if (($session !="Administrator") && ($session !="Kasir")) {
				redirect('Dashboard','refresh');
			}
		}
		$this->load->model('M_transaksi');
		$this->load->library('Datatables');
	}

	public function index()
	{
		$data['active'] = "";
		$data['judul'] ="Transaksi";
		if ($this->session->userdata("nama_level") == "Kasir") {
			$this->load->view('Componen/kasir',$data);
		}else{
			$this->load->view('Componen/header',$data);
		}
		$this->load->view("Transaksi/transaksi");
		$this->load->view("Transaksi/modal_tambah");
		$this->load->view("Componen/footer");
		$this->load->view("Transaksi/script");
	}

	public function orderan()
	{
		$meja = $this->db->escape_str(htmlspecialchars($this->input->post('meja')));
		$data = $this->M_transaksi->orderan($meja);
		if (empty($data)) {
			echo 1;
		}else{
			echo json_encode($data);
		}
	}

	public function tambah()
	{
		// $no_meja = $this->input->post('no_meja');
		$total_bayar = $this->db->escape_str(htmlspecialchars($this->input->post('total_bayar')));
		$id_order = $this->db->escape_str(htmlspecialchars($this->input->post('id_order')));	

		$data = array(
			'id_user' => $this->session->userdata("id_user"),
			'id_order' => $id_order,
			'tanggal' => date('Y-m-d'),
			'total_bayar' => $total_bayar,
		);
		$this->db->insert('tbl_transaksi', $data);

		$status = array('status_order' => "selesai");
		$this->db->where('id_order', $id_order);
		$this->db->update('tbl_order', $status);

		
	}

	public function tampil_transaksi()
	{
		header('Content-Type: application/json');
        echo $this->M_transaksi->tampil_transaksi();
	}

	public function hapus()
	{
		$id_transaksi = $this->input->post('id_transaksi');
		$id_order = $this->input->post('id_order');
		var_dump($id_order);

		$data = array(
			'status_order' => "sudah di proses",
		);

		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->delete('tbl_transaksi');

		$this->db->where('id_order', $id_order);
		$this->db->update('tbl_order', $data);
	}




}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */