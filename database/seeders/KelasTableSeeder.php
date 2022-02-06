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
        // Kelas RPL
        Kelas::create([
            'nip_guru'      => 1920118091,
            'jurusan_id'    => 1,
            'nama'          => 'Rekayasa Perangkat Lunak 1',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
        Kelas::create([
            'nip_guru'      => 1920118092,
            'jurusan_id'    => 1,
            'nama'          => 'Rekayasa Perangkat Lunak 2',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
        Kelas::create([
            'nip_guru'      => 1920118093,
            'jurusan_id'    => 1,
            'nama'          => 'Rekayasa Perangkat Lunak 3',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);

        // Kelas TKJ
        Kelas::create([
            'nip_guru'      => 1920118091,
            'jurusan_id'    => 2,
            'nama'          => 'Teknik Komputer Jaringan 1',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
        Kelas::create([
            'nip_guru'      => 1920118092,
            'jurusan_id'    => 2,
            'nama'          => 'Teknik Komputer Jaringan 2',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
        Kelas::create([
            'nip_guru'      => 1920118093,
            'jurusan_id'    => 2,
            'nama'          => 'Teknik Komputer Jaringan 3',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);

        // Kelas MM
        Kelas::create([
            'nip_guru'      => 1920118091,
            'jurusan_id'    => 3,
            'nama'          => 'Multimedia',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
    }
}
