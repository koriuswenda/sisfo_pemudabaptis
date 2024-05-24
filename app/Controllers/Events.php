<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelevents;

class events extends BaseController
{
    public function index()
    {
        $data  = [
            'judul' => 'Data Events',
            'page' => 'events/v_events',
            'menu' => 'masterdata',
            'submenu' => 'events',
        ];
        return view('v_template', $data);
    }
}
