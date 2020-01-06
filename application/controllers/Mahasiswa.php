<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_login');
	}

    public function index() {
        $data['title'] = "Mahasiswa";
        $this->load->view("mahasiswa/modul/head", $data);
        $this->load->view("mahasiswa/modul/younav");
        $this->load->view("mahasiswa/landing");
        $this->load->view("mahasiswa/modul/foot");
    }

}
