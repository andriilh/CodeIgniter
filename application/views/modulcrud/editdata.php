<div class="container">
   <h1>Tambah data</h1>

   <form action="<?= base_url('Myadmin/aksi_tambahdata'); ?>" method="post">
      <input type="number" name="npm"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" placeholder="Masukkan NPM">
      <input type="text" name="nama" placeholder="Masukkan nama lengkap">
      <select name="semester" id="">
         <?php for ($i = 1; $i < 10; $i++) { ?>
            <option value="<?= $i; ?>"><?= $i; ?></option>
         <?php } ?>
      </select>
      <button type="submit">Submit</button>
   </form>

   <table>
      <thead>
         <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Semester</th>
         </tr>
      </thead>
      <tbody>
         <?php $no = 1;
         foreach ($tampil as $tpl) : ?>
            <tr>
               <td><?= $no; ?></td>
               <td><?= $tpl->npm; ?></td>
               <td><?= $tpl->nama; ?></td>
               <td><?= $tpl->semester; ?></td>
            </tr>
         <?php $no++;
         endforeach; ?>
      </tbody>
   </table>
</div>