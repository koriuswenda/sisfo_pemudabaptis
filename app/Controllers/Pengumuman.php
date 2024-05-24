<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelpengumuman;

class pengumuman extends BaseController
{
    public function __construct()
    {
        $this->Modelpengumuman = new Modelpengumuman();
    }
    public function index()
    {
        $data  = [
            'judul' => 'Data Pengumuman',
            'page' => 'Datapengumuman/v_pengumuman',
            'menu' => 'masterdata',
            'submenu' => 'pengumuman',
            'pengumuman' => $this->Modelpengumuman->AllData(),
        ];
        return view('v_template', $data);
    }
}
