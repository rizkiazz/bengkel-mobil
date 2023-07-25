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
            ['nama' => 'HYUNDAI'],
            ['nama' => 'TOYOTA'],
            ['nama' => 'DAIHATSU'],
            ['nama' => 'HONDA'],
            ['nama' => 'MITSUBISHI'],
            ['nama' => 'SUZUKI'],
            ['nama' => 'WULING'],
            ['nama' => 'CHERY'],
            ['nama' => 'KIA'],
            ['nama' => 'MAZDA'],
            ['nama' => 'SUBARU'],
            ['nama' => 'MERCEDES-BENZ'],
            ['nama' => 'RENAULT'],
            ['nama' => 'ISUZU'],
            ['nama' => 'VOLVO'],
            ['nama' => 'LEXUS'],
            ['nama' => 'MINI'],
            ['nama' => 'BMW'],
            ['nama' => 'VOLKSWAGEN'],
            ['nama' => 'PEUGEOT'],
            ['nama' => 'JEEP'],
            ['nama' => 'AUDI'],
            ['nama' => 'MASERATI'],
            ['nama' => 'MG'],
            ['nama' => 'FORD'],
            ['nama' => 'MAHINDRA'],
            ['nama' => 'TATA'],
            ['nama' => 'DFSK'],
            ['nama' => 'JAGUAR'],
            ['nama' => 'NISSAN'],
            ['nama' => 'CITROEN'],
            ['nama' => 'FUSO']
        ];
        foreach ( $data as $value) {

            MerekKendaraan::insert([
                'nama' => $value['nama'],
            ]);
        }
    }
}