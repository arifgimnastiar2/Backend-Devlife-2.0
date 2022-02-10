<?php

namespace Database\Seeders;

use App\Models\Absensi;
use Illuminate\Database\Seeder;

class AbsensiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Absensi::create([
            'user_nis'      => 1920118064,
            'lokasi'        => 'Kantin',
            'base64'        => 'data:profileArif.png',
            'jam_masuk'     => '06:30:00',
            'keterangan'    => 'Tepat Waktu',
            'jam_keluar'    => date('H:i')
        ]);
        Absensi::create([
            'user_nis'      => 1920118065,
            'lokasi'        => 'Kantin',
            'base64'        => 'data:profileAzka.png',
            'jam_masuk'     => date('H:i'),
            'keterangan'    => 'Terlambat',
            'jam_keluar'    => date('H:i')
        ]);
        Absensi::create([
            'user_nis'      => 1920118066,
            'lokasi'        => 'Kantin',
            'base64'        => 'data:profileBagas.png',
            'jam_masuk'     => date('H:i'),
            'keterangan'    => 'Terlambat',
            'jam_keluar'    => date('H:i')
        ]);
        Absensi::create([
            'user_nis'      => 1920118067,
            'lokasi'        => 'Kantin',
            'base64'        => 'data:profileBriliant.png',
            'jam_masuk'     => '06:15:00',
            'keterangan'    => 'Tepat Waktu',
            'jam_keluar'    => date('H:i')
        ]);
        Absensi::create([
            'user_nis'      => 1920118091,
            'lokasi'        => 'Kantin',
            'base64'        => 'data:profileRafi.png',
            'jam_masuk'     => date('H:i'),
            'keterangan'    => 'Terlambat',
            'jam_keluar'    => date('H:i')
        ]);
    }
}
