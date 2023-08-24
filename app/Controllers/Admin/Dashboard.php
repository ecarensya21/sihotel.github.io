<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;


class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard admin|Bintang FLores Hotel'
        ];

        return view('admin/dashboard_admin', $data);
    }
}
