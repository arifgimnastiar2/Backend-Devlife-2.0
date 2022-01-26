<?php

namespace Database\Seeders;

use App\Models\Matpel;
use Illuminate\Database\Seeder;

class MatpelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matpel::create([
            'nip_guru'      => 1920118060,
            'nama_matpel'   => 'Information Technology',
            'jam_matpel'    => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
        Matpel::create([
            'nip_guru'      => 1920118061,
            'nama_matpel'   => 'Information Technology',
            'jam_matpel'    => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
        Matpel::create([
            'nip_guru'      => 1920118062,
            'nama_matpel'   => 'Information Technology',
            'jam_matpel'    => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
        Matpel::create([
            'nip_guru'      => 1920118063,
            'nama_matpel'   => 'Information Technology',
            'jam_matpel'    => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
        Matpel::create([
            'nip_guru'      => 1920118064,
            'nama_matpel'   => 'Information Technology',
            'jam_matpel'    => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
    }
}
