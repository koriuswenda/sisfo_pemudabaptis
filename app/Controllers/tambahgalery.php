<?php


namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModeltambahGalery;

class TambahGalery extends BaseController
{
    public function __construct()
    {
        $this->ModeltambahGalery = new ModeltambahGalery();
    }
    public function index()
    {
        $data = [
            'judul' => 'Tambah Galery',
            'page' => 'Datagambar/v_Tambah',
            'menu' => 'masterdata',
            'submenu' => 'gambar',
            'TambahGalery' => $this->ModeltambahGalery->AllData(),
        ];

        return view('v_template', $data);
    }
}
