<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$session =  htmlspecialchars($this->session->userdata("nama_level"));
		if ($this->session->userdata('id_user') == "") {
			redirect('Login');
		}else{
			if (($session !="Administrator") && ($session !="Waiter")) {
				redirect('Dashboard','refresh');
			}
		}
		$this->load->model('M_order');

		$this->load->library('Datatables');
		$this->load->model('M_referensi');
	}

	public function index()
	{
		$data['judul'] = "Oder";
		$data['active'] = "";
		if ($this->session->userdata("nama_level") == "Waiter") {
			$this->load->view('Componen/waiter',$data);
		}else{
			$this->load->view('Componen/header',$data);
		}
		$this->load->view('Order/order');
		$this->load->view('Componen/footer');
		$this->load->view('Order/modal_tambah');
		$this->load->view('Order/modal_update');
		$this->load->view('Order/modal_detail');
		$this->load->view('Order/modal_status');
		$this->load->view('Order/script');
		
	}
	public function cek()
	{
		$menu = $this->db->escape_str(htmlspecialchars($this->input->post('menu')));
		$get_id = $this->M_order->get_id_order($menu);

		foreach ($get_id as $key ) {
			 if ($key->id_referensi == NULL) {
			    echo 0;			 	
			 }else{
			 	echo $key->id_referensi;
			 }
		}



	}

	

	public function tambah()
	{
		$kode = uniqid();
		$no_meja = $this->db->escape_str(htmlspecialchars($this->input->post('no_meja')));
		$keterangan = $this->db->escape_str(htmlspecialchars($this->input->post('keterangan')));

		$data = array(
			'id_order' => $kode,
			'no_meja' => $no_meja,
			'tanggal' => date('Y-m-d'),
			'status_order' => "belum di proses",
			'id_user' => $this->session->userdata("id_user"),
			'keterangan' => $keterangan,
		);
		
		

		$this->db->insert('tbl_order', $data);
        $no=0;
         foreach ($_POST['order_menu'] as $key) {
         	$jml = htmlspecialchars($_POST['jml'][$no]);
				$data2 = array(
					'id_order' => $kode,
					'id_referensi' => $key,
					'jumlah' => $jml,
				);
				$this->db->insert('tbl_detail_order', $data2);
			$no++;
		}
		

	}

	public function tampil_order()
    {
        // header('Content-Type: application/json');
        echo $this->M_order->tampil_order();
    }

    public function tampil_histori()
    {
        // header('Content-Type: application/json');
        echo $this->M_order->histori_order();
    }

    public function get_autocomplate()
    {
    	$data = $this->M_referensi->tampil_autocomplate();
    	
    	$makanan =  array();
    	foreach ($data as $key) {
    		$data =  $key->nama_referensi;
    		array_push($makanan, $data);
    	}
    	echo json_encode($makanan);
    	
    }

    public function get_order()
    {
    	$id = $this->input->post('id');
    	$data = $this->M_order->get_order($id);
    	echo json_encode($data);
    }

    public function get_detail_order()
    {
    	$id = $this->db->escape_str(htmlspecialchars($this->input->post('id')));
    	$data = $this->M_order->get_detail_order($id);
    	echo json_encode($data);
    }

    public function hapus()
    {
    	$id = $this->db->escape_str(htmlspecialchars($this->input->post('id')));
    	$user = $this->input->post('user');
    	var_dump($id);
    	if ($user == "user") {
    		$this->session->unset_userdata('id');
    	}else{

    	}
    	$this->db->where('id_order', $id);
    	$this->db->delete('tbl_detail_order');

    	$this->db->where('id_order', $id);
    	$this->db->delete('tbl_order');
    }
    public function update()
    {
    	$kode = $this->db->escape_str(htmlspecialchars($this->input->post('id')));
		$no_meja = $this->db->escape_str(htmlspecialchars($this->input->post('no_meja')));
		$keterangan = $this->db->escape_str(htmlspecialchars($this->input->post('keterangan')));
		$status = $this->db->escape_str(htmlspecialchars($this->input->post('status')));

		$data = array(
			'no_meja' => $no_meja,
			'tanggal' => date('Y-m-d'),
			'status_order' => $status,
			'id_user' => $this->session->userdata("id_user"),
			'keterangan' => $keterangan,
		);
		
		$this->db->where('id_order', $kode);
		$this->db->update('tbl_order', $data);

		$this->db->where('id_order', $kode);
		$this->db->delete('tbl_detail_order');
		
		$no=0;
         foreach ($_POST['order_menu'] as $key) {
         	$jml = htmlspecialchars($_POST['jml'][$no]);
				$data2 = array(
					'id_order' => $kode,
					'id_referensi' => $key,
					'jumlah' => $jml,
				);
				$this->db->insert('tbl_detail_order', $data2);
			$no++;
		}

		

    }


    public function cek_no_meja()
    {
    	$no = $this->db->escape_str(htmlspecialchars($this->input->post('id')));
    	$d = $this->M_order->cek_no_meja($no);
    	if (empty($d)) {
    	 	echo "0";
    	 }else{
    	 	echo "1";
    	 }
    }

    public function ubah_status()
    {
    	$status = $this->db->escape_str(htmlspecialchars($this->input->post('status')));
    	$id = $this->db->escape_str(htmlspecialchars($this->input->post('id')));
    	$data = array(
    		'status_order' => $status
    	);

    	$this->db->where('id_order', $id);
    	$query = $this->db->update('tbl_order', $data);
    	echo json_encode($query);

    }

    

	

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */
