<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        // echo "halaman admin";
        return view('admin/pages/index');
    }

    public function login()
    {
        // return view('welcome_message');
        // echo "halaman admin";
        return view('admin/pages/login');
    }
}
