<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeljadwalibadah extends Model
{
  public function AllData()
  {
    return $this ->db->table('tbl_jadwal_ibadah')
                ->Get()->getResultArray();
  }
}
