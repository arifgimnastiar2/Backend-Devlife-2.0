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
            'user_nis'      => 1920118091,
            'matpel_id'     => 1,
            'keterangan'    => 'Sakit flu',
            'jam_izin'      => date('H:i'),
            'created_at'    => date('d M Y')
        ]);
    }
}
