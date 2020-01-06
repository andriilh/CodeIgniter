<?php
class M_admin extends CI_Model
{

   public function tambah_data($table, $data)
   {
      $this->db->insert($table, $data);
   }
   public function tampil_data($table)
   {
      return $this->db->get($table)->result();
   }

   public function edit_data($table, $data) 
   {
      return $this->db->get_where($table, $data);
   }

   public function update($table, $data, $where)
   {
      $this->db->where($where);
      $this->db->update($table, $data);
   }

   public function delete_data($table, $where)
   {
      $this->db->where($where);
      $this->db->delete($table);
   }

}
