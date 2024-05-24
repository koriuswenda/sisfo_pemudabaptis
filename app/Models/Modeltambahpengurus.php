<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeltambahpengurus extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_pengurus')
            ->Get()->getResultArray();
    }
}
