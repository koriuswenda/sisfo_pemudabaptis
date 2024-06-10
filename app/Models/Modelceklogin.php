<?php

namespace App\Models;

use App\Controllers\ceklogin;
use CodeIgniter\Model;

class Modelceklogin extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_login')
            ->Get()->getResultArray();
    }
}
