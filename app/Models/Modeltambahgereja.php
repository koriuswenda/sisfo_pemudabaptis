<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTambahgereja extends Model
{
    protected $tabel = 'tbl_gereja';
    public function AllData()
    {
        return $this->db->table('tbl_gereja')
            ->Get()->getResultArray();
    }
    //Tambah Data
    public function InsertData($data)
    {
        $this->db->table('tbl_gereja')->insert($data);
    }
}
