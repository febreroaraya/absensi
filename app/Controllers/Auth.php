<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('login'));
    }
    public function login()
    {
        if(session('id')) {
            return redirect()->to(site_url('home'));
        }
        return view('auth/login');
    }
    public function loginproses()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('tb_user')->getWhere(['username' => $post['username']]);
        $user = $query->getRow();
        if($user) {
            if(password_verify($post['password'], $user->password)) {
                $parameter = ['id' => $user->id];
                session()->set($parameter);
                return redirect()->to(site_url('home'));
            } else {
                return redirect()->back()->with('error', 'Password Salah');
            }
        } else {
            return redirect()->back()->with('error', 'Username Salah');
        }
    }
    public function logout()
    {
        session()->remove('id');
        return redirect()->to(site_url('login'));
    }
}
