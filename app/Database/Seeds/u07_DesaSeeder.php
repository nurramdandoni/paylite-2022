<?php

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class u07_DesaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'desa_id'              => 1,
                'kecamatan_id'         => 1,
                'kabupaten_id'         => 1,
                'provinsi_id'          => 1,
                'desa_code'            => 'DS001',
                'desa_name'            => 'Cinyasag',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'desa_id'              => 2,
                'kecamatan_id'         => 1,
                'kabupaten_id'         => 1,
                'provinsi_id'          => 1,
                'desa_code'            => 'DS002',
                'desa_name'            => 'Gardujaya',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'desa_id'              => 3,
                'kecamatan_id'         => 1,
                'kabupaten_id'         => 1,
                'provinsi_id'          => 1,
                'desa_code'            => 'DS003',
                'desa_name'            => 'Sadapaingan',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'desa_id'              => 4,
                'kecamatan_id'         => 3,
                'kabupaten_id'         => 2,
                'provinsi_id'          => 1,
                'desa_code'            => 'DS003',
                'desa_name'            => 'Sadapaingan',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
        ];

        $this->db->table('desa')->insertBatch($data);
    }
}