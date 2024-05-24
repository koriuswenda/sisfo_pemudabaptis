<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelDatapemuda;

class Datapemuda extends BaseController
{
  public function __construct()
  {
    $this->ModelDatapemuda = new ModelDatapemuda();
  }
  public function index()
  {
    $data = [
      'judul' => 'Data pemuda',
      'page' => 'Datapemuda/v_Datapemuda',
      'menu' => 'masterdata',
      'submenu' => 'Data pemuda',
      'Datapemuda' => $this->ModelDatapemuda->AllData(),
    ];
    return view('v_template', $data);
  }
  public function Tambah()
  {
    $data = [
      'judul' => 'Tambah pemuda',
      'page' => 'Datapemuda/v_tambah',
      'menu' => 'masterdata',
      'submenu' => 'Data pemuda',
    ];
    return view('v_template', $data);
  }
}
