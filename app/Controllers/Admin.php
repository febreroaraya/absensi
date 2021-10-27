<?php

namespace App\Controllers;
use App\Models\Mdl_guru;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->model = new Mdl_guru;
    }
    
    public function index()
    {
        return view('/admin/index');
    }

    public function data_guru()
    {
        $data =  [
                'judul'    => 'Daftar Guru',
                'guru'     => $this->model->getAllData()
        ];
        return view('/admin/data_guru', $data);
    }

    public function tambah()
    {
        $data = [
            'nama'      => $this->request->getPost('nama'),
            'username'      => $this->request->getPost('username'),
        ];

        $success = $this->model->tambah($data);
        if ($success) {
            return redirect()->to(base_url('data_guru'));
        }
    }
}
