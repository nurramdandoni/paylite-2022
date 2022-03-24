<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserApi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_api_id'             => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'user_main_id'          => [
                'type'              => 'INT',
                'unsigned'          => TRUE, // tidak boleh negatif
                'constraint'        => 11
            ],
            'user_level'            => [
                'type'              => 'ENUM',
                'constraint'        => ['User','Admin','Agen','P-Admin','S-Admin']
            ],
            'access_sistem_id'      => [
                'type'              => 'INT',
                'unsigned'          => TRUE, // tidak boleh negatif
                'constraint'        => 11
            ],
            'api_status'            => [
                'type'              => 'ENUM',
                'constraint'        => ['NonAktif','Aktif']
            ],
            'agen_refferal_id'      => [
                'type'              => 'INT',
                'unsigned'          => TRUE, // tidak boleh negatif
                'constraint'        => 11
            ],
            'register_at'           => [
                'type'              => 'DATETIME',
                'null'              => TRUE
            ],
            'activated_at'          => [
                'type'              => 'DATETIME',
                'null'              => TRUE
            ],
            'expired_at'            => [
                'type'              => 'DATETIME',
                'null'              => TRUE
            ],
        ]);
        $this->forge->addPrimaryKey('user_api_id');
        $this->forge->addForeignKey('user_main_id', 'user_main', 'user_main_id');
        $this->forge->addForeignKey('agen_refferal_id', 'user_main', 'user_main_id');
        $this->forge->addForeignKey('access_sistem_id', 'sistem', 'sistem_id');
        $this->forge->createTable('user_api');
    }

    public function down()
    {
        $this->forge->dropTable('user_api');
    }
}
