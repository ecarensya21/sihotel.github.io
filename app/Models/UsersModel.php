<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'nama_tamu', 'email', 'username', 'no_hp', 'password_hash', 'active'
    ];

    public function getUsers($id = false)
    {
        if ($id == false) {
            return $this->select('nama_tamu, no_hp, email, username, gs.group_id, g.name group_name')
                ->join('auth_groups_users gs', 'users.id = gs.user_id')
                ->join('auth_groups g', 'g.id = gs.group_id')
                ->findAll();
        } else {
            return $this->where(['id' => $id])
                ->first();
        }
    }

    public function getPengajuan1($id) //Akta Kelahiran
    {
        return $this->select('*')
            ->join('reguler_room rr', 'users.id = rr.id_user')
            ->join('tb_kamar tk', 'tk.id = rr.id_kamar')
            ->where([
                'users.id' => $id,
                'rr.id_user' => $id
            ])->first();
    }
    public function getPengajuan2($id) //Akta Kelahiran
    {
        return $this->select('*')
            ->join('deluxe_room dr', 'users.id = dr.id_user')
            ->join('tb_kamar tk', 'tk.id = dr.id_kamar')
            ->where([
                'users.id' => $id,
                'dr.id_user' => $id
            ])->first();
    }
    public function getPengajuan3($id) //Akta Kelahiran
    {
        return $this->select('*')
            ->join('superior_room sr', 'users.id = sr.id_user')
            ->join('tb_kamar tk', 'tk.id = sr.id_kamar')
            ->where([
                'users.id' => $id,
                'sr.id_user' => $id
            ])->first();
    }
}
