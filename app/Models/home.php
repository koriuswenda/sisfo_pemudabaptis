<?php 
namespace App\Models;
Use CodeIgniter\Model;
class ModelHome extends Model 
{
    protected $tabel = 'tbl_home';
    public function AllDatahome ()
    {
        return $this ->db->table('tbl_home')
        ->Get()->getResultArray();
    }
}