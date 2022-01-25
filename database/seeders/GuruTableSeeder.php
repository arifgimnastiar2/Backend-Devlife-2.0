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
    }
}
