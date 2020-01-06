<div class="container">
   <div class="shadow-lg p-5 mb-5 bg-white rounded">
      <h1 class="font-weight-bold text-center">Tambah data</h1>

      <?php
         if(empty($datamhs)) {
            $this->session->set_flashdata("message2",'<div class="alert alert-succes" role="alert">Parameter tidak sesuai!</div>');
            redirect("myadmin/tambahdata");
         }
      ?>

      <form action="<?= base_url('Myadmin/aksi_edit_data'); ?>" method="post">
         <div class="form-group">
         <label class="mt-2">NPM</label>   
         <input type="number" class="form-control" name="npm"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" value="<?= $datamhs['npm'] ?>">
         <label class="mt-2">Nama Lengkap   </label>
         <input type="text" class="form-control"name="nama" value="<?= $datamhs["nama"] ?>">
         <label class="mt-2">Semester</label>   
         <select name="semester"class="form-control" id="">

               <?php
               $selected = $datamhs["semester"];
               for ($i = 1; $i < 10; $i++) { ?>
                  <option <?php echo "selected".$selected; ?> value="<?= $i; ?>">Semester <?= $i; ?></option>
               <?php } ?>
            </select>
            <button type="submit" class="btn btn-primary btn-md btn-block mt-2">Simpan</button>
         </div>
      </form>

   </div>
</div>