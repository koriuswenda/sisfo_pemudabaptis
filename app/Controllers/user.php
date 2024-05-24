<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modeluser;

class user extends BaseController
{
  public function __construct()
  {
    $this->Modeluser = new Modeluser();
  }
  public function index()
  {
    $data = [
      'judul' => 'Data Users',
      'page' => 'User/v_users',
      'menu' => 'dashboard',
      'submenu' => 'user',
      'user' => $this->Modeluser->AllData(),
    ];
    return view('v_template', $data);
  }
}
