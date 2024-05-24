<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Masterdata extends BaseController
{
    public function index()
    {
        $data = [
            'judul' =>'Masterdata',
            'page' => 'v_masterdata',
            'menu' => 'dashboard',
            'submenu' => 'masterdata',
          ];
            return view('v_template', $data);
            
    }
}
