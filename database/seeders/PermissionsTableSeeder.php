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
            'matpel_id'     => 1,
            'keterangan'    => 'Sakit Perut',
            'jam_izin'      => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
        Permission::create([
            'user_nis'      => 1920118065,
            'matpel_id'     => 1,
            'keterangan'    => 'Sakit Mata',
            'jam_izin'      => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
        Permission::create([
            'user_nis'      => 1920118066,
            'matpel_id'     => 1,
            'keterangan'    => 'Sakit Kepala',
            'jam_izin'      => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
        Permission::create([
            'user_nis'      => 1920118067,
            'matpel_id'     => 1,
            'keterangan'    => 'Sakit Demam',
            'jam_izin'      => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
        Permission::create([
            'user_nis'      => 1920118091,
            'matpel_id'     => 1,
            'keterangan'    => 'Sakit flu',
            'jam_izin'      => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
    }
}
