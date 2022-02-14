<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'user_nis'      => 1920118064,
            'keterangan'    => 'Sakit',
            'deskripsi'     => 'Sakit Perut',
            'jam_izin'      => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
        Permission::create([
            'user_nis'      => 1920118065,
            'keterangan'    => 'Sakit',
            'deskripsi'     => 'Sakit Mata',
            'jam_izin'      => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
        Permission::create([
            'user_nis'      => 1920118066,
            'keterangan'    => 'Sakit',
            'deskripsi'     => 'Sakit Gigi',
            'jam_izin'      => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
        Permission::create([
            'user_nis'      => 1920118067,
            'keterangan'    => 'Sakit',
            'deskripsi'     => 'Sakit Kulit',
            'jam_izin'      => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
        Permission::create([
            'user_nis'      => 1920118091,
            'keterangan'    => 'Sakit',
            'deskripsi'     => 'Sakit Hati',
            'jam_izin'      => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
    }
}
