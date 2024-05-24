<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modeltambahjadwal;

class Tambahjadwal extends BaseController
{
    public function __construct()
    {
        $this->Modeltambahjadwal = new Modeltambahjadwal();
    }

    public function index()
    {
        $data = [
            'judul' => 'Tambah Jadwal Ibadah',
            'page' => 'jadwalibadah/v_tambahjadwal',
            'menu' => 'masterdata',
            'submenu' => 'jadwalibadah',
            'jadwalibadah'  => $this->Modeltambahjadwal->AllData(),
        ];
        return view('v_template', $data);
    }
}
