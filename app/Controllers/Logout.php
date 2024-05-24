<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLogout;

class Logout extends BaseController
{
  public function __construct()
  {
    $this->ModelLogout  = new ModelLogout();
  }

  public function index()
  {
    $data = [
      'judul' => 'Logout',
      'page' => 'Datalogout/v_logout',
      'menu' => 'dashboard',
      'submenu' => 'logout',
      'Logout' => $this->ModelLogout->AllData(),
    ];

    return view('v_template', $data);
  }
}
