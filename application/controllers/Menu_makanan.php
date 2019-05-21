<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_makanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('id_user') == "") {
			redirect('login');
		}
		$this->load->model('M_referensi');
	}

	public function index()
	{
		$data['judul'] = "Menu Makanan";
		$data['active'] ="";
		$data['referensi'] = $this->M_referensi->tampil();
		$this->load->view('Componen/header', $data);
		$this->load->view('Menu_makanan/menu_makanan',$data);
		$this->load->view('Componen/footer');
		$this->load->view('Menu_makanan/modal_tambah');
		$this->load->view('Menu_makanan/modal_update');
		$this->load->view('Menu_makanan/script');
		
	}

	public function tambah()
	{
	
		$config['upload_path'] = './assets/image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '5000';
		$config['encrypt_name'] = true;
		$config['remove_spaces'] = true;
		$config['max_width']  = '7204';
		$config['max_height']  = '5608';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('file')){
			echo $this->upload->display_errors();

		}
		else{
			$dat = array('upload_data' => $this->upload->data());
			
			echo "success";
		}

		$nama_referensi = $this->db->escape_str(htmlspecialchars($this->input->post('nama_referensi')));
		$harga = $this->db->escape_str(htmlspecialchars($this->input->post('harga')));
		$keterangan =  $this->db->escape_str(htmlspecialchars($this->input->post('keterangan')));
		$kategori = $this->db->escape_str(htmlspecialchars($this->input->post('kategori')));
		$gambar = $this->db->escape_str(htmlspecialchars($this->upload->data('file_name')));
		$status = $this->db->escape_str(htmlspecialchars($this->input->post('status')));

		$objek = array(
			'nama_referensi' => $nama_referensi,
			'status_referensi' => $status,
			'harga' => $harga,
			'gambar' => $gambar,
			'kategori' => $kategori,
		);

		$query = $this->db->insert('tbl_referensi', $objek);
	}

	public function hapus()
	{
		$id = $this->db->escape_str(htmlspecialchars($this->input->post('id')));
		$gambar = $this->db->escape_str(htmlspecialchars($this->input->post('gambar')));
		$url ='./assets/image/'.$gambar;
		$this->db->where('id_referensi', $id);
		$query = $this->db->delete('tbl_referensi');
		unlink($url);
		echo json_encode($query);
	}

	public function get()
	{
		$id = $this->db->escape_str(htmlspecialchars($this->input->post('id_ref')));
		$query = $this->M_referensi->get($id);
		echo json_encode($query);
	}

	public function update()
	{
		$config['upload_path'] = './assets/image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '5000';
		$config['encrypt_name'] = true;
		$config['remove_spaces'] = true;
		$config['max_width']  = '7204';
		$config['max_height']  = '5608';
		$gambar_lama = $this->db->escape_str(htmlspecialchars($this->input->post('gambar_lama')));
		$this->load->library('upload', $config);
		
		if ($_FILES['file']['error'] === 4) {
			$gambar = $gambar_lama;
		}else{
			$url ='./assets/image/'.$gambar_lama;
			unlink($url);
			$this->upload->do_upload('file');
			$gambar = $this->db->escape_str(htmlspecialchars($this->upload->data('file_name')));
		}
		
		$id_referensi = $this->db->escape_str(htmlspecialchars($this->input->post('id_referensi')));
		$nama_referensi = $this->db->escape_str(htmlspecialchars($this->input->post('nama_referensi')));
		$harga = $this->db->escape_str(htmlspecialchars($this->input->post('harga')));
		$status =  $this->db->escape_str(htmlspecialchars($this->input->post('status')));
		$kategori = $this->db->escape_str(htmlspecialchars($this->input->post('kategori')));
		

		$objek = array(
			
			'nama_referensi' => $nama_referensi,
			'status_referensi' => $status,
			'harga' => $harga,
			'gambar' => $gambar,
			'kategori' => $kategori,
		);

		$this->db->where('id_referensi', $id_referensi);
		$query = $this->db->update('tbl_referensi', $objek);
		echo json_encode($query);

	}

	public function cek()
	{
		$nama = $this->input->post('nama');
		$query = $this->M_referensi->cek_makanan($nama);
		if (empty($query)) {
			echo 0;
		}else{
			echo 1;
		}
	}



}

/* End of file Menu_makanan.php */
/* Location: ./application/controllers/Menu_makanan.php */