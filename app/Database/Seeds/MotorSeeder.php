<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MotorSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'merk'     => 'Yamaha',
                'tipe'     => 'NMAX',
                'tahun'    => 2022,
                'warna'    => 'Hitam-Biru',
                'harga'    => 150000,
                'kondisi'  => 'Bagus, jarang dipakai',
                'stok'     => 3,
                'foto'     => 'nmax.jpg',
            ],
            [
                'merk'     => 'Honda',
                'tipe'     => 'Vario 160',
                'tahun'    => 2023,
                'warna'    => 'Merah',
                'harga'    => 140000,
                'kondisi'  => 'Kondisi sangat baik',
                'stok'     => 2,
                'foto'     => 'vario160.jpg',
            ],
            [
                'merk'     => 'Suzuki',
                'tipe'     => 'Satria F150',
                'tahun'    => 2021,
                'warna'    => 'Biru',
                'harga'    => 130000,
                'kondisi'  => 'Lancar, servis rutin',
                'stok'     => 1,
                'foto'     => 'satria.jpg',
            ],
        ];

        // Simple Queries
        $this->db->table('motor')->insertBatch($data);
    }
}
