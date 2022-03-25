<?php

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class u05_KabupatenSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kabupaten_id'         => 1,
                'provinsi_id'          => 1,
                'kabupaten_code'       => 'KB001',
                'kabupaten_name'       => 'Ciamis',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'kabupaten_id'         => 2,
                'provinsi_id'          => 1,
                'kabupaten_code'       => 'KB002',
                'kabupaten_name'       => 'Majalengka',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
            [
                'kabupaten_id'         => 3,
                'provinsi_id'          => 1,
                'kabupaten_code'       => 'KB003',
                'kabupaten_name'       => 'Kuningan',
                'created_at'           => Time::now(),
                'update_at'            => Time::now()
            ],
        ];

        $this->db->table('kabupaten')->insertBatch($data);
    }
}