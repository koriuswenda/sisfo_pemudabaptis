<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    $data = [
      'judul' => 'Dashboard',
      'page' => 'home/v_home',
      'menu' => 'dashboard',
      'submenu' => 'Dashboard',
    ];
    return view('v_template', $data);
  }
}
