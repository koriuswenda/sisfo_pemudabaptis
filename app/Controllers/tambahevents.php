<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modeltambahevents;

class Tambahevents extends BaseController
{
    public function index()
    {
        $data  = [
            'judul' => 'Tambah Events',
            'page' => 'events/v_Tambah',
            'menu' => 'masterdata',
            'submenu' => 'events',
        ];
        return view('v_template', $data);
    }
}
