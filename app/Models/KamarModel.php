<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{
    protected $table            = 'tb_kamar';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'total', 'jenis_kamar'
    ];

    public function all()
    {
        return $this->select('total, jenis_kamar')
            ->where('');
    }
}
