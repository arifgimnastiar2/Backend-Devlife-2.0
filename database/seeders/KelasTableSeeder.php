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
            'nip_guru'      => 1920118039,
            'jurusan_id'    => 1,
            'nama'          => 'Rekayasa Perangkat Lunak 1',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
        Kelas::create([
            'nip_guru'      => 1920118036,
            'jurusan_id'    => 1,
            'nama'          => 'Rekayasa Perangkat Lunak 2',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
        Kelas::create([
            'nip_guru'      => 1920118035,
            'jurusan_id'    => 1,
            'nama'          => 'Rekayasa Perangkat Lunak 3',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);

        // Kelas TKJ
        Kelas::create([
            'nip_guru'      => 1920118022,
            'jurusan_id'    => 2,
            'nama'          => 'Teknik Komputer Jaringan 1',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
        Kelas::create([
            'nip_guru'      => 1920118021,
            'jurusan_id'    => 2,
            'nama'          => 'Teknik Komputer Jaringan 2',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);

        // Kelas MM
        Kelas::create([
            'nip_guru'      => 1920118023,
            'jurusan_id'    => 3,
            'nama'          => 'Multimedia',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);

        // Kelas Audio Video
        Kelas::create([
            'nip_guru'      => 1920118040,
            'jurusan_id'    => 4,
            'nama'          => 'Audio Video 1',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
        Kelas::create([
            'nip_guru'      => 1920118038,
            'jurusan_id'    => 4,
            'nama'          => 'Audio Video 2',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
        Kelas::create([
            'nip_guru'      => 1920118037,
            'jurusan_id'    => 4,
            'nama'          => 'Audio Video 3',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
        Kelas::create([
            'nip_guru'      => 1920118034,
            'jurusan_id'    => 4,
            'nama'          => 'Audio Video 4',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);

        // Kelas Teknik Instalasi Tenaga Listrik
        Kelas::create([
            'nip_guru'      => 1920118032,
            'jurusan_id'    => 5,
            'nama'          => 'Teknik Instalasi Tenaga Listrik 1',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
        Kelas::create([
            'nip_guru'      => 1920118131,
            'jurusan_id'    => 5,
            'nama'          => 'Teknik Instalasi Tenaga Listrik 2',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);

        // Kelas Teknik Otomasi Industri
        Kelas::create([
            'nip_guru'      => 1920118029,
            'jurusan_id'    => 6,
            'nama'          => 'Teknik Otomasi Industri 1',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
        Kelas::create([
            'nip_guru'      => 1920118030,
            'jurusan_id'    => 6,
            'nama'          => 'Teknik Otomasi Industri 2',
            'kelas'         => 12,
            'created_at'    => date('d M Y'),
        ]);
    }
}
