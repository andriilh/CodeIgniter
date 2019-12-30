<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_login');
	}

	public function index()
	{
		if($this->session->userdata('status') == 'login') {
			redirect('myadmin');
		}

		$data['title'] = "Admin Page";
		$this->load->view('modul/headadm', $data);
		$this->load->view("login");
    }
    
    public function login_view(){
        $data['title'] = "Login";
		$this->load->view('modul/headadm', $data);
		$this->load->view("login");
	}
	

	public function login_aksi()
	{
		$user = $this->input->post("username");
		$pass = $this->input->post("password");

		$where = array(
			'username' => $user,
			'password' => $pass
		);

		$cek = $this->M_login->cek_login('login',$where)->num_rows();
		if($cek > 0) {
			$data_session = array(
				'nama' => $user,
				'status' => 'login'
			);

			$this->session->set_userdata($data_session);
			redirect("myadmin");
		} else {
			$this->session->set_flashdata('message', 'Username atau Password salah!');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	// register
	public function register_view()
	{
		$data['title'] = "Registrasi";
		$this->load->view('modul/headadm', $data);
		$this->load->view("registrasi");
		$this->load->view('modul/js-bootstrap');
	}

	public function register_aksi()
	{
		$username = $this->input->post("username");
		$nama = $this->input->post("nama");
		$pass = $this->input->post("password");
		$type = $this->input->post("options");
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $pass,
			'type' => $type
		);
		$this->M_login->tambah_data("login", $data);
		redirect("login");
	}

}
