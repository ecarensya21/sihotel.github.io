<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (in_groups('Admin')) {
            return redirect()->to('/dashboard-admin');
        }
        return redirect()->to('/home');
    }
}
