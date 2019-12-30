<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Myadmin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_admin');

		if($this->session->userdata('status') != 'login') {
			redirect("Login");
		}
	}

	public function index()
	{
		$data['title'] = "Admin Page";
		$this->load->view('modul/headadm', $data);
		$this->load->view("dashboard");
		$this->load->view('modul/footadm');
	}

	public function tambahdata()
	{
		$data['title'] = "Tambah Data";
		$data['tampil'] = $this->M_admin->tampil_data();
		$this->load->view('modul/headadm',$data);
		$this->load->view('modulcrud/tambahdata');
		$this->load->view('modul/footadm');
	}

	public function aksi_tambahdata()
	{
		$nama = $this->input->post('nama');
		$npm = $this->input->post('npm');
		$semester = $this->input->post('semester');

		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'semester' => $semester,
		);

		$this->M_admin->tambah_data('data_mahasiswa', $data);
		redirect("Myadmin/tambahdata");
	}

	public function edit_data($id)
	{
		$where = array('id'=> $id);
		$data["title"] = "EDIT DATA";
		$data['datamhs'] = $this->M_admin->edit_data('data_mahasiswa', $where)->result();
		$this->load->view('modul/headadm', $data);
		$this->load->view('modul/editadm',$id);
		$this->load->view('modul/footadm');
	}

	public function aksi_edit_data()
	{
		$nama = $this->input->post('nama');
		$npm = $this->input->post('npm');
		$semester = $this->input->post('semester');

		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'semester' => $semester,
		);
		
	}
}
