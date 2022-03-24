<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ChannelPembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'channel_pembayaran_id'   => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'nama_channel'          => [
                'type'              => 'VARCHAR', // va,qris,indomart,dll
                'constraint'        => '255'
            ],
            'kode_xendit'           => [
                'type'              => 'VARCHAR', // MANDIRI,BRI,dll
                'constraint'        => '255'
            ],
            'xendit_fee'            => [
                'type'              => 'DOUBLE', // MANDIRI,BRI,dll
                'constraint'        => [11,2]
            ],
            'xendit_fee_percent'    => [
                'type'              => 'DOUBLE', // MANDIRI,BRI,dll
                'constraint'        => [11,2]
            ],
            'kode_midtrans'         => [
                'type'              => 'VARCHAR', // MANDIRI,BRI,dll
                'constraint'        => '255'
            ],
            'midtrans_fee'            => [
                'type'              => 'DOUBLE', // MANDIRI,BRI,dll
                'constraint'        => [11,2]
            ],
            'midtrans_fee_percent'    => [
                'type'              => 'DOUBLE', // MANDIRI,BRI,dll
                'constraint'        => [11,2]
            ],
            'kode_ipaymu'         => [
                'type'              => 'VARCHAR', // MANDIRI,BRI,dll
                'constraint'        => '255'
            ],
            'ipaymu_fee'            => [
                'type'              => 'DOUBLE', // MANDIRI,BRI,dll
                'constraint'        => [11,2]
            ],
            'ipaymu_fee_percent'    => [
                'type'              => 'DOUBLE', // MANDIRI,BRI,dll
                'constraint'        => [11,2]
            ],
            'use_payment_gateway'   => [
                'type'              => 'VARCHAR', // kode_xendit
                'constraint'        => '255'
            ],
            'get_profit'   => [
                'type'              => 'DOUBLE', // keuntungan per trx untuk paylite dari penambahan biaya transaksi
                'constraint'        => [11,2]
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
        $this->forge->addPrimaryKey('channel_pembayaran_id');
        $this->forge->createTable('channel_pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('channel_pembayaran');
    }
}
