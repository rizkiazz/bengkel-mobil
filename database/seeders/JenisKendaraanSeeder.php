<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seed\JenisKendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisKendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
            ['nama' => 'minibus'],
        ];
        foreach ( $data as $value) {

            JenisKendaraan::insert([
                'nama' => $value['nama'],
            ]);
        }
    }
}
