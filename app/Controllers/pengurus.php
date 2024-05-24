<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelpengurus;

class pengurus extends BaseController
{
    public function __construct()
    {
        $this->Modelpengurus = new Modelpengurus();
    }
    public function index()
    {
        $data  = [
            'judul' => ' Data Pengurus',
            'page' => 'pengurus/v_pengurus',
            'menu' => 'masterdata',
            'submenu' => 'pengurus',
            'pengurus' => $this->Modelpengurus->AllData(),
        ];
        return view('v_template', $data);
    }
}
