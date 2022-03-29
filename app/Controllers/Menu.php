<?php

namespace App\Controllers;

use App\Models\ProfilModel;


class Menu extends BaseController
{
    protected $dataProfil;

    public function __construct()
    {
        $this->dataProfil = new ProfilModel();
    }

    // public function index()
    // {
    //     $data = [
    //         'dataProfile' => $this->dataProfil->getData()
    //     ];

    //     return view('admin/menu-profil', $data);
    // }

    public function profil()
    {
        $data = [
            'dataProfile' => $this->dataProfil->getData()
        ];

        return view('admin/menu-profil', $data);
        // return view('welcome_message');
        // echo "halaman admin";
        // return view('admin/menu-profil');
    }

    public function tambah_profil()
    {
        // return view('welcome_message');
        // echo "halaman admin";
        return view('admin/tambah-profil');
    }

    public function ubah_profil()
    {
        // return view('welcome_message');
        // echo "halaman admin";
        return view('admin/ubah-profil');
    }
}
