<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = ['id_user', 'id_motor', 'tanggal', 'harga', 'status'];
    protected $useTimestamps = true;
    
    public function getWithRelasi()
{
    return $this->select('transaksi.*, auth.nama AS nama_user, motor.merk, motor.tipe')
                ->join('auth', 'auth.id_user = transaksi.id_user', 'left')
                ->join('motor', 'motor.id_motor = transaksi.id_motor', 'left')
                ->orderBy('transaksi.created_at', 'DESC')
                ->findAll();
}

public function getByUser($id_user)
{
    return $this->select('transaksi.*, auth.nama AS nama_user, motor.merk, motor.tipe')
                ->join('auth', 'auth.id_user = transaksi.id_user')
                ->join('motor', 'motor.id_motor = transaksi.id_motor')
                ->where('transaksi.id_user', $id_user)
                ->orderBy('transaksi.created_at', 'DESC')
                ->findAll();
}


}
