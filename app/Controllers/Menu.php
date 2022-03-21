<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function profil()
    {
        // return view('welcome_message');
        // echo "halaman admin";
        return view('admin/menu-profil');
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
