<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransaksiTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id_transaksi' => [
            'type' => 'INT',
            'auto_increment' => true
        ],
        'id_user' => [
            'type' => 'INT',
            'null' => true,
        ],
        'id_motor' => [
            'type' => 'INT',
            'null' => true,
        ],
        'tanggal' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'harga' => [
            'type' => 'INT',
            'null' => true,
        ],
        'status' => [
            'type' => 'ENUM',
            'constraint' => ['pending', 'dibayar', 'selesai'],
            'default' => 'pending',
            'null' => true,
        ]
    ]);

    $this->forge->addKey('id_transaksi', true);
    $this->forge->createTable('transaksi');

    // FIX untuk default CURRENT_TIMESTAMP
    $this->db->query('ALTER TABLE transaksi MODIFY tanggal DATETIME DEFAULT CURRENT_TIMESTAMP');
}


    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
