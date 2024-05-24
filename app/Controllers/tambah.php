<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modeltambah;

class Tambah extends BaseController
{
    public function __construct()
    {
        $this->Modeltambah = new Modeltambah();
    }
    public function index()
    {
        $data = [
            'judul' => 'Tambah Data',
            'page' => 'Datapemuda/v_tambah',
            'menu' => 'masterdata',
            'submenu' => 'Data pemuda',
            'tambah' => $this->Modeltambah->AllData(),
        ];
        return view('v_template', $data);
    }
    public function InsertData()
    {
        if ($this->validate([
            'nama_lengkap' => [
                'label' => 'Nama Pemuda',
                'rules' => 'required | is_unique [tbl_pemuda.nama_lengkap]',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!! ',
                    'is_unnique' => '{field} Sudah Ada, Input Nama Lain  !!! ',

                ]
            ],
            'jenis_kelamin' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!! ',
                ]

            ],
        ])) {
            # CODE ...
        } else {
            #Jika Tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Datapemuda/tambah'))->withInput('validation', \Config\Services::validation());
        }
    }
}
