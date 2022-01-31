<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guru::create([
            'nip'                   => 1920118091,
            'nama_guru'             => 'Rafi Khoirulloh',
            'kode_guru'             => 'RKH',
            'kompetensi_keahlian'   => 'Information Technology',
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118092,
            'nama_guru'             => 'Tom Holland',
            'kode_guru'             => 'THD',
            'kompetensi_keahlian'   => 'Business Information',
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118093,
            'nama_guru'             => 'Tom Cruise',
            'kode_guru'             => 'TCE',
            'kompetensi_keahlian'   => 'Action',
            'created_at'            => date('d M Y')
        ]);
    }
}
