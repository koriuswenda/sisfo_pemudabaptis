<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeltambah extends Model
{
    //Tampil Data
    public function AllData()
    {
        return $this->db->table('tbl_pemuda')
            ->Get()->getResultArray();
    }
    //Tambah Data
    public function InsertData($data)
    {
        $this->db->table('tbl_pemuda')->insert($data);
    }
}
