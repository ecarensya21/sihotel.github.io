<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Masuk|Bintang Flores Hotel',
        ];
        return view('user/login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Daftar Masuk|Bintang Flores Hotel',
        ];
        return view('user/register', $data);
    }
}
