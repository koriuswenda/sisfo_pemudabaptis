<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modeljadwalibadah;

class Jadwalibadah extends BaseController
{
  public function __construct()
  {
    $this->Modeljadwalibadah = new Modeljadwalibadah();
  }

  public function index()
  {
    $data = [
      'judul' => 'Jadwal Ibadah',
      'page' => 'jadwalibadah/v_jadwalibadah',
      'menu' => 'masterdata',
      'submenu' => 'jadwalibadah',
      'jadwalibadah'  => $this->Modeljadwalibadah->AllData(),
    ];
    return view('v_template', $data);
  }
}
