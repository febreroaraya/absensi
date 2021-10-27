<?php

namespace App\Controllers;
use App\Models\Mdl_login;

class Ajax extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function login()
    {
        $request = \Config\Services::request();
        $username = $request->getPost("username");
        $password = $request->getPost("password");
        $loginModel = new Mdl_login();
        echo $loginModel->login($username,$password);
    }
}