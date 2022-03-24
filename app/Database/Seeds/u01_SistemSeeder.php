<?php

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class u01_SistemSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'sistem_name'       => 'Paylite Edu',
                'sistem_url'        => 'https://edu.paylite.my.id',
                'price_per_month'   => 52000,
                'discount_percent'  => 0,
                'note'              => 'Produk Pendidikan',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ],
            [
                'sistem_name'       => 'Paylite Fin',
                'sistem_url'        => 'https://fin.paylite.my.id',
                'price_per_month'   => 35000,
                'discount_percent'  => 0,
                'note'              => 'Produk Terima Pembayaran',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ],
            [
                'sistem_name'       => 'Paylite Retail',
                'sistem_url'        => 'https://retail.paylite.my.id',
                'price_per_month'   => 16000,
                'discount_percent'  => 0,
                'note'              => 'Produk untuk UMKM/ TOKO/ Kelontong',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ],
            [
                'sistem_name'       => 'Paylite Kios',
                'sistem_url'        => 'https://kios.paylite.my.id',
                'price_per_month'   => 12000,
                'discount_percent'  => 0,
                'note'              => 'Produk untuk Agen Pulsa/ Data/ Pembayaran BPJS',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ],
            [
                'sistem_name'       => 'API Paylite Edu',
                'sistem_url'        => 'https://api-edu.paylite.my.id',
                'price_per_month'   => 23000,
                'discount_percent'  => 0,
                'note'              => 'API Produk Pendidikan',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ],
            [
                'sistem_name'       => 'API Paylite Fin',
                'sistem_url'        => 'https://api-fin.paylite.my.id',
                'price_per_month'   => 17000,
                'discount_percent'  => 0,
                'note'              => 'API Produk Terima Pembayaran',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ],
            [
                'sistem_name'       => 'API Paylite Retail',
                'sistem_url'        => 'https://api-retail.paylite.my.id',
                'price_per_month'   => 9000,
                'discount_percent'  => 0,
                'note'              => 'API Produk untuk UMKM/ TOKO/ Kelontong',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ],
            [
                'sistem_name'       => 'API Paylite Kios',
                'sistem_url'        => 'https://api-kios.paylite.my.id',
                'price_per_month'   => 7000,
                'discount_percent'  => 0,
                'note'              => 'API Produk untuk Agen Pulsa/ Data/ Pembayaran BPJS',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ],
            [
                'sistem_name'       => 'API Paylite WhatsApp',
                'sistem_url'        => 'https://api-wa.paylite.my.id',
                'price_per_month'   => 7000,
                'discount_percent'  => 0,
                'note'              => 'API WA',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ]
        ];
        $this->db->table('sistem')->insertBatch($data);
    }
}