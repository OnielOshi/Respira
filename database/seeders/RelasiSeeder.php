<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relasi')->insert([
            // RELASI TIDAK STRESS
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G07',
                'mb' => '0.4',
                'md' => '0.2',
            ],
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G08',
                'mb' => '0.8',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G11',
                'mb' => '0.5',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G18',
                'mb' => '1',
                'md' => '0.2',
            ],
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G19',
                'mb' => '0.8',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G21',
                'mb' => '0.8',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G24',
                'mb' => '0.6',
                'md' => '0.2',
            ],
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G25',
                'mb' => '0.5',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G27',
                'mb' => '0.7',
                'md' => '0.3',
            ],
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G33',
                'mb' => '0.9',
                'md' => '0.5',
            ],
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G36',
                'mb' => '0.8',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G40',
                'mb' => '0.4',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P01',
                'kode_gejala' => 'G41',
                'mb' => '0.6',
                'md' => '0.2',
            ],
            // END RELASI TIDAK STRESS
            // RELASI STRESS RENDAH
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G01',
                'mb' => '1',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G02',
                'mb' => '1',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G03',
                'mb' => '1',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G04',
                'mb' => '0.8',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G05',
                'mb' => '1',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G06',
                'mb' => '0.8',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G07',
                'mb' => '0.8',
                'md' => '0.3',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G08',
                'mb' => '1',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G09',
                'mb' => '0.8',
                'md' => '0.2',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G10',
                'mb' => '0.9',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G11',
                'mb' => '0.8',
                'md' => '0.3',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G12',
                'mb' => '0.6',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G13',
                'mb' => '0.8',
                'md' => '0.6',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G14',
                'mb' => '0.6',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G15',
                'mb' => '0.8',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G16',
                'mb' => '1',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G17',
                'mb' => '1',
                'md' => '0.6',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G19',
                'mb' => '0.5',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G20',
                'mb' => '0.7',
                'md' => '0.3',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G21',
                'mb' => '0.9',
                'md' => '0.5',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G22',
                'mb' => '0.8',
                'md' => '0.6',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G23',
                'mb' => '1',
                'md' => '0.6',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G24',
                'mb' => '1',
                'md' => '0.6',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G25',
                'mb' => '0.4',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G26',
                'mb' => '1',
                'md' => '0.6',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G27',
                'mb' => '0.9',
                'md' => '0.8',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G28',
                'mb' => '0.8',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G29',
                'mb' => '0.8',
                'md' => '0.5',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G30',
                'mb' => '0.4',
                'md' => '0.2',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G31',
                'mb' => '0.7',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G32',
                'mb' => '0.8',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G33',
                'mb' => '0.6',
                'md' => '0.8',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G34',
                'mb' => '0.6',
                'md' => '0.8',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G35',
                'mb' => '0.9',
                'md' => '0.3',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G36',
                'mb' => '0.4',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G37',
                'mb' => '0.9',
                'md' => '0.5',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G38',
                'mb' => '1',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G39',
                'mb' => '0.4',
                'md' => '0.6',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G41',
                'mb' => '0.9',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G42',
                'mb' => '0.8',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P02',
                'kode_gejala' => 'G43',
                'mb' => '0.4',
                'md' => '0.2',
            ],
            // END RELASI STRESS RENDAH
            // RELASI STRESS SEDANG
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G02',
                'mb' => '0.6',
                'md' => '0.2',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G03',
                'mb' => '0.8',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G04',
                'mb' => '0.7',
                'md' => '0.3',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G06',
                'mb' => '0.5',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G09',
                'mb' => '0.8',
                'md' => '4', // Anda mungkin perlu menyesuaikan nilai md yang mungkin seharusnya 0.4 bukan 4
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G12',
                'mb' => '0.9',
                'md' => '0.5',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G13',
                'mb' => '1',
                'md' => '0.6',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G14',
                'mb' => '0.8',
                'md' => '0.2',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G15',
                'mb' => '0.5',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G16',
                'mb' => '0.6',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G17',
                'mb' => '0.7',
                'md' => '0.3',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G19',
                'mb' => '0.4',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G20',
                'mb' => '0.8',
                'md' => '0.2',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G21',
                'mb' => '0.6',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G22',
                'mb' => '0.8',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G25',
                'mb' => '0.7',
                'md' => '0.3',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G26',
                'mb' => '0.4',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G28',
                'mb' => '0.5',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G30',
                'mb' => '0.8',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G31',
                'mb' => '1',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G32',
                'mb' => '1',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G34',
                'mb' => '1',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G35',
                'mb' => '0.8',
                'md' => '0.6',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G36',
                'mb' => '0.6',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G37',
                'mb' => '0.7',
                'md' => '0.3',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G40',
                'mb' => '0.5',
                'md' => '0.1',
            ],
            [
                'kode_stress' => 'P03',
                'kode_gejala' => 'G42',
                'mb' => '0.9',
                'md' => '0.5',
            ],
            // END RELASI STRESS SEDANG
            // RELASI STRESS TINGGI
            [
                'kode_stress' => 'P04',
                'kode_gejala' => 'G30',
                'mb' => '1',
                'md' => '0',
            ],
            [
                'kode_stress' => 'P04',
                'kode_gejala' => 'G39',
                'mb' => '0.6',
                'md' => '0.4',
            ],
            [
                'kode_stress' => 'P04',
                'kode_gejala' => 'G43',
                'mb' => '0.8',
                'md' => '0.1',
            ],
            // END RELASI STRESS TINGGI
        ]);
    }
}
