<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sistem extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'sistem_id'             => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'sistem_name'              => [

                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'sistem_url'            => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'price_per_month'       => [
                'type'              => 'DOUBLE',
                'constraint'        => [11,2]
            ],
            'discount_percent'      => [
                'type'              => 'DOUBLE',
                'constraint'        => [11,2]
            ],
            'note'                  => [
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
        $this->forge->addPrimaryKey('sistem_id');
        $this->forge->createTable('sistem');
    }

    public function down()
    {
        $this->forge->dropTable('sistem');
    }
}
