<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdukRetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'produk_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'kategori_id'         => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE,
            ],
            'kode_barcode'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'kode_produk'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'foto_produk'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'nama_produk'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'ukuran_kemasan'        => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'satuan_produk'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'het'                   => [
                'type'              => 'DOUBLE',
                'constraint'        => [11,2]
            ],
            'note'                   => [
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
        $this->forge->addPrimaryKey('produk_id');
        $this->forge->addForeignKey('kategori_id', 'produk_kategori', 'produk_kategori_id');
        $this->forge->createTable('produk_retail');
    }

    public function down()
    {
        $this->forge->dropTable('produk_retail');
    }
}
