<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelregister;

class register extends BaseController
{
    public function __construct()
    {
        $this->Modelregister  = new Modelregister();
    }
    public function index()
    {
        echo view('Register/v_register');
        // $data = [
        //     'judul' => 'Register',
        //     'page' => 'Register/v_register',
        //     'menu' => 'dashboard',
        //     'submenu' => 'register',
        //     'register' => $this->Modelregister->AllData(),
        // ];

        // return view('v_template', $data);
    }
    // public function register()
    // {
    //     if( $this->validate([
    //         'nama_user'=> [
    //             'label'=> 'Nama User',
    //             'rules'=> 'required',
    //             'errors'=> [
    //                 'required' => '{field} Wajid diisi dan tidak boleh kosong !!!'
    //                    ]
    //             ];
    //         'email' => [
    //             'label'=> 'email',
    //             'rules'=> 'required',
    //             'errors'=> [
    //                 'required' => '{field} Wajid diisi dan tidak boleh kosong !!!'
    //                  ]
    //             ];
    //         'email' => [
    //             'label'=> 'email',
    //             'rules'=> 'required',
    //             'errors'=> [
    //                 'required' => '{field} Wajid diisi dan tidak boleh kosong !!!'
    //             ]
    //         ]
    //     ]))
    // }
}
