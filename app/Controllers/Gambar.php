<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class gambar extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Data Galery',
            'page' => 'Datagambar/v_gambar',
            'menu' => 'masterdata',
            'submenu' => 'gambar',
        ];
        return view('v_template', $data);
    }
}
