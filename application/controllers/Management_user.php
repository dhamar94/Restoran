<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Management_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('string');
		if ($this->session->userdata('id_user') == "") {
			redirect('Login');
		}else{
			if ($this->session->userdata("nama_level") != "Administrator") {
				redirect('Dashboard');
			}else{

			}
		}
		$this->load->model('M_management_user');
		$this->load->model('M_level');   
		$this->load->library('Datatables');
	}

	public function index()
	{
		$data['judul'] = "Management user";
		$data['active'] = "active";
		$data['level'] = $this->M_level->level();
		$this->load->view('Componen/header', $data);
		$this->load->view('Management_user/management_user');
		$this->load->view('Management_user/modal_tambah',$data);
		$this->load->view('Management_user/modal_update',$data);
		$this->load->view('Componen/footer');
		$this->load->view('Management_user/script');

		
	}

	public function tambah()
	{

		$username = $this->db->escape_str(htmlspecialchars(strtolower($this->input->post('username'))));
		$password = $this->db->escape_str(htmlspecialchars(password_hash($this->input->post('password'), PASSWORD_DEFAULT)));
		$nama_user = $this->db->escape_str(htmlspecialchars($this->input->post('nama_user')));
		$level = $this->db->escape_str(htmlspecialchars($this->input->post('level')));

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama_user' => $nama_user,
			'id_level' => $level,
		);

		$this->db->insert('tbl_user', $data);
	}

	public function tampil_user()
    {
        header('Content-Type: application/json');
        echo $this->M_management_user->tampil_user();
    }

    public function delete()
    {
    	$id = $this->db->escape_str(htmlspecialchars($this->input->post('id')));
    	$this->db->where('id_user', $id);
    	$query = $this->db->delete('tbl_user');
    	echo json_encode($query);

    } 

    

    public function get()
    {
    	$id = $this->db->escape_str(htmlspecialchars($this->input->post('id')));
    	$query = $this->M_management_user->get($id);
    	echo json_encode($query);
    }

    public function update()
    {
    	$id = $this->db->escape_str(htmlspecialchars($this->input->post('id')));
    	$username = $this->db->escape_str(htmlspecialchars(strtolower($this->input->post('username'))));
    	$nama_user = $this->db->escape_str(htmlspecialchars($this->input->post('nama_user')));
    	$level = $this->db->escape_str(htmlspecialchars($this->input->post('level')));

    	$data = array(
    		'username' => $username,
    		'nama_user' => $nama_user,
    		'id_level' => $level,
    	);

    	$this->db->where('id_user', $id);
    	$query = $this->db->update('tbl_user', $data);
    	echo json_encode($query);
    }

    public function reset()
    {
    	$id = $this->input->post('id');
    	$random = random_string('alpha',10);
    	$hasil = password_hash($random, PASSWORD_DEFAULT);

    	$data = array(
    		'password' => $hasil,
    	);

    	$this->db->where('id_user', $id);
    	$this->db->update('tbl_user', $data);

    	echo $random;

    	
    }

}

/* End of file Management_user.php */
/* Location: ./application/controllers/Management_user.php */