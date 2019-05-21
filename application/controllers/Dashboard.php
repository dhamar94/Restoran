<?php

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_order');
		$this->load->model('M_transaksi');
		
		if ($this->session->userdata('id_user') == "") {
			redirect('Login');
		}
	}

	public function index()
	{
		$data['judul'] = "Dashboard";
		$data['active'] = "";
		$data['hasil_order'] =$this->M_order->jumlah();
		$data['hasil'] =$this->M_transaksi->jumlah();
		$tanggal = date("Y-m-d", strtotime("-7 months", strtotime(date("Y-m-d"))));
		$session = $this->session->userdata("nama_level");
		$data['chart'] = $this->M_transaksi->chart($tanggal);
		if ($session=="Administrator") {
			$this->load->view('Componen/header', $data);
		}elseif ($session=="Kasir") {
			$this->load->view('Componen/kasir', $data);
		}elseif ($session=="Waiter"){
			$this->load->view('Componen/waiter', $data);
		}else{
			$this->load->view('Componen/owner', $data);
			
		}
		$this->load->view('Dashboard/dashboard',$data);
		$this->load->view('Componen/footer');
		$this->load->view('Dashboard/script',$data);
		
	}

	public function log()
	{
		$this->session->sess_destroy();
		redirect('Login','refresh');
		
	}

	public function input()
	{
		echo date("F,  Y",  strtotime(date("Y-m")));
	}

	

	
}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */