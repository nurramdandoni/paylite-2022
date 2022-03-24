<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdukSupplier extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'produk_supplier_id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'nama_supplier'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'contact_supplier'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'provinsi_id'           => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'kabupaten_id'          => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'kecamatan_id'          => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'desa_id'               => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'kode_pos'              => [
                'type'              => 'INT',
                'constraint'        => 5
            ],
            'alamat'                => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'keterangan'            => [
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
        $this->forge->addPrimaryKey('produk_supplier_id');
        $this->forge->addForeignKey('provinsi_id', 'provinsi', 'provinsi_id');
        $this->forge->addForeignKey('kabupaten_id', 'kabupaten', 'kabupaten_id');
        $this->forge->addForeignKey('kecamatan_id', 'kecamatan', 'kecamatan_id');
        $this->forge->addForeignKey('desa_id', 'desa', 'desa_id');
        $this->forge->createTable('produk_supplier');
    }

    public function down()
    {
        $this->forge->dropTable('produk_supplier');
    }
}
