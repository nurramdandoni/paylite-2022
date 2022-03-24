<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Provinsi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'provinsi_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'provinsi_code'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'provinsi_name'         => [
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
        $this->forge->addPrimaryKey('provinsi_id');
        $this->forge->createTable('provinsi');
    }

    public function down()
    {
        $this->forge->dropTable('provinsi');
    }
}
