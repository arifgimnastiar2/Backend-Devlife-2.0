<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'nip_guru' => '1920118061',
            'user_id' => 1920118064,
            'nama' => 'Rekayasa Perangkat Lunak 1',
            'tahun_angkatan' => '2022'
        ]);
        Kelas::create([
            'nip_guru' => '1920118063',
            'user_id' => 1920118065,
            'nama' => 'Rekayasa Perangkat Lunak 2',
            'tahun_angkatan' => '2022'
        ]);
        Kelas::create([
            'nip_guru' => '1920118064',
            'user_id' => 1920118066,
            'nama' => 'Rekayasa Perangkat Lunak 3',
            'tahun_angkatan' => '2022'
        ]);
        Kelas::create([
            'nip_guru' => '1920118060',
            'user_id' => 1920118067,
            'nama' => 'Teknik Komputer Jaringan 1',
            'tahun_angkatan' => '2022'
        ]);
        Kelas::create([
            'nip_guru' => '1920118062',
            'user_id' => 1920118091,
            'nama' => 'Teknik Komputer Jaringan 2',
            'tahun_angkatan' => '2022'
        ]);
    }
}
