<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'username'   => 'admin',
                'email'      => 'admin@mail.com',
                'password'   => password_hash('admin123', PASSWORD_DEFAULT),
                'role'       => 'admin',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'username'   => 'customer',
                'email'      => 'customer@mail.com',
                'password'   => password_hash('customer123', PASSWORD_DEFAULT),
                'role'       => 'customer',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        $this->db->table('users')->insertBatch($users);
    }
}

