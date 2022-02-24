<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'slug' => 'rekayasa-perangkat-lunak'
        ]);
        Jurusan::create([
            'jurusan' => 'Teknik Komputer Jaringan',
            'slug' => 'teknik-komputer-jaringan'
        ]);

        Jurusan::create([
            'jurusan' => 'Multimedia',
            'slug' => 'multimedia'
        ]);
        Jurusan::create([
            'jurusan' => 'Teknik Audio-Video',
            'slug' => 'teknik-audio-video'
        ]);
        Jurusan::create([
            'jurusan' => 'Teknik Instalasi Tenaga Listrik',
            'slug' => 'teknik-instalasi-tenaga-listrik'
        ]);
        Jurusan::create([
            'jurusan' => 'Teknik Otomasi Industri ',
            'slug' => 'teknik-otomasi-industri'
        ]);
    }
}
