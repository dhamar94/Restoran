<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_management_user');
		if ($this->session->userdata('id_user') == "") {
			redirect('Login');
		}
	}

	public function index()
	{
		$data['judul'] = "Profile";
		$data['active'] = "active";
		if ($this->session->userdata("nama_level") == "Waiter") {
			$this->load->view('Componen/waiter',$data);
		}elseif($this->session->userdata("nama_level") == "Kasir"){
			$this->load->view('Componen/kasir',$data);
		}elseif($this->session->userdata("nama_level") == "Owner"){
			$this->load->view('Componen/owner', $data);

		}else{
			$this->load->view('Componen/header',$data);
		}
		$this->load->view('Profile/profile');
		$this->load->view('Componen/footer');
		$this->load->view('Profile/modal_konfir');
		$this->load->view('Profile/script');
		
	}

	public function ubah()
	{
		$username = $this->db->escape_str(htmlspecialchars($this->input->post('username')));
		$password = $this->db->escape_str(htmlspecialchars($this->input->post('password')));
		if ($password == "") {
			$pass = $this->db->escape_str(htmlspecialchars($this->input->post('pass_lama')));
		}else{
			$pass = $this->db->escape_str(htmlspecialchars($this->input->post('password')));
		}
		$id = $this->db->escape_str(htmlspecialchars($this->input->post('id')));
		$nama = $this->db->escape_str(htmlspecialchars($this->input->post('nama')));

		$data = array(
			'username' => $username,
			'password' => password_hash($pass, PASSWORD_DEFAULT),
			'nama_user' => $nama
		);

		$this->db->where('id_user', $id);
		$this->db->update('tbl_user', $data);
		$array = array(
			'id_user' => $id,
			'password' => $password,
			'username' => $username,
			'nama_user' => $nama,
			'id_level' => $this->session->userdata("id_level")
		);
		
		$this->session->set_userdata($array);
	

	}

	public function cek_password()
	{

		$password = $this->db->escape_str(htmlspecialchars($this->input->post('pass_lama')));
		$username = $this->db->escape_str(htmlspecialchars($this->session->userdata("username")));
		$data = $this->M_management_user->cek_pass($username);
		foreach ($data as $key) {
			if (password_verify($password, $key->password)) {
				echo "1";
			}else{
				echo "0";
			}
		}
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */