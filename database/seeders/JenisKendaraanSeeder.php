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
            ['nama' => 'Mini Bus'],
            ['nama' => 'Sedan'],
            ['nama' => 'Pick Up'],
            ['nama' => 'Bus'],
            ['nama' => 'Truck'],
            ['nama' => 'Listrik/Elektrik'],
            ['nama' => 'Sport'],
            ['nama' => 'MPV'],
            ['nama' => 'SUV (Sport Utility Vehicle)'],
            ['nama' => 'Hybird'],
            ['nama' => 'CrossOver'],
            ['nama' => 'Van']
        ];
        foreach ( $data as $value) {

            JenisKendaraan::insert([
                'nama' => $value['nama'],
            ]);
        }
    }
}