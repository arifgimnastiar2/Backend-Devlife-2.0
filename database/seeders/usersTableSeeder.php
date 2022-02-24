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
        // Rekayasa Perangkat Lunak
        // RPL 1
        User::create([
            'nis'           => 1920118060,
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
            'nis'           => 1920118061,
            'kelas_id'      => 1,
            'name'          => 'Azka Nayla',
            'jurusan'       => 'Rekayasa Perangkat Lunak 1',
            'email'         => 'azka@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118062,
            'kelas_id'      => 1,
            'name'          => 'Harpiyansah',
            'jurusan'       => 'Rekayasa Perangkat Lunak 1',
            'email'         => 'harpiyansah@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118063,
            'kelas_id'      => 1,
            'name'          => 'Hans Han',
            'jurusan'       => 'Rekayasa Perangkat Lunak 1',
            'email'         => 'hans@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118064,
            'kelas_id'      => 1,
            'name'          => 'Rafi Khoirullohh',
            'jurusan'       => 'Rekayasa Perangkat Lunak 1',
            'email'         => 'rapi@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118065,
            'kelas_id'      => 1,
            'name'          => 'M. Daffa',
            'jurusan'       => 'Rekayasa Perangkat Lunak 1',
            'email'         => 'daffa@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118066,
            'kelas_id'      => 1,
            'name'          => 'M. Naufal Akmal',
            'jurusan'       => 'Rekayasa Perangkat Lunak 1',
            'email'         => 'akmal@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118067,
            'kelas_id'      => 1,
            'name'          => 'Ilham Zaenudin',
            'jurusan'       => 'Rekayasa Perangkat Lunak 1',
            'email'         => 'ilham1@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118068,
            'kelas_id'      => 1,
            'name'          => 'Andri Yansyah',
            'jurusan'       => 'Rekayasa Perangkat Lunak 1',
            'email'         => 'andre@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118069,
            'kelas_id'      => 1,
            'name'          => 'Dian Slamet',
            'jurusan'       => 'Rekayasa Perangkat Lunak 1',
            'email'         => 'dian@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        // RPL 2
        User::create([
            'nis'           => 1920118070,
            'kelas_id'      => 2,
            'name'          => 'Andrian Eka Saputra',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'email'         => 'eka.saputra@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118071,
            'kelas_id'      => 2,
            'name'          => 'Agung Muhammad Makarim',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'email'         => 'agungmakarim@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118072,
            'kelas_id'      => 2,
            'name'          => 'Aly Rachman Hidayat',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'email'         => 'aly@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118073,
            'kelas_id'      => 2,
            'name'          => 'Andri Ramdani',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'email'         => 'a.ramdani@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118074,
            'kelas_id'      => 2,
            'name'          => 'Angga Muhammad Yunus',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'email'         => 'angga.y@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118075,
            'kelas_id'      => 2,
            'name'          => 'Hendriyan Ihsan Mutakin',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'email'         => 'hend.im@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118076,
            'kelas_id'      => 2,
            'name'          => 'Iqbal Ismayadi',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'email'         => 'ismayadi@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118077,
            'kelas_id'      => 2,
            'name'          => 'Muhammad Rifqi Arif',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'email'         => 'm.rifqii@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118078,
            'kelas_id'      => 2,
            'name'          => 'Riki Saepulloh',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'email'         => 'saepulloh.r@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118079,
            'kelas_id'      => 2,
            'name'          => 'Satria Rama Putra Atmaja',
            'jurusan'       => 'Rekayasa Perangkat Lunak 2',
            'email'         => 'rama.atmaja@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        // RPL 3
        User::create([
            'nis'           => 1920118080,
            'kelas_id'      => 3,
            'name'          => 'Aldo Fakhry',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'email'         => 'aldo@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118081,
            'kelas_id'      => 3,
            'name'          => 'Andree Meilio Caniaga',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'email'         => 'meilio@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118082,
            'kelas_id'      => 3,
            'name'          => 'Badrul Rohman',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'email'         => 'b.rohman@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118083,
            'kelas_id'      => 3,
            'name'          => 'Billah Octafuaza',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'email'         => 'billahocta@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118084,
            'kelas_id'      => 3,
            'name'          => 'Fadli Mahesa',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'email'         => 'mahesafadli@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118085,
            'kelas_id'      => 3,
            'name'          => 'Fernanda Syah Putra',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'email'         => 'fernanda.s@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118086,
            'kelas_id'      => 3,
            'name'          => 'Firdaus Haqiqi',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'email'         => 'haqiqi.f@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118087,
            'kelas_id'      => 3,
            'name'          => 'Resti Sintiyana',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'email'         => 'resti.s@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118088,
            'kelas_id'      => 3,
            'name'          => 'Ridwan Mulyawan',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'email'         => 'mulyawanridwan@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118089,
            'kelas_id'      => 3,
            'name'          => 'Vito Ardika Saputra',
            'jurusan'       => 'Rekayasa Perangkat Lunak 3',
            'email'         => 'vitosaputra@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);

        // Teknik Komputer dan Jaringan
        // TKJ 1
        User::create([
            'nis'           => 1920118090,
            'kelas_id'      => 4,
            'name'          => 'Agisna Maulana',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'agisna@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118091,
            'kelas_id'      => 4,
            'name'          => 'Anisa Khoiru Nikmah',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'anisakhoiru@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118092,
            'kelas_id'      => 4,
            'name'          => 'Diaz Adipratama Setyowidi',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'diazsetyo@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118093,
            'kelas_id'      => 4,
            'name'          => 'Faliq Husnan',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'f.husnan@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118094,
            'kelas_id'      => 4,
            'name'          => 'Firman Mutaqim',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'mutaqim@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118095,
            'kelas_id'      => 4,
            'name'          => 'Haiqa Delonix Farid',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'haiqa@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118096,
            'kelas_id'      => 4,
            'name'          => 'Indra Muhammad Ridwan',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'indraridwan@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118097,
            'kelas_id'      => 4,
            'name'          => 'Jemy Astiadi',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'jemy@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118098,
            'kelas_id'      => 4,
            'name'          => 'Muhammad Azzam Khalif Hasanudin',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'azzam@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118099,
            'kelas_id'      => 4,
            'name'          => 'Rafi Rizky Aditya',
            'jurusan'       => 'Teknik Komputer Jaringan 1',
            'email'         => 'rafi.rr@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        // TKJ 2
        User::create([
            'nis'           => 1920118100,
            'kelas_id'      => 5,
            'name'          => 'Alfian Akbar Darazat',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'alfianakbar@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118101,
            'kelas_id'      => 5,
            'name'          => 'Andaika Maulana Putra',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'andaika@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118102,
            'kelas_id'      => 5,
            'name'          => 'Ervan Maulana',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'ervanmaul@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118103,
            'kelas_id'      => 5,
            'name'          => 'Firizky Rayya Rabbana',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'firizky@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118104,
            'kelas_id'      => 5,
            'name'          => 'Hermawan Wijaya',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'hermawi@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118105,
            'kelas_id'      => 5,
            'name'          => 'Hikmah Setiawan',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'h.setiawan@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118106,
            'kelas_id'      => 5,
            'name'          => 'Mochammad Ghiat Alfauzan',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'ghiatfauzan@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118107,
            'kelas_id'      => 5,
            'name'          => 'Muchamad Fazry Ramdhan Riztin',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'fazryriz@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118108,
            'kelas_id'      => 5,
            'name'          => 'Panca Andri Wibowo',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'pancawibowo@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118109,
            'kelas_id'      => 5,
            'name'          => 'Raju Dwi Saputra',
            'jurusan'       => 'Teknik Komputer Jaringan 2',
            'email'         => 'rajuuu@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);

        // Multimedia
        // MM
        User::create([
            'nis'           => 1920118110,
            'kelas_id'      => 6,
            'name'          => 'Alif Muhammad Fadhli',
            'jurusan'       => 'Multimedia',
            'email'         => 'aliffadhli@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118111,
            'kelas_id'      => 6,
            'name'          => 'Alvis Yunarto',
            'jurusan'       => 'Multimedia',
            'email'         => 'alvisyu@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118112,
            'kelas_id'      => 6,
            'name'          => 'Defana Lee Fattahillah',
            'jurusan'       => 'Multimedia',
            'email'         => 'leedefana@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118113,
            'kelas_id'      => 6,
            'name'          => 'Farhan Ramadhan',
            'jurusan'       => 'Multimedia',
            'email'         => 'farhandhan@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118114,
            'kelas_id'      => 6,
            'name'          => 'Gina Agustina',
            'jurusan'       => 'Multimedia',
            'email'         => 'gina.g@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);

        // Audio Video
        // AV 1
        User::create([
            'nis'           => 1920118115,
            'kelas_id'      => 7,
            'name'          => 'Alif Muhammad Fadhli',
            'jurusan'       => 'Audio Video 1',
            'email'         => 'alifmd@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118116,
            'kelas_id'      => 7,
            'name'          => 'Agung Anggara',
            'jurusan'       => 'Audio Video 1',
            'email'         => 'a.anggara@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118117,
            'kelas_id'      => 7,
            'name'          => 'Denna Radeswan',
            'jurusan'       => 'Audio Video 1',
            'email'         => 'dennaaa@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118118,
            'kelas_id'      => 7,
            'name'          => 'Jihan Maulani',
            'jurusan'       => 'Audio Video 1',
            'email'         => 'jihani@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118119,
            'kelas_id'      => 7,
            'name'          => 'Meiga Utami Ledi',
            'jurusan'       => 'Audio Video 1',
            'email'         => 'imeigag@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        // AV 2
        User::create([
            'nis'           => 1920118120,
            'kelas_id'      => 8,
            'name'          => 'Adhiman Shidiq',
            'jurusan'       => 'Audio Video 2',
            'email'         => 'adi.man@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118121,
            'kelas_id'      => 8,
            'name'          => 'Arif Subarjah',
            'jurusan'       => 'Audio Video 2',
            'email'         => 'subarjaharif@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118122,
            'kelas_id'      => 8,
            'name'          => 'Deni Setiawan',
            'jurusan'       => 'Audio Video 2',
            'email'         => 'deni.seti@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118123,
            'kelas_id'      => 8,
            'name'          => 'Melia Savitri',
            'jurusan'       => 'Audio Video 2',
            'email'         => 'm.savitri@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118124,
            'kelas_id'      => 8,
            'name'          => 'Nabil Aqil Hanafi',
            'jurusan'       => 'Audio Video 2',
            'email'         => 'nabilaqil@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        // AV 3
        User::create([
            'nis'           => 1920118125,
            'kelas_id'      => 9,
            'name'          => 'Esa Fallah Royani',
            'jurusan'       => 'Audio Video 3',
            'email'         => 'esani@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118126,
            'kelas_id'      => 9,
            'name'          => 'Humam Al Haitsam Dzulfiqh',
            'jurusan'       => 'Audio Video 3',
            'email'         => 'alhaitsam@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118127,
            'kelas_id'      => 9,
            'name'          => 'Leo Restu Septian Rhaka Nugraha',
            'jurusan'       => 'Audio Video 3',
            'email'         => 'leo.restu@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118128,
            'kelas_id'      => 9,
            'name'          => 'Ryan Hidayat',
            'jurusan'       => 'Audio Video 3',
            'email'         => 'hidayatriyan@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118129,
            'kelas_id'      => 9,
            'name'          => 'Tansyah Aditya Irwansyah',
            'jurusan'       => 'Audio Video 3',
            'email'         => 't.ansyah@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        //AV 4
        User::create([
            'nis'           => 1920118130,
            'kelas_id'      => 10,
            'name'          => 'Cesar De Ramalah',
            'jurusan'       => 'Audio Video 4',
            'email'         => 'decesar@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118131,
            'kelas_id'      => 10,
            'name'          => 'Isna Rahma Aini',
            'jurusan'       => 'Audio Video 4',
            'email'         => 'isnaaini@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118132,
            'kelas_id'      => 10,
            'name'          => 'Muhammad Akila Zata',
            'jurusan'       => 'Audio Video 4',
            'email'         => 'zata@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118133,
            'kelas_id'      => 10,
            'name'          => 'Rafael Sebastian',
            'jurusan'       => 'Audio Video 4',
            'email'         => 'sebastian.r@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118134,
            'kelas_id'      => 10,
            'name'          => 'Zamzam Nur Jamil',
            'jurusan'       => 'Audio Video 4',
            'email'         => 'zamzam@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);

        // Teknik Instalasi Tenaga Listrik
        // TITL 1
        User::create([
            'nis'           => 1920118135,
            'kelas_id'      => 11,
            'name'          => 'Ananta Putra pratama Arieta',
            'jurusan'       => 'Teknik Instalasi Tenaga Listrik 1',
            'email'         => 'anantata@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118136,
            'kelas_id'      => 11,
            'name'          => 'Fajar Purnama',
            'jurusan'       => 'Teknik Instalasi Tenaga Listrik 1',
            'email'         => 'purnamajar@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118137,
            'kelas_id'      => 11,
            'name'          => 'Gunawan Hikmah',
            'jurusan'       => 'Teknik Instalasi Tenaga Listrik 1',
            'email'         => 'gunawan.h@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118138,
            'kelas_id'      => 11,
            'name'          => 'Irfan Rahman Aprianto',
            'jurusan'       => 'Teknik Instalasi Tenaga Listrik 1',
            'email'         => 'irfanrahman@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118139,
            'kelas_id'      => 11,
            'name'          => 'Nazal Rizky Nahari',
            'jurusan'       => 'Teknik Instalasi Tenaga Listrik 1',
            'email'         => 'nazakhari@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        // TITL 2
        User::create([
            'nis'           => 1920118140,
            'kelas_id'      => 12,
            'name'          => 'Bima Andriansyah',
            'jurusan'       => 'Teknik Instalasi Tenaga Listrik 2',
            'email'         => 'bima.a@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118141,
            'kelas_id'      => 12,
            'name'          => 'Ghifari Jihad Rabbani',
            'jurusan'       => 'Teknik Instalasi Tenaga Listrik 2',
            'email'         => 'jihadrr@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118142,
            'kelas_id'      => 12,
            'name'          => 'Jaya Rukman',
            'jurusan'       => 'Teknik Instalasi Tenaga Listrik 2',
            'email'         => 'j.rukman@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118143,
            'kelas_id'      => 12,
            'name'          => 'Rehan Saputra',
            'jurusan'       => 'Teknik Instalasi Tenaga Listrik 2',
            'email'         => 'rehans@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118144,
            'kelas_id'      => 12,
            'name'          => 'Rizal Khoiri',
            'jurusan'       => 'Teknik Instalasi Tenaga Listrik 2',
            'email'         => 'r.khoiri@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);

        // Teknik Otomasi Industri
        // TOI 1
        User::create([
            'nis'           => 1920118145,
            'kelas_id'      => 13,
            'name'          => 'Difa Dzamallaqi',
            'jurusan'       => 'Teknik Otomasi Industri 1',
            'email'         => 'dzamallaqi@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118146,
            'kelas_id'      => 13,
            'name'          => 'Ivan Panca Ramadhan',
            'jurusan'       => 'Teknik Otomasi Industri 1',
            'email'         => 'panca.r@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118147,
            'kelas_id'      => 13,
            'name'          => 'Riffa Farhannudin',
            'jurusan'       => 'Teknik Otomasi Industri 1',
            'email'         => 'riffaf@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118148,
            'kelas_id'      => 13,
            'name'          => 'Vidal Fadlianto',
            'jurusan'       => 'Teknik Otomasi Industri 1',
            'email'         => 'vidalfadli@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118149,
            'kelas_id'      => 13,
            'name'          => 'Zaugara Saefulanam',
            'jurusan'       => 'Teknik Otomasi Industri 1',
            'email'         => 'zaugara@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        // TOI 2
        User::create([
            'nis'           => 1920118150,
            'kelas_id'      => 14,
            'name'          => 'Aldi Setiawan',
            'jurusan'       => 'Teknik Otomasi Industri 2',
            'email'         => 'aldiseti@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118151,
            'kelas_id'      => 14,
            'name'          => 'Maskun Sadikin',
            'jurusan'       => 'Teknik Otomasi Industri 2',
            'email'         => 'sadikinnn@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118152,
            'kelas_id'      => 14,
            'name'          => 'Radi Saputra',
            'jurusan'       => 'Teknik Otomasi Industri 2',
            'email'         => 'radi.s@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118153,
            'kelas_id'      => 14,
            'name'          => 'Teuku Rafi Andika',
            'jurusan'       => 'Teknik Otomasi Industri 2',
            'email'         => 'teukurafi@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
        User::create([
            'nis'           => 1920118154,
            'kelas_id'      => 14,
            'name'          => 'Yogi Mukarom',
            'jurusan'       => 'Teknik Otomasi Industri 2',
            'email'         => 'yogimukarom@gmail.com',
            'avatar'        => 'profile.png',
            'password'      => bcrypt('123456'),
            'is_admin'      => true,
            'created_at'    => date('d M Y')
        ]);
    }
}
