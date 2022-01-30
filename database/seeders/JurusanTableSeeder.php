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
            'jurusan' => 'Multi Media',
            'slug' => 'multi-media'
        ]);
    }
}
