<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelDatagereja;

class Datagereja extends BaseController
{
  public function __construct()
  {
    $this->ModelDatagereja = new ModelDatagereja();
  }
  public function index()
  {
    $data = [
      'judul' => 'Data Gereja',
      'page' => 'Datagereja/v_Datagereja',
      'menu' => 'masterdata',
      'submenu' => 'Datagereja',
      'Datagereja' => $this->ModelDatagereja->AllData(),
    ];
    return view('v_template', $data);
  }
}
