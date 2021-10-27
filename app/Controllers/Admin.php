<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('/admin/index');
    }

    public function data_guru()
    {
        return view('/admin/data_guru');
    }
}
