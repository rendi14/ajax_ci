<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Config\Database;

class KewarganegaraanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code_negara' => '62',
                'nama_negara' => 'Indonesia',
                'ibu_kota' => 'Jakarta',
                'status' => '1'
            ],
            [
                'code_negara' => '60',
                'nama_negara' => 'Malaysia',
                'ibu_kota' => 'Kuala Lumpur',
                'status' => '1'
            ],
            [
                'code_negara' => '65',
                'nama_negara' => 'Singapura',
                'ibu_kota' => 'Singapura',
                'status' => '1'
            ]
        ];

        return Database::connect()
                ->table('kewarganegaraan')
                ->insertBatch($data);
    }
}
