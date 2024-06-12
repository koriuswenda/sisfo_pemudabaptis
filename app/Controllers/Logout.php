<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLogout;
use App\Controllers\ceklogin;

class Logout extends BaseController
{
  public function __construct()
  {
    $this->ModelLogout  = new ModelLogout();
  }

  public function index()
  {
    $data = [
      'judul' => 'Login',
      'page' => 'Datalogout/v_login',
      'menu' => 'dashboard',
      'submenu' => 'login',
      'Logout' => $this->ModelLogout->AllData(),
    ];

    return view('v_template', $data);
  }
}