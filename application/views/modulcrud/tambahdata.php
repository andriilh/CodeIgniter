<div class="container">
   <div class="shadow-lg p-5 mb-5 bg-white rounded">
      <h1 class="font-weight-bold text-center">Tambah data</h1>

      <form action="<?= base_url('Myadmin/aksi_tambahdata'); ?>" method="post">
         <div class="form-group">
         <label class="mt-2">NPM</label>   
         <input type="number" class="form-control" name="npm"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" placeholder="Masukkan NPM">
         <label class="mt-2">Nama Lengkap   </label>
         <input type="text" class="form-control"name="nama" placeholder="Masukkan nama lengkap">
         <label class="mt-2">Semester</label>   
         <select name="semester"class="form-control" id="">
               <?php for ($i = 1; $i < 10; $i++) { ?>
                  <option value="<?= $i; ?>">Semester <?= $i; ?></option>
               <?php } ?>
            </select>
            <button type="submit" class="btn btn-primary btn-md btn-block mt-2">Submit</button>
         </div>
      </form>

      <table class="table mt-5">
         <thead class="thead-light">
            <tr>
               <th scope="col">No</th>
               <th scope="col">NPM</th>
               <th scope="col">Nama</th>
               <th scope="col">Semester</th>
               <th scope="col"></th>
            </tr>
         </thead>
         <tbody>
            <?php $no = 1;
            foreach ($tampil as $tpl) : ?>
               <tr>
                  <th scope="row"><?= $no; ?></th>
                  <td><?= $tpl->npm; ?></td>
                  <td><?= $tpl->nama; ?></td>
                  <td>Semester <?= $tpl->semester; ?></td>
                  <td>
                     <a href="<?php echo site_url("Myadmin/edit_data".$tpl->id); ?>" class="btn btn-success btn-sm">Edit</a>
                     <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
               </tr>
            <?php $no++;
            endforeach; ?>
         </tbody>
      </table>

   </div>
</div>