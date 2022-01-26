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
            'nip'                   => 1920118060,
            'nama_guru'             => 'Salman Sulaksana',
            'kompetensi_keahlian'   => 'Matematika',
            'telepon'               => .08123456789,
            'alamat'                => 'Jl. Kircon',
            'created_at'            => date('d M Y')
        ]);
        Guru::create([
            'nip'                   => 1920118061,
            'nama_guru'             => 'Rafi Indra',
            'kompetensi_keahlian'   => 'Agama',
            'telepon'               => .08123456789,
            'alamat'                => 'Jl. Banteng Dalam',
            'created_at'            => date('d M Y')
        ]);
        Guru::create([
            'nip'                   => 1920118062,
            'nama_guru'             => 'Bahar kusnadi',
            'kompetensi_keahlian'   => 'Seni Budaya',
            'telepon'               => .08123456789,
            'alamat'                => 'Jl. Kliningan',
            'created_at'            => date('d M Y')
        ]);
        Guru::create([
            'nip'                   => 1920118063,
            'nama_guru'             => 'Nanang Ryan',
            'kompetensi_keahlian'   => 'Olahraga',
            'telepon'               => .08123456789,
            'alamat'                => 'Jl. Buah Batu',
            'created_at'            => date('d M Y')
        ]);
        Guru::create([
            'nip'                   => 1920118064,
            'nama_guru'             => 'Sandhika Galih',
            'kompetensi_keahlian'   => 'Information Technology',
            'telepon'               => .082120806320,
            'alamat'                => 'Jl. Babakan Jati',
            'created_at'            => date('d M Y')
        ]);
    }
}
