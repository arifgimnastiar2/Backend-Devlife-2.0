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
            'nip_guru'      => 1920118091,
            'nama_matpel'   => 'Sistem Informasi',
            'jam_matpel'    => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
    }
}
