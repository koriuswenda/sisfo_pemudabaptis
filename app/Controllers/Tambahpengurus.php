<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modeltambahpengurus;

class tambahpengurus extends BaseController
{
    public function __construct()
    {
        $this->Modeltambahpengurus = new Modeltambahpengurus();
    }
    public function index()
    {
        $data  = [
            'judul' => ' Tambah Pengurus',
            'page' => 'pengurus/v_Tambah',
            'menu' => 'masterdata',
            'submenu' => 'pengurus',
            'pengurus' => $this->Modeltambahpengurus->AllData(),
        ];
        return view('v_template', $data);
    }
}
