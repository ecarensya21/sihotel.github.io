<?php

namespace App\Controllers\user;

use App\Models\UsersModel;

use App\Controllers\BaseController;
use App\Models\RegulerModel;

class Booking extends BaseController
{


    protected $usermodel;
    protected $regulermodel;

    public function __construct()
    {

        $this->usermodel = new UsersModel();
        $this->regulermodel = new RegulerModel();
    }


    public function formReguler()
    {
        $datapemohon = $this->usermodel->getUsers(user_id());

        $data = [
            'title' => 'Form Pesan Reguler Room|Bintang Flores Hotel',
            'datapemohon' => $datapemohon
        ];

        return view('user/form_pesanan_reguler', $data);
    }
    public function saveDataReguler()
    {
        $validationRule = [
            'jumlah_pesan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumlah Pesan wajib diisi',

                ]
            ],
            'check_in' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tgl Check In wajib diisi',

                ]
            ],
            'check_out' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tgl Check Out wajib diisi',

                ]
            ],

        ];
        if (!$this->validate($validationRule)) {

            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $jumlah_pesan = $this->request->getVar('jumlah_pesan');
        $check_in = $this->request->getVar('check_in');
        $check_out = $this->request->getVar('check_out');

        // Dapatkan instance dari SessionInterface
        $session = \Config\Services::session();
        // Dapatkan user ID dari sesi
        $userId = $session->get('user_id');
        // ===========================

        $tgl_pemesanan = date('Y-m-d h:i:s');
        $harga_kamar = '350.000';
        $id_kamar = '1';
        $selesai = '0';
        $data['status'] = 'Pending';
        // $statusPesan = 'Pending';
        // ===========================
        // Menghitung jumlah malam menginap
        $checkIn = new \DateTime($check_in);
        $checkOut = new \DateTime($check_out);
        $interval = $checkIn->diff($checkOut);
        $jumlahMalam = $interval->days;


        // Menghitung total pembayaran
        $totalPayment = $harga_kamar * $jumlahMalam * $jumlah_pesan;

        $this->regulermodel->save([
            'id_user' => $userId,
            'id_kamar' => $id_kamar,
            'jumlah_pesan' => $jumlah_pesan,
            'tgl_pemesanan' => $tgl_pemesanan,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'status_booking' => $data,
            'total_payment' => $totalPayment,
            'selesai' => $selesai,
        ]);
        return redirect()->to('/detail/reguler-room/form-booking')->with('success', 'Pemesanan Reguler Room Berhasil !');
    }

    public function formDeluxe()
    {
        $datapemohon = $this->usermodel->getUsers(user_id());
        $data = [
            'title' => 'Form Pesan Reguler Room|Bintang Flores Hotel',
            'datapemohon' => $datapemohon
        ];

        return view('user/form_pesanan_deluxe', $data);
    }

    public function saveDataDeluxe()
    {
        $validationRule = [
            'jumlah_pesan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumlah Pesan wajib diisi',

                ]
            ],
            'check_in' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tgl Check In wajib diisi',

                ]
            ],
            'check_out' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tgl Check Out wajib diisi',

                ]
            ],

        ];
        if (!$this->validate($validationRule)) {

            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $jumlah_pesan = $this->request->getVar('jumlah_pesan');
        $check_in = $this->request->getVar('check_in');
        $check_out = $this->request->getVar('check_out');

        // Dapatkan instance dari SessionInterface
        $session = \Config\Services::session();
        // Dapatkan user ID dari sesi
        $userId = $session->get('user_id');
        // ===========================
        $status = 'Pending';
        $tgl_pemesanan = date('Y-m-d h:i:s');
        $harga_kamar = '800.000';
        $id_kamar = '2';
        $selesai = '0';
        // ===========================
        // Menghitung jumlah malam menginap
        $checkIn = new \DateTime($check_in);
        $checkOut = new \DateTime($check_out);
        $interval = $checkIn->diff($checkOut);
        $jumlahMalam = $interval->days;


        // Menghitung total pembayaran
        $totalPayment = $harga_kamar * $jumlahMalam * $jumlah_pesan;

        $this->regulermodel->save([
            'id_user' => $userId,
            'id_kamar' => $id_kamar,
            'jumlah_pesan' => $jumlah_pesan,
            'tgl_pemesanan' => $tgl_pemesanan,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'status' => $status,
            'total_payment' => $totalPayment,
            'selesai' => $selesai,
        ]);
        return redirect()->to('/detail/deluxe-room/form-booking')->with('success', 'Pemesanan Deluxe Room Berhasil !');
    }


    public function formSuperior()
    {
        $datapemohon = $this->usermodel->getUsers(user_id());
        $data = [
            'title' => 'Form Pesan Reguler Room|Bintang Flores Hotel',
            'datapemohon' => $datapemohon

        ];

        return view('user/form_pesanan_superior', $data);
    }


    public function saveDataSuperior()
    {
        $validationRule = [
            'jumlah_pesan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumlah Pesan wajib diisi',

                ]
            ],
            'check_in' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tgl Check In wajib diisi',

                ]
            ],
            'check_out' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tgl Check Out wajib diisi',

                ]
            ],

        ];
        if (!$this->validate($validationRule)) {

            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $jumlah_pesan = $this->request->getVar('jumlah_pesan');
        $check_in = $this->request->getVar('check_in');
        $check_out = $this->request->getVar('check_out');

        // Dapatkan instance dari SessionInterface
        $session = \Config\Services::session();
        // Dapatkan user ID dari sesi
        $userId = $session->get('user_id');
        // ===========================
        $status = 'Pending';
        $tgl_pemesanan = date('Y-m-d h:i:s');
        $harga_kamar = '1000.000';
        $id_kamar = '3';
        $selesai = '0';
        // ===========================
        // Menghitung jumlah malam menginap
        $checkIn = new \DateTime($check_in);
        $checkOut = new \DateTime($check_out);
        $interval = $checkIn->diff($checkOut);
        $jumlahMalam = $interval->days;


        // Menghitung total pembayaran
        $totalPayment = $harga_kamar * $jumlahMalam * $jumlah_pesan;

        $this->regulermodel->save([
            'id_user' => $userId,
            'id_kamar' => $id_kamar,
            'jumlah_pesan' => $jumlah_pesan,
            'tgl_pemesanan' => $tgl_pemesanan,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'status' => $status,
            'total_payment' => $totalPayment,
            'selesai' => $selesai,
        ]);
        return redirect()->to('/detail/superior-room/form-booking')->with('success', 'Pemesanan Superior Room Berhasil !');
    }


    // public function formPresident()
    // {
    //     $datapemohon = $this->usermodel->getUsers(user_id());

    //     $data = [
    //         'title' => 'Form Pesan Reguler Room|Bintang Flores Hotel',
    //         'datapemohon' => $datapemohon

    //     ];

    //     return view('user/form_pesanan_president', $data);
    // }
}
