<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelregister extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_login')
            ->Get()->getResultArray();
    }
}
