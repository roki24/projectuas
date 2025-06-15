<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMotorTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_motor' => [
                'type'           => 'INT',
                'auto_increment' => true
            ],
            'merk' => ['type' => 'VARCHAR', 'constraint' => 50],
            'tipe' => ['type' => 'VARCHAR', 'constraint' => 50],
            'tahun' => ['type' => 'INT'],
            'warna' => ['type' => 'VARCHAR', 'constraint' => 30],
            'harga' => ['type' => 'INT'],
            'kondisi' => ['type' => 'TEXT'],
            'stok' => ['type' => 'INT', 'default' => 1],
            'foto' => ['type' => 'VARCHAR', 'constraint' => 255],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id_motor', true);
        $this->forge->createTable('motor');
    }

    public function down()
    {
        $this->forge->dropTable('motor');
    }
}
