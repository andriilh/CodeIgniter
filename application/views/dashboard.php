<?php $this->load->view("modul/headadm"); ?>
<div class="container mt-5">
    <div class="shadow-lg p-3 pl-5 pr-5 mb-5 bg-white rounded">
        <h1 class="nama mb-4">Halo, <?=  $this->session->userdata("nama"); ?>!</h1>
        <a class="btn btn-primary" href="<?php echo site_url('Myadmin/tambahdata'); ?>">Tambah Data</a>
        <a class="btn btn-danger" href="<?= site_url("Login/logout"); ?>">logout</a>
    </div>
</div>