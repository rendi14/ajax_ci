<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run()
    {
        $this->call(KewarganegaraanSeeder::class);
        $this->call(UserSeeder::class);
    }
}
