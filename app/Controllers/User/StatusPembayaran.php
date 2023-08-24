<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;
use App\Models\KamarModel;
use App\Models\RegulerModel;
use App\Models\UsersModel;

class StatusPembayaran extends BaseController
{
    protected $regulermodel;
    protected $usermodel;
    public function __construct()
    {
        $this->regulermodel = new RegulerModel();
        $this->usermodel = new UsersModel();
    }
    public function getStatusPembayaran()
    {
        $data['title'] = 'Status Pembayaran Kamar Hotel|SILAK MABAR';
        // Dapatkan instance dari SessionInterface
        $session = \Config\Services::session();
        // Dapatkan user ID dari sesi
        $userId = $session->get('user_id');

        $data['pengajuan1'] = $this->usermodel->getPengajuan1($userId);
        $data['pengajuan2'] = $this->usermodel->getPengajuan2($userId);
        $data['pengajuan3'] = $this->usermodel->getPengajuan3($userId);
        // dd($data);
        return view('user/pembayaran_reguler', $data);
    }
}
