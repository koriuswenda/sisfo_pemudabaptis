<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modeladmin;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->Modeladmin = new Modeladmin();
    }
    public function index()
    {
        $data = [
            'judul' => 'Data Admin',
            'page' => 'DataAdmin/v_admin',
            'menu' => 'admin',
            'submenu' => 'Dataadmin',
            'Dataadmin' => $this->Modeladmin->AllData(),
        ];
        return view('v_template', $data);
    }
}
