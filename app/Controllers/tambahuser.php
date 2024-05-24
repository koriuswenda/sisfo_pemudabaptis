<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modeltambahuser;

class Tambahuser extends BaseController
{
    public function __construct()
    {
        $this->Modeltambahuser = new Modeltambahuser();
    }
    public function index()
    {
        $data = [
            'judul' => 'Tambah Users',
            'page' => 'User/v_tambah',
            'menu' => 'dashboard',
            'submenu' => 'user',
            'user' => $this->Modeltambahuser->AllData(),
        ];
        return view('v_template', $data);
    }
}
