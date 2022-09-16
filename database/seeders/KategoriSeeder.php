<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ],
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ],
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ],
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ],
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ],
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ],
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ],
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ],
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ],
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ],
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ],
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ],
            [ 'nama' => 'mobil', 'sub_nama' => 'body' ]
        ];

        foreach ( $data as $value) {

            Kategori::insert([
                'nama' => $value['nama'],
                'sub_nama' => $value['sub_nama'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
