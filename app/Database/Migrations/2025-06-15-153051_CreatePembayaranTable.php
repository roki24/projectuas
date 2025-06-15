<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePembayaranTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pembayaran' => ['type' => 'INT', 'auto_increment' => true],
            'id_transaksi'  => ['type' => 'INT'],
            'nama_pengirim' => ['type' => 'VARCHAR', 'constraint' => 100],
            'bank_pengirim' => ['type' => 'VARCHAR', 'constraint' => 50],
            'nominal'       => ['type' => 'INT'],
            'tanggal_transfer' => ['type' => 'DATE'],
            'bukti_transfer'   => ['type' => 'VARCHAR', 'constraint' => 255],
            'status'       => ['type' => "ENUM('menunggu', 'diterima', 'ditolak')", 'default' => 'menunggu'],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id_pembayaran', true);
        $this->forge->createTable('pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
