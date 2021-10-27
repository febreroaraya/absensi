<?php

namespace App\Controllers;
use App\Models\Mdl_guru;

class Admin extends BaseController
{
    public function index()
    {
        return view('/admin/index');
    }

    public function data_guru()
    {
        $model = new Mdl_guru();
        $data =  [
                'judul'    => 'Daftar Guru',
                'guru'     => $model->getAllData()
        ];
        return view('/admin/data_guru', $data);
    }
}
