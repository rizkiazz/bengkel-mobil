<?php

namespace Database\Seeders;

use App\Models\Seed\BahanBakar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BahanBakarKendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'nama' => 'BENSIN'],
            [ 'nama' => 'SOLAR'],
            [ 'nama' => 'UNLEADED GASOLINE']
        ];

        foreach ( $data as $value) {

            BahanBakar::insert([
                'nama' => $value['nama'],
            ]);
        }
    }
}
