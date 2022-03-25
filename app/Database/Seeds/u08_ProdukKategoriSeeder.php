<?php

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class u08_ProdukKategoriSeederSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'produk_kategori_id'   => 1,
                'nama_kategori'        => 'Makanan',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'produk_kategori_id'   => 2,
                'nama_kategori'        => 'Minuman',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'produk_kategori_id'   => 3,
                'nama_kategori'        => 'Obat - obatan',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'produk_kategori_id'   => 4,
                'nama_kategori'        => 'Kecantikan',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
        ];

        $this->db->table('produk_kategori')->insertBatch($data);
    }
}