<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Desa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'desa_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'kecamatan_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'kabupaten_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'provinsi_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'desa_code'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'desa_name'         => [
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
        $this->forge->addPrimaryKey('desa_id');
        $this->forge->addForeignKey('provinsi_id', 'provinsi', 'provinsi_id');
        $this->forge->addForeignKey('kabupaten_id', 'kabupaten', 'kabupaten_id');
        $this->forge->addForeignKey('kecamatan_id', 'kecamatan', 'kecamatan_id');
        $this->forge->createTable('desa');
    }

    public function down()
    {
        $this->forge->dropTable('desa');
    }
}
