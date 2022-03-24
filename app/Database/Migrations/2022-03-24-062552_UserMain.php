<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMain extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_main_id'          => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'username'              => [

                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'password'              => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'activation_code'       => [
                'type'              => 'INT',
                'constraint'        => 6
            ],
            'api_key'               => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'account_status'        => [
                'type'              => 'ENUM',
                'constraint'        => ['NonAktif','Aktif']
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
        $this->forge->addPrimaryKey('user_main_id');
        $this->forge->addUniqueKey('username');
        $this->forge->addUniqueKey('api_key');
        $this->forge->createTable('user_main');
    }

    public function down()
    {
        $this->forge->dropTable('user_main');
    }
}
