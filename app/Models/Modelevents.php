<?php

namespace App\Models;
use CodeIgniter\Model;
class Modelevents extends Model
{
   public function AllData()
   {
        return $this->db->table('tbl_events')
                ->Get()->getResultArray();
   }
}
