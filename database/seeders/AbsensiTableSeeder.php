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
            'longitude'     => -6.941141,
            'latitude'      => 107.63880,
            'base64'        => 'data:profileArif.png',
            'jam_masuk'     => date('H:i'),
            'jam_keluar'    => date('H:i')
        ]);
        Absensi::create([
            'user_nis'      => 1920118065,
            'longitude'     => -6.941141,
            'latitude'      => 107.63880,
            'base64'        => 'data:profileAzka.png',
            'jam_masuk'     => date('H:i'),
            'jam_keluar'    => date('H:i')
        ]);
        Absensi::create([
            'user_nis'      => 1920118066,
            'longitude'     => -6.941141,
            'latitude'      => 107.63880,
            'base64'        => 'data:profileBagas.png',
            'jam_masuk'     => date('H:i'),
            'jam_keluar'    => date('H:i')
        ]);
        Absensi::create([
            'user_nis'      => 1920118067,
            'longitude'     => -6.941141,
            'latitude'      => 107.63880,
            'base64'        => 'data:profileBriliant.png',
            'jam_masuk'     => date('H:i'),
            'jam_keluar'    => date('H:i')
        ]);
        Absensi::create([
            'user_nis'      => 1920118091,
            'longitude'     => -6.941141,
            'latitude'      => 107.63880,
            'base64'        => 'data:profileRafi.png',
            'jam_masuk'     => date('H:i'),
            'jam_keluar'    => date('H:i')
        ]);
    }
}
