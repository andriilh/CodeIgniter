<div class="container mt-5">
	<div class="shadow-lg p-3 pl-5 pr-5 mb-5 bg-white rounded">

		<h1 class="text-center pb-2">Login</h1>
		<form action="<?=  base_url("Login/login_aksi"); ?>" method="POST">
			<?php $this->session->flashdata('message'); ?>
			<input type="text" name="username" id="" class="form-control" placeholder="Username">
			<input type="password" name="password" id="" class="form-control mt-3" placeholder="Password">
			<button type="submit" class="btn btn-outline-success btn-block mt-3">Login</button>
		</form>

		<p class="mt-3">Belum memiliki akun? <a class="font-weight-bold"
				href="<?= site_url("login/register_view"); ?>">Registrasi</a></p>
	</div>
</div>
