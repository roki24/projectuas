<?php

namespace App\Models;

use CodeIgniter\Model;

class MotorModel extends Model
{
    protected $table = 'motor';
    protected $primaryKey = 'id_motor';
    protected $allowedFields = ['merk', 'tipe', 'tahun', 'warna', 'harga', 'kondisi', 'stok', 'foto'];
    protected $useTimestamps = true;
}
