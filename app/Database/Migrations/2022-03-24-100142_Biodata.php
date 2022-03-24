<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Biodata extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'biodata_id'             => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE, // tidak boleh negatif
                'auto_increment'    => TRUE
            ],
            'email'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'user_level'            => [
                'type'              => 'ENUM',
                'constraint'        => ['User','Admin','Agen','P-Admin','S-Admin']
            ],
            'nama_lengkap'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'foto'                  => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'jenis_kelamin'            => [
                'type'              => 'ENUM',
                'constraint'        => ['Laki-laki','Perempuan']
            ],
            'jenis_identitas'       => [
                'type'              => 'ENUM',
                'constraint'        => ['KTP','Passport']
            ],
            'nomor_identitas'       => [
                'type'              => 'VARCHAR',
                'constraint'        => '30'
            ],
            'foto_identitas'        => [
                'type'              => 'VARCHAR',
                'constraint'        => '30'
            ],
            'nomor_telpon'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '30'
            ],
            'nama_bank'             => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'nama_pemilik_rek_bank' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'nomor_rek_bank'        => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'kewarganegaraan'      => [
                'type'              => 'ENUM',
                'constraint'        => ['WNI','WNA']
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
                'type'              => 'ENUM',
                'constraint'        => ['WNI','WNA']
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
        $this->forge->addPrimaryKey('biodata_id');
        $this->forge->addForeignKey('email', 'user_main', 'username');
        $this->forge->addForeignKey('provinsi_id', 'provinsi', 'provinsi_id');
        $this->forge->addForeignKey('kabupaten_id', 'kabupaten', 'kabupaten_id');
        $this->forge->addForeignKey('kecamatan_id', 'kecamatan', 'kecamatan_id');
        $this->forge->addForeignKey('desa_id', 'desa', 'desa_id');
        $this->forge->createTable('biodata');
    }

    public function down()
    {
        $this->forge->dropTable('biodata');
    }
}
