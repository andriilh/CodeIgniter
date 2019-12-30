<?php
class M_admin extends CI_Model
{

   public function tambah_data($table, $data)
   {
      $this->db->insert($table, $data);
   }
   public function tampil_data()
   {
      return $this->db->get("data_mahasiswa")->result();
   }

   public function edit_data($table, $data) 
   {
      return $this->db->update($table, $data);
   }
}
