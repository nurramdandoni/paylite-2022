<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kabupaten extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kabupaten_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'provinsi_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'kabupaten_code'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'kabupaten_name'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'created_at'            => [
                'type'              => 'DATETIME',
                'null'              => TRUE
            ],
            'update_at'             => [
                'type'              => 'DATETIME',
                'null'              => TRUE
            ],
        ]);
        $this->forge->addPrimaryKey('kabupaten_id');
        $this->forge->addForeignKey('provinsi_id', 'provinsi', 'provinsi_id');
        $this->forge->createTable('kabupaten');
    }

    public function down()
    {
        $this->forge->dropTable('kabupaten');
    }
}
