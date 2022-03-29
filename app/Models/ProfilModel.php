<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    protected $table = 'profile';
    protected $useTimeStamps = true;
    protected $allowedFields = ['no', 'nama', 'isi', 'aksi'];

    public function getData($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
