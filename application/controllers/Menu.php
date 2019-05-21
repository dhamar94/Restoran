<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_referensi');
		$this->load->library('cart');
		
	}

	public function index()
	{

		
		$data['makanan'] = $this->M_referensi->tampil_autocomplate();
		$this->load->view('User/menus',$data);
// 		$this->load->view("User/menus",$data);
		$this->load->view('User/script');
	}

	public function cart()
	{
		$id = $this->input->post('id_referensi');
		$nama_referensi = $this->input->post('nama_referensi');
		$harga = $this->input->post('harga');
		$gambar = $this->input->post('gambar');
	

		$data = array(
			'id'      => uniqid(),
			'qty'     => 1,
			'price'   => $harga,
			'gambar' => $gambar,
			'name'    => "Teh manis",
			'id_makanan' => $id,
		);
		
		$qu = $this->cart->insert($data);
		// var_dump($this->cart->contents());

	
		
    }


}

/* End of file user.php */
/* Location: ./application/controllers/user.php */