<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelceklogin;


class ceklogin extends BaseController
{
    public function __construct()
    {
        $this->Modelceklogin  = new Modelceklogin();
    }

    public function index()

    {


        $data = [
            'judul' => 'Dashboard ',
            'page' => 'home/v_home',
            'menu' => 'v_home',
            'submenu' => 'v_home',
            'Dataceklogin' => $this->Modelceklogin->AllData(),
        ];
        return view('v_template', $data);
    }
}
