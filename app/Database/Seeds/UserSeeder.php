<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class UserSeeder extends Seeder
{
    public function run()
    {
        $kewarganegaraan = $this->db->table('kewarganegaraan')
                            ->select('id_kewarganegaraan')
                            ->get()
                            ->getResult();
        $data = [];
        
        $faker = Factory::create('id_ID');
        
        foreach ($kewarganegaraan as $item) {
            for ($i=0; $i < 10; $i++) { 
                $data[] = [
                    'nama' => $faker->name(),
                    'nik' => $faker->nik(),
                    'alamat' => $faker->address(),
                    'status' => '1',
                    'kewarganegaraan' => $item->id_kewarganegaraan
                ];
            }
        }

        return $this->db->table('master_user')->insertBatch($data);
    }
}
