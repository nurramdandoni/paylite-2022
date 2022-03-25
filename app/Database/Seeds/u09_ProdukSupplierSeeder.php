<?php

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class u09_ProdukSupplierSeederSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'produk_supplier_id'   => 1,
                'nama_supplier'        => 'PT. Sentosa Jaya Abadi',
                'contact_supplier'     => '089567567456',
                'provinsi_id'          => 1,
                'kabupaten_id'         => 2,
                'kecamatan_id'         => 3,
                'desa_id'              => 4,
                'kode_pos'             => 35728,
                'alamat'               => 'Jalan Cidulang',
                'keterangan'           => '-',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
        ];

        $this->db->table('produk_supplier')->insertBatch($data);
    }
}