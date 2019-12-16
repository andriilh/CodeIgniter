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
		$data['title'] = "Admin Page";
		$this->load->view('modul/headadm', $data);
		$this->load->view("dashboard");
		$this->load->view('modul/footadm');
    }
    
    public function login_view(){
        $data['title'] = "Login";
		$this->load->view('modul/headadm', $data);
		$this->load->view("login");
	}
	

	public function login_aksi()
	{
		$username = $this->input->post("username");
		$pass = $this->input->post("password");

		$where = array(
			'username' => $username,
			'password' => $pass,
		);
		$cek = $this->M_login->cek_login("login", $where);
		if ($cek > 0) {

			$data_session = array(
				'username' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect("Myadmin");
		} else {
			echo "Username dan password salah !";
		}
	}

}
