<?php

namespace App\Controllers;

use App\Models\ProfilModel;

class DataProfil extends BaseController
{
    protected $dataProfil;

    public function __construct()
    {
        $this->dataProfil = new ProfilModel();
    }

    public function index()
    {
        $data = [
            'dataProfile' => $this->dataProfil->getData()
        ];

        return view('admin/menu-profil', $data);
    }
}
