<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeltambahuser extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_users')
            ->Get()->getResultArray();
    }
}
