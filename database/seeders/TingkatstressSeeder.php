<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TingkatstressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tingkat_stress')->insert([
            [
                'kode_stress' => 'P01',
                'nama_tingkat_stress' => 'Tidak Stress',
                'keterangan' => 'Uji Coba'
            ],
            [
                'kode_stress' => 'P02',
                'nama_tingkat_stress' => 'Stress Rendah',
                'keterangan' => 'Uji Coba'
            ],
            [
                'kode_stress' => 'P03',
                'nama_tingkat_stress' => 'Stress Sedang',
                'keterangan' => 'Uji Coba'
            ],
            [
                'kode_stress' => 'P04',
                'nama_tingkat_stress' => 'Stress Tinggi',
                'keterangan' => 'Uji Coba'
            ]
        ]);
    }
}
