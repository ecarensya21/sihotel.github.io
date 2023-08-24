<?php

namespace App\Models;

use CodeIgniter\Model;

class RegulerModel extends Model
{
    protected $table            = 'reguler_room';
    protected $useAutoIncrement = true;
    protected $useSoftDeletes = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'id_user', 'id_kamar', 'check_in', 'check_out', 'status_booking', 'tgl_pemesanan', 'jumlah_pesan', 'total_payment', 'selesai'
    ];

    public function AllData()
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->join('users', 'users.id = reguler_room.id_user');

        $query = $builder->get();
        return $query->getResultArray();
    }
    public function detailData($userId)
    {
        $builder = $this->db->table($this->table);
        $builder->select('reguler_room.*, users.nama_tamu, users.email, users.no_hp, users.username');
        $builder->join('users', 'users.id = reguler_room.id_user');
        $builder->where('reguler_room.id_user', $userId);

        $query = $builder->get();
        return $query->getResultArray();
    }

    public function updateStatus($id, $status)
    {
        $data = [
            'status_booking' => $status,

        ];
        return $this
            ->where('id_user', $id)
            ->set($data)
            ->update();
    }

    public function updateStatusPembayaran($id, $status, $tanggal)
    {
        $data = [
            'status_booking' => $status,
            // Mengupdate tanggal sesuai dengan saat ini
            $tanggal => date('Y-m-d')
        ];
        return $this
            ->where('id_user', $id)
            ->set($data)
            ->update();
    }
}
