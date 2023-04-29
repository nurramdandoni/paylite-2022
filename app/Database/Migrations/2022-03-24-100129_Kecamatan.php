<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kecamatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kecamatan_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'kabupaten_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE,
            ],
            'provinsi_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE,
            ],
            'kecamatan_code'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'kecamatan_name'         => [
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
        $this->forge->addPrimaryKey('kecamatan_id');
        $this->forge->addForeignKey('provinsi_id', 'provinsi', 'provinsi_id');
        $this->forge->addForeignKey('kabupaten_id', 'kabupaten', 'kabupaten_id');
        $this->forge->createTable('kecamatan');
    }

    public function down()
    {
        $this->forge->dropTable('kecamatan');
    }
}
