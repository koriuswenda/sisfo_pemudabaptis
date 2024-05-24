<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeldatagereja extends Model
{
    protected $tabel = 'tbl_gereja';
    public function AllData()
    {
        return $this->db->table('tbl_gereja')
            ->Get()->getResultArray();
    }
}
