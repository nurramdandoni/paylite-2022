<?php

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class u10_ProdukRetailSeederSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'produk_id'            => 1,
                'kategori_id'          => 1,
                'kode_barcode'         => 89543216789,
                'kode_produk'          => 'MA0056',
                'foto_produk'          => 'https://retail.paylite.my.id/ibiuiuublgva9gasuyc7stc97FGYBVYftrhyuhjglilihhb',
                'nama_produk'          => 'Mie Sedap Goreng',
                'ukuran_kemasan'       => '80 Gram',
                'satuan_produk'        => 'Pcs',
                'het'                  => '2000',
                'note'                 => 'Makanan Anak Kosan',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'produk_id'            => 2,
                'kategori_id'          => 2,
                'kode_barcode'         => 89543216799,
                'kode_produk'          => 'MI0057',
                'foto_produk'          => 'https://retail.paylite.my.id/ibiuiuublgva9gasuyc7stckljhjhljYftrhyuhjglilihhb',
                'nama_produk'          => 'Teh Pucuk',
                'ukuran_kemasan'       => '350 mL',
                'satuan_produk'        => 'Pcs',
                'het'                  => '3500',
                'note'                 => 'Minuman Favorite',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'produk_id'            => 3,
                'kategori_id'          => 3,
                'kode_barcode'         => 89544216799,
                'kode_produk'          => 'OB0058',
                'foto_produk'          => 'https://retail.paylite.my.id/ibHLpoHllgva9gasuyc7stckljhjhljYftrhyuhjglilihhb',
                'nama_produk'          => 'Oskadon SP',
                'ukuran_kemasan'       => '1 Strip',
                'satuan_produk'        => 'Pcs',
                'het'                  => '2000',
                'note'                 => 'Obat Sakit Kepala',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'produk_id'            => 4,
                'kategori_id'          => 4,
                'kode_barcode'         => 89544216899,
                'kode_produk'          => 'KC0058',
                'foto_produk'          => 'https://retail.paylite.my.id/ibHLpoHojojosuyc7stckljhjhljYftrhyuhjglilihhb',
                'nama_produk'          => 'Bedak Wardah',
                'ukuran_kemasan'       => '-',
                'satuan_produk'        => 'Pcs',
                'het'                  => '15000',
                'note'                 => 'Bedak Wanita',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
        ];

        $this->db->table('produk_retail')->insertBatch($data);
    }
}