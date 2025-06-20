<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_transaksi', 'bukti_transfer', 'created_at'];
    protected $useTimestamps = true; // otomatis isi created_at dan updated_at
}
