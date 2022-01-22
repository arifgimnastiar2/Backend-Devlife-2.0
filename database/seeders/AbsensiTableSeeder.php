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
            'user_nis'      => 1920118091,
            'longitude'     => -6.941141,
            'latitude'      => 107.63880,
            'base64'        => 'data:profile.png',
            'jam_masuk'     => date('H:i'),
            'jam_keluar'    => date('H:i')
        ]);
    }
}
