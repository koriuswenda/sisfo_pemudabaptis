<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelpengumuman extends Model
{
   public function AllData()
   {
      return $this->db->table('tbl_pengumuman')
         ->Get()->getResultArray();
   }
}
