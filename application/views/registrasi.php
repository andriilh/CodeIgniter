<div class="container mt-5">
    <div class="shadow-lg p-3 pl-5 pr-5 mb-5 bg-white rounded">
        
        <h1 class="text-center pb-2">Registrasi</h1>
        <form action="<?=  base_url("Login/register_aksi"); ?>" method="POST">
            <?php $this->session->flashdata('message'); ?>
            <input type="text" name="username" id="" class="form-control" placeholder="Username">
            <input type="text" name="nama" id="" class="form-control mt-3" placeholder="Nama Lengkap">
            <div class="btn-group btn-group-toggle mt-3" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked value="1"> Admin
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" autocomplete="off" value="2"> Mahasiswa
                </label>
            </div>
            <input type="password" name="password" id="" class="form-control mt-3" placeholder="Password">
            <button type="submit" class="btn btn-outline-success mt-3">Register</button>
        </form>

        <p class="mt-3">Sudah memiliki akun? <a class="font-weight-bold" href="<?= base_url("Login"); ?>">Login</a></p>
    </div>
</div>