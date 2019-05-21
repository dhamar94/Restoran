<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		
		$this->load->view('Login/login');
	}

	public function proses()
	{

		$username = $this->db->escape_str($this->input->post('username'));
		$password = $this->db->escape_str($this->input->post('password'));
		$cek = $this->M_login->get_user($username);
		if ($cek == TRUE){
			foreach ($cek as $key) {
				if (password_verify($password,$key->password)) {
					

					$array = array(
						'id_user' => $key->id_user,
						'nama_level' => $key->nama_level,
						'password' => $password,
						'username' => $key->username,
						'nama_user' => $key->nama_user,
						'id_level' => $key->id_level
					);
					
					$this->session->set_userdata($array);
					redirect('Dashboard','refresh');

				}else{
					$hasil = $this->session->set_flashdata('hasil', '<div class="alert alert-danger">Password salah</div>');
					redirect('Login',$hasil);
				}
			}

		}else{
			$hasil = $this->session->set_flashdata('hasil', '<div class="alert alert-danger">Username tidak di temukan</div>');
			redirect('Login',$hasil);
			
		}	
	}

		
		
	


	





}



/* End of file Login.php */
/* Location: ./application/controllers/Login.php */