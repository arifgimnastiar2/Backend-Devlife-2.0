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
        // 1
        User::create([
            'nis'           => 1920118064,
            'name'          => 'Arif Gimnastiar',
            'jurusan'       => 'Rekayasa Perangkat Lunak',
            'email'         => 'arifgimnastiar@gmail.com',
            'telepon'       => .08123456789,
            'alamat'        => 'Jl. Soekarno Hatta',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118065,
            'name'          => 'Azka',
            'jurusan'       => 'Rekayasa Perangkat Lunak',
            'email'         => 'azka@gmail.com',
            'telepon'       => .08123456789,
            'alamat'        => 'Jl. BKR',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118066,
            'name'          => 'Bagas Ryan',
            'jurusan'       => 'Rekayasa Perangkat Lunak',
            'email'         => 'Bagas.Ryan@gmail.com',
            'telepon'       => .08123456789,
            'alamat'        => 'Jl. Mutiara',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);

        // 2
        User::create([
            'nis'           => 1920118067,
            'name'          => 'Briliant Adam Lucky',
            'jurusan'       => 'Rekayasa Perangkat Lunak',
            'email'         => 'briliant.adam@gmail.com',
            'telepon'       => .08123456789,
            'alamat'        => 'Jl. Antapani',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118091,
            'name'          => 'Rafi Khoirulloh',
            'jurusan'       => 'Rekayasa Perangkat Lunak',
            'email'         => 'khoirulloh.rafi2@gmail.com',
            'telepon'       => .08123456789,
            'alamat'        => 'Jl. Babakan Jati',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118092,
            'name'          => 'Tata Nugraha',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'id_kelas'      => 2,
            'kelas'         => 'RPL 2',
            'email'         => 'Tatan300@gmail.com',
            'telepon'       => .08123456789,
            'alamat'        => 'Jl. Babakan Jati',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);

        // 3
        User::create([
            'nis'           => 1920118001,
            'name'          => 'Dimas Nugraha',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'id_kelas'      => 3,
            'kelas'         => 'RPL 3',
            'email'         => 'dimas.nugraha@gmail.com',
            'telepon'       => .08123456789,
            'alamat'        => 'Jl. Antapani',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118002,
            'name'          => 'Farhan Ardiyansyah',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'id_kelas'      => 3,
            'kelas'         => 'RPL 3',
            'email'         => 'Farhan.Ardiyansayh@gmail.com',
            'telepon'       => .08123456789,
            'alamat'        => 'Jl. Babakan Jati',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118003,
            'name'          => 'Farshal',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'id_kelas'      => 3,
            'kelas'         => 'RPL 3',
            'email'         => 'farhsal270@gmail.com',
            'telepon'       => .08123456789,
            'alamat'        => 'Jl. Babakan Jati',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
    }
}
