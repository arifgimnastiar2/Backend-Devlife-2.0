<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nis'           => 1920118064,
            'name'          => 'Arif Gimnastiar',
            'jurusan'       => 'Rekayasa Perangkat Lunak',
            'kelas'         => 'RPL 1',
            'email'         => 'arifgimnastiar@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118065,
            'name'          => 'Azka',
            'jurusan'       => 'Rekayasa Perangkat Lunak',
            'kelas'         => 'RPL 1',
            'email'         => 'azka@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118066,
            'name'          => 'Bagas Ryan',
            'jurusan'       => 'Rekayasa Perangkat Lunak',
            'kelas'         => 'RPL 1',
            'email'         => 'Bagas.Ryan@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118067,
            'name'          => 'Briliant Adam Lucky',
            'jurusan'       => 'Rekayasa Perangkat Lunak',
            'kelas'         => 'RPL 1',
            'email'         => 'briliant.adam@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118091,
            'name'          => 'Rafi Khoirulloh',
            'jurusan'       => 'Rekayasa Perangkat Lunak',
            'kelas'         => 'RPL 1',
            'email'         => 'khoirulloh.rafi2@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
    }
}
