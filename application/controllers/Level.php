<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('id_user') == "") {
			redirect('Login');
		}else{
			if ($this->session->userdata("nama_level") != "Administrator") {
				redirect('Dashboard');
			}else{

			}
		}
		$this->load->model('M_level');
		$this->load->library('Datatables');
	}

	public function index()
	{
		$data['judul'] = "Level";
		$data['active'] = "active";
		$this->load->view('Componen/header', $data);
		$this->load->view('Level/level');
		$this->load->view('Componen/footer');
		$this->load->view('Level/modal_tambah');
		$this->load->view('Level/modal_update');
		$this->load->view('Level/script');
		
	}
	public function tambah()
	{
		$nama_level = $this->db->escape_str(htmlspecialchars($this->input->post('nama_level')));

		$data = array(
			'nama_level' =>$nama_level,
		);

		$query = $this->db->insert('tbl_level', $data);
		
	}
	public function tampil()
	{
		header("Content-Type: application/json");
		echo $this->M_level->tampil();
	}

	public function hapus()
	{
		$id =  $this->db->escape_str(htmlspecialchars($this->input->post('id')));
		$this->db->where('id_level', $id);
		$query = $this->db->delete('tbl_level');
		echo json_encode($query);
	}
	public function get()
	{
		$id = $this->db->escape_str(htmlspecialchars($this->input->post('id')));
		$query = $this->M_level->get($id);
		echo json_encode($query);
	}
	public function update()
	{
		$id = $this->db->escape_str(htmlspecialchars($this->input->post('kode')));
		$nama_level = $this->db->escape_str(htmlspecialchars($this->input->post('nama_level')));
		$data =  array(
			'nama_level' => $nama_level
		);

		$this->db->where('id_level', $id);
		$query =  $this->db->update('tbl_level', $data);
		echo json_encode($query);
	}

}

/* End of file Level.php */
/* Location: ./application/controllers/Level.php */