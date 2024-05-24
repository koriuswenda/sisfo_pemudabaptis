<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeladmin extends Model
{
    protected $tabel = 'tbl_admin';
    public function AllData()
    {
        return $this->db->table('tbl_admin')
            ->Get()->getResultArray();
    }
}
