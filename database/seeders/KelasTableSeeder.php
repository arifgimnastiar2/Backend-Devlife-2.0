<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

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
            'nip_guru'      => 1920118091,
            'nama'          => 'Rekayasa Perangkat Lunak 1',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);

        Kelas::create([
            'nip_guru'      => 1920118092,
            'nama'          => 'Rekayasa Perangkat Lunak 2',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);

        Kelas::create([
            'nip_guru'      => 1920118093,
            'nama'          => 'Rekayasa Perangkat Lunak 3',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
    }
}
