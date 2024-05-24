<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDatapemuda extends Model
{
   public function AllData()
   {
      return $this->db->table('tbl_pemuda')
         ->Get()->getResultArray();
   }
}
