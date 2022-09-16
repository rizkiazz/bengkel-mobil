<?php

namespace Database\Seeders;

use App\Models\Seed\MerekKendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerekKendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
            ['nama' => 'honda'],
        ];
        foreach ( $data as $value) {

            MerekKendaraan::insert([
                'nama' => $value['nama'],
            ]);
        }
    }
}
