<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeltambahGalery extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_gambar')
            ->Get()->getResultArray();
    }
}
