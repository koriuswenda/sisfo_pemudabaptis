<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
    }
    public function register()
    {
        $data = array(
            'title' => 'Register',
        );
        return view('v_register', $data);
    }
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
