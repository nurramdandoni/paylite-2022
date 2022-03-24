<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdukKategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'produk_kategori_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'nama_kategori'         => [
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
        $this->forge->addPrimaryKey('produk_kategori_id');
        $this->forge->createTable('produk_kategori');
    }

    public function down()
    {
        $this->forge->dropTable('produk_kategori');
    }
}
