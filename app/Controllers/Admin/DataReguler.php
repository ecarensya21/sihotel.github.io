<?php

namespace App\Controllers\admin;

use App\Models\RegulerModel;
use App\Controllers\BaseController;


class DataReguler extends BaseController
{
    protected $pengajuan;
    public function __construct()
    {
        $this->pengajuan = new RegulerModel();
    }
    public function index()
    {
        //$pengajuan = new AktaLahirModel();

        $joindata = $this->pengajuan->AllData();
        $data['title'] = 'Data Transaksi Reguler |Bintang Flores Hotel';
        $data['datapesan'] = $joindata;
        // dd($data);
        return view('/admin/data_reguler', $data);
    }
    public function delete($id)
    {
        $berhasil = $this->pengajuan->delete($id);
        if ($berhasil) {
            return redirect()->to('/data-reguler')->with('success', 'Hapus Data Pemesanan Berhasil');
        }
    }
    public function detail($userId)
    {
        $detaildata = $this->pengajuan->detailData($userId);
        $data['detail'] = $detaildata;
        $data['title'] = 'Data Booking Reguler | SILAK MABAR';

        return view('/admin/detail_reguler', $data);
        // dd($data);
    }
    public function updateStatus($id, $status)
    {

        switch ($status) {
            case 'Konfirmasi':
                $this->pengajuan->updateStatus($id, $status);
                break;
            case 'Pembayaran':
                $this->pengajuan->updateStatusPembayaran($id, $status, 'tgl_bayar');
                break;
            case 'Kamar Habis':
                $this->pengajuan->updateStatus($id, $status);
                break;
            case 'Selesai':
                $this->pengajuan->statusSelesai($id, $status);
                break;
        }
        return redirect()->back()->with('success', 'Update Status Pengajuan Berhasil');
    }
}
