<?php
class M_login extends CI_Model
{
   public function tambah_data($table, $data)
   {
      $this->db->insert($table, $data);
   }

   public function cek_login($table, $where)
   {
      return $this->db->get_where($table, $where);
   }
}