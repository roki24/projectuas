<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Admin Satu',
                'username'  => 'admin1',
                'password'  => password_hash('admin123', PASSWORD_DEFAULT),
                'email'     => 'admin1@example.com',
                'no_hp'     => '081234567891',
                'alamat'    => 'Jl. Admin 1',
                'role'      => 'admin',
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ],
            [
                'nama'      => 'Customer Satu',
                'username'  => 'customer1',
                'password'  => password_hash('cust123', PASSWORD_DEFAULT),
                'email'     => 'cust1@example.com',
                'no_hp'     => '089876543210',
                'alamat'    => 'Jl. Customer 1',
                'role'      => 'customer',
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ]
        ];

        // Insert ke tabel auth
        $this->db->table('auth')->insertBatch($data);
    }
}
