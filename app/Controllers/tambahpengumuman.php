<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modeltambahpengumuman;

class tambahpengumuman extends BaseController
{
    public function __construct()
    {
        $this->Modelpengumuman = new Modeltambahpengumuman();
    }
    public function index()
    {
        $data  = [
            'judul' => 'Tambah Pengumuman',
            'page' => 'Datapengumuman/v_Tambah',
            'menu' => 'masterdata',
            'submenu' => 'pengumuman',
            'Tambahpengumuman' => $this->Modelpengumuman->AllData(),
        ];
        return view('v_template', $data);
    }
}
