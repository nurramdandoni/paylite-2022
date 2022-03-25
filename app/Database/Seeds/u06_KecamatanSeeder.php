<?php

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class u06_KecamatanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kecamatan_id'         => 1,
                'kabupaten_id'         => 1,
                'provinsi_id'          => 1,
                'kecamatan_code'       => 'KC001',
                'kecamatan_name'       => 'Panawangan',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'kecamatan_id'         => 2,
                'kabupaten_id'         => 1,
                'provinsi_id'          => 1,
                'kecamatan_code'       => 'KC002',
                'kecamatan_name'       => 'Kawali',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'kecamatan_id'         => 3,
                'kabupaten_id'         => 2,
                'provinsi_id'          => 1,
                'kecamatan_code'       => 'KC003',
                'kecamatan_name'       => 'Cikijing',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
        ];

        $this->db->table('kecamatan')->insertBatch($data);
    }
}