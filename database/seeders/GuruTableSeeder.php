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
            'kompetensi_keahlian'   => 'Information Technology',
            'telepon'               => .082120806320,
            'alamat'                => 'Jl. Babakan Jati',
            'created_at'            => date('d M Y')
        ]);
    }
}
