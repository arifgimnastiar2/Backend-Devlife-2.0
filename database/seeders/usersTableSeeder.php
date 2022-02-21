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
        // RPL 1
        User::create([
            'nis'           => 1920118064,
            'kelas_id'      => 1,
            'name'          => 'Arif Gimnastiar',
            'jurusan'       => 'Rekayasa Perangkat Lunak 1',
            'email'         => 'arifgimnastiar@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118065,
            'kelas_id'      => 1,
            'name'          => 'Azka',
            'jurusan'       => 'Rekayasa Perangkat Lunak 1',
            'email'         => 'azka@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        // RPL 2
        User::create([
            'nis'           => 1920118066,
            'kelas_id'      => 2,
            'name'          => 'Bagas Ryan',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'email'         => 'Bagas.Ryan@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118067,
            'kelas_id'      => 2,
            'name'          => 'Briliant Adam Lucky',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'email'         => 'briliant.adam@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        // RPL 3
        User::create([
            'nis'           => 1920118091,
            'kelas_id'      => 3,
            'name'          => 'Rafi Khoirulloh',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'email'         => 'khoirulloh.rafi2@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118092,
            'kelas_id'      => 3,
            'name'          => 'Tatan Nugraha',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'email'         => 'tatan.nugraha@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);

        // TKJ

        // TKJ 1
        User::create([
            'nis'           => 1920118068,
            'kelas_id'      => 4,
            'name'          => 'Dani Mulayana',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'dani.mulyana@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118069,
            'kelas_id'      => 4,
            'name'          => 'Dian Slamet Saputra',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'dian.slamet@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        // TKJ 2
        User::create([
            'nis'           => 1920118070,
            'kelas_id'      => 5,
            'name'          => 'Dimas Nugraha',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'Dimas.nugraha@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118071,
            'kelas_id'      => 5,
            'name'          => 'Fadhlan Irhami P',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'fadhlan.irhami@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        // TKJ 3
        User::create([
            'nis'           => 1920118072,
            'kelas_id'      => 4,
            'name'          => 'Farhan Ardiansyah',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'farhan.ardiansyah@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118073,
            'kelas_id'      => 5,
            'name'          => 'Farshal Rauzani',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'farshal.rauzani@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);

        // MM

        // MM 3
        User::create([
            'nis'           => 1920118079,
            'kelas_id'      => 6,
            'name'          => 'Harpi yansyah',
            'jurusan'       => 'Multimedia',
            'email'         => 'harpi.yansyah@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118080,
            'kelas_id'      => 6,
            'name'          => 'Intan Puja',
            'jurusan'       => 'Multimedia',
            'email'         => 'intan.puja@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
    }
}
