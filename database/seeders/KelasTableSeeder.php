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
        // Rekayasa Perangkat Lunak
        Kelas::create([
            'jurusan_id' => 1,
            'nip_guru' => '1920118061',
            'nama' => 'Rekayasa Perangkat Lunak 1',
            'slug' => 'rekayasa-perangkat-lunak-1',
            'tahun_angkatan' => '2022'
        ]);
        Kelas::create([
            'jurusan_id' => 1,
            'nip_guru' => '1920118063',
            'nama' => 'Rekayasa Perangkat Lunak 2',
            'slug' => 'rekayasa-perangkat-lunak-2',
            'tahun_angkatan' => '2022'
        ]);
        Kelas::create([
            'jurusan_id' => 1,
            'nip_guru' => '1920118064',
            'nama' => 'Rekayasa Perangkat Lunak 3',
            'slug' => 'rekayasa-perangkat-lunak-3',
            'tahun_angkatan' => '2022'
        ]);

        // Teknik Komputer Jaringan
        Kelas::create([
            'jurusan_id' => 2,
            'nip_guru' => '1920118060',
            'nama' => 'Teknik Komputer Jaringan 1',
            'slug' => 'teknik-komputer-jaringan 1',
            'tahun_angkatan' => '2022'
        ]);
        Kelas::create([
            'jurusan_id' => 2,
            'nip_guru' => '1920118062',
            'nama' => 'Teknik Komputer Jaringan 2',
            'slug' => 'teknik-komputer-jaringan-2',
            'tahun_angkatan' => '2022'
        ]);

        // Multimedia
        Kelas::create([
            'jurusan_id' => 3,
            'nip_guru' => '1920118063',
            'nama' => 'Multimedia',
            'slug' => 'multimedia',
            'tahun_angkatan' => '2022'
        ]);
    }
}
