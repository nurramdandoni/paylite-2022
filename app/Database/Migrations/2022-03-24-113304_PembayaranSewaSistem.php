<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PembayaranSewaSistem extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pembayaran_sewa_id'    => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'global_trx_pay_id'          => [
                'type'              => 'BIGINT',
                'constraint'        => 20,
                'unsigned'          => TRUE,
            ],
            'user_main_id'          => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE,
            ],
            'sistem_id'             => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE,
            ],
            'gross_amount'          => [
                'type'              => 'DOUBLE',
                'constraint'        => [11,2]
            ],
            'transaction_fee'       => [
                'type'              => 'DOUBLE',
                'constraint'        => [11,2]
            ],
            'nett_amount'           => [
                'type'              => 'DOUBLE',
                'constraint'        => [11,2]
            ],
            'channel_pembayaran_id' => [
                'type'              => 'INT',
                'constraint'        => 11
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
        $this->forge->addPrimaryKey('pembayaran_sewa_id');
        $this->forge->addForeignKey('global_trx_pay_id', 'global_trx_pay', 'global_trx_pay_id');
        $this->forge->addForeignKey('user_main_id', 'user_main', 'user_main_id');
        $this->forge->addForeignKey('sistem_id', 'sistem', 'sistem_id');
        $this->forge->createTable('pembayaran_sewa_sistem');
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran_sewa_sistem');
    }
}
