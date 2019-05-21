<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_order');
	}

	public function index()
	{
		$id = $this->session->userdata('id');
		$data['order'] = $this->M_order->user_order($id);
		$data['get_hasil'] = $this->M_order->get_order($id);
		

		// var_dump($this->M_order->user_order($id));
		$this->load->view('hasil/hasil',$data);
		$this->load->view('hasil/script');
		
	}
	public function sess()
	{
		var_dump($this->session->userdata('id'));
	}
	public function delete_detail()
	{
		$id = $this->input->post('id');
		$this->db->where('id_detail_order', $id);
		$this->db->delete('tbl_detail_order');
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

}

/* End of file Hasil.php */
/* Location: ./application/controllers/Hasil.php */