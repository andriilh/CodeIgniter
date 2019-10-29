<h1>Tambah data</h1>

<form action="<?= base_url('Myadmin/aksi_tambahdata'); ?>" method="post">
   <input type="text" name="npm" maxlength="12" placeholder="Masukkan NPM">
   <input type="text" name="nama" placeholder="Masukkan nama lengkap">
   <select name="semester" id="">
      <?php for ($i = 1; $i < 10; $i++) { ?>
         <option value=""><?= $i; ?></option>
      <?php } ?>
   </select>
   <button type="submit">Submit</button>
</form>