<div class="container mt-5">
	<div class="shadow-lg p-3 pl-5 pr-5 mb-5 bg-white rounded">
		<h1 class="nama mb-4">Halo, <?=  $this->session->userdata("nama"); ?>!</h1>
		<a class="btn btn-primary" href="<?php echo site_url('Myadmin/tambahdata'); ?>">+Tambah Data</a>


		<table class="table table-striped table-bordered mt-5" id="table-Data">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">Semester</th>
				</tr>
			</thead>
			<tbody>
				<?php for($i = 1; $i <= 50; $i++): ?>
				<tr>
					<th scope="row"><?=$i; ?></th>
					<td>Mark</td>
					<td>Otto</td>
				</tr>
				<?php endfor; ?>
			</tbody>
		</table>

	</div>
</div>


<script src="">
$(document).ready(function() {
    $('#table-Data').DataTable();
} );
</script>