<?php

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class u02_UserMainSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'          => 'nurramdandoni@gmail.com',
                'password'          => 'SitiNurAfifah1',
                'activation_code'   => 563764,
                'api_key'           => 'PAY-SDFERTvghbjkBhjBnhJnbghjnklmnbhjngtdfgVHbnhlknbghctyHnbgjkjgdFVG:',
                'account_status'    => 'Aktif',
                'note'              => 'SuperAdmin Owner punya interface sendiri dan akses penuh ke semua fitur',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ],
            [
                'username'          => 'nurlisviantiaan@gmail.com',
                'password'          => 'SitiNurAfifah1',
                'activation_code'   => 589764,
                'api_key'           => 'PAY-SDYTGTvghbjkBhjBnhJnbghjnklmnbhjngtdfgVHbnhlknbghctyHnbgjkjgdFVG:',
                'account_status'    => 'Aktif',
                'note'              => 'PayliteAdmin Owner punya interface sendiri dan monitoring ke semua fitur',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ],
            [
                'username'          => 'muhammadnuralim@gmail.com',
                'password'          => 'SitiNurAfifah1',
                'activation_code'   => 586764,
                'api_key'           => 'PAY-SDYTYTvghbjkBhjBnhJnbghjnklmnbhjngtdfgVHbnhlknbghctyHnbgjkjgdFGG:',
                'account_status'    => 'Aktif',
                'note'              => 'AgenAdmin Owner punya interface sendiri dan monitoring ke semua referalnya',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ],
            [
                'username'          => 'buhaji@gmail.com',
                'password'          => 'SitiNurAfifah1',
                'activation_code'   => 586765,
                'api_key'           => 'PAY-DFYTYTvghbjkBhjBnhJnbghjnklmnbhjngtdfgVHbnhlknbghctyHnbgjkjgdFGG:',
                'account_status'    => 'Aktif',
                'note'              => 'Admin Sekolah/ Owner/ Pemilik toko/ kios punya interface sendiri dan akses produk mereka yang telah diaktivasi',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ],
            [
                'username'          => 'omiman@gmail.com',
                'password'          => 'SitiNurAfifah1',
                'activation_code'   => 586966,
                'api_key'           => 'PAY-DFYTGTvghbjkBhjBnhJnbghjnklmnbhjngtdfgVHbnhlknbghctyHnbgjkjgdHGG:',
                'account_status'    => 'Aktif',
                'note'              => 'Orang Tua/ Siswa/ Pelanggan',
                'created_at'        => Time::now(),
                'update_at'         => Time::now()
            ]
        ];

        $this->db->table('user_main')->insertBatch($data);
    }
}