<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;
use App\Models\KamarModel;
use App\Models\RegulerModel;



class Dashboard extends BaseController
{
    protected $kamarmodel;
    public function __construct()
    {
        $this->kamarmodel = new KamarModel();
    }



    public function index()
    {
        $totalkamar = $this->kamarmodel->all();
        $data = [
            'title' => 'Selamat Datang|Bintang Flores Hotel',
            'totalkamar' => $totalkamar
        ];
        return view('user/dashboard', $data);
    }
    public function indexReguler()
    {
        $data = [
            'title' => 'Reguler Room|Bintang Flores Hotel',
        ];

        return view('user/detail_reguler', $data);
    }
    public function indexDeluxe()
    {
        $data = [
            'title' => 'Deluxe Room|Bintang Flores Hotel',
        ];

        return view('user/detail_deluxe', $data);
    }
    public function indexSuperior()
    {
        $data = [
            'title' => 'Superior Room|Bintang Flores Hotel',
        ];

        return view('user/detail_superior', $data);
    }
    public function indexPresident()
    {
        $data = [
            'title' => 'President Room|Bintang Flores Hotel',
        ];

        return view('user/detail_president', $data);
    }
}
