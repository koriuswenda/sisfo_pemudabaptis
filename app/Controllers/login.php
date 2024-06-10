<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLogin;


class Login extends BaseController
{
    // public function __construct()
    // {
    //     $this->ModelLogin = new Modellogin();
    // }

    public function index()
    {


        echo view('Register/v_login');
        // $data = [
        //     'judul' => 'Logout',
        //     'page' => 'Datalogout/v_logout',
        //     'menu' => 'dashboard',
        //     'submenu' => 'logout',
        //     'Logout' => $this->ModelLogout->AllData(),
        // ];

        // return view('v_template', $data);
    }
    public function ceklogin()
    {
        $session = session();
    }
}
