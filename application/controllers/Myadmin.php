<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Myadmin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
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
		$this->load->view('modul/navadm');
		$this->load->view("dashboard");
		$this->load->view('modul/js-bootstrap');
		$this->load->view('modul/footadm');
	}

	public function navb()
	{
		$this->load->view('modul/navadm');
	}

	public function tambahdata()
	{
		$data['title'] = "Tambah Data";
		$data['tampil'] = $this->M_admin->tampil_data("data_mahasiswa");
		$this->load->view('modul/headadm',$data);
		$this->load->view("modul/navadm");
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

	public function edit_data($id = null)
	{
		if(is_null($id)) {
			$this->session->set_flashdata('message','<div class="alert alert-succes" role="alert">Data tidak ada!</div>');
			redirect("myadmin/tambahdata");
		} else {
			$where = array('id'=> $id);
			$data["title"] = "EDIT DATA";
			$data['datamhs'] = $this->M_admin->edit_data('data_mahasiswa', $where)->row_array();

			$this->session->set_userdata($where);

			$this->load->view('modul/headadm', $data);
			$this->load->view("modul/navadm");
			$this->load->view('modulcrud/editdata',$id);
			$this->load->view('modul/footadm');
		}
	}

	public function aksi_edit_data()
	{
		// $id = $this->input->post('id');
		$id = $this->session->userdata('id');
		$nama = $this->input->post('nama');
		$npm = $this->input->post('npm');
		$semester = $this->input->post('semester');

		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'semester' => $semester,
		);

		$where = array (
			'id' => $id
		);

		$this->M_admin->update('data_mahasiswa', $data, $where);
		redirect("myadmin/tambahdata");
	}

	public function hapus($id) 
	{
		$where = array('id' => $id);
		$this->M_admin->delete_data('data_mahasiswa', $where);
		$this->session->set_flashdata("message2",'<div class="alert alert-succes" role="alert">Data berhasil dihapus</div>');
		redirect("myadmin/tambahdata");
	}
}
