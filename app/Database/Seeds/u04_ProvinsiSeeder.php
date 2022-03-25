<?php

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class u04_ProvinsiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'provinsi_id'         => 1,
                'provinsi_code'       => 'PV001',
                'provinsi_name'       => 'Jawa Barat',
                'created_at'          => Time::now(),
                'update_at'           => Time::now()
            ],
            [
                'provinsi_id'         => 2,
                'provinsi_code'       => 'PV002',
                'provinsi_name'       => 'Jawa Tengah',
                'created_at'          => Time::now(),
                'update_at'           => Time::now()
            ],
        ];

        $this->db->table('provinsi')->insertBatch($data);
    }
}