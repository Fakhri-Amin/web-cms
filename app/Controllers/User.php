<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        // echo "halaman admin";
        return view('user/template');
    }

    public function login()
    {
        // return view('welcome_message');
        // echo "halaman admin";
        return view('user/login');
    }
}
