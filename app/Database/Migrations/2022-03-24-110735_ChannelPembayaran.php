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
            'type'                  => [
                'type'              => 'ENUM', // Kategori Pembayaran
                'constraint'        => ['VIRTUAL ACCOUNT','E-WALLET','QRIS','RETAIL OUTLET','DISBURSEMENT']
            ],
            'type_transaksi'        => [
                'type'              => 'ENUM', // terima bembayaran/ request pembayaran (disbursement)
                'constraint'        => ['Terima','Kirim']
            ],
            'nama_channel'          => [
                'type'              => 'VARCHAR', // va,qris,indomart (OTC),dll
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
            'get_profit_fee'   => [
                'type'              => 'DOUBLE', // keuntungan per trx untuk paylite dari penambahan biaya transaksi
                'constraint'        => [11,2]
            ],
            'get_profit_percent'   => [
                'type'              => 'DOUBLE', // keuntungan per trx untuk paylite dari penambahan biaya transaksi
                'constraint'        => [11,2]
            ],
            'status_channel'   => [
                'type'              => 'ENUM', // keuntungan per trx untuk paylite dari penambahan biaya transaksi
                'constraint'        => ['NonAktif','Aktif']
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
