<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Myadmin extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->view('modul/headadm', $data);
		$this->load->view("modulcrud/tambahdata");
		$this->load->view('modul/footadm');
	}

	public function aksi_tambahdata()
	{
		$nama = $this->input->post('nama');
		$npm = $this->input->post('npm');
		$smstr = $this->input->post('semester');

		$data = array(
			'npm' => $nama,
			'nama' => $npm,
			'semester' => $smstr
		);

		$this->M_admin->tambah_data('data_mahasiswa', $data);
	}
}
