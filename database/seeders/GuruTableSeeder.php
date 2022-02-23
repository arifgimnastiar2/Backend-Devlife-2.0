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
            'nip'                   => 1920118010,
            'nama_guru'             => 'Isnaini Marifatun S.Sos.I.',
            'kode_guru'             => 'ISN',
            'kompetensi_keahlian'   => 'Pendidikan Agama dan Budi Pekerti',
            'email'                 => 'isnaini@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118011,
            'nama_guru'             => 'Mochamad Fajar Firmansyah',
            'kode_guru'             => 'MHF',
            'kompetensi_keahlian'   => 'Pendidikan Pancasila dan Kewarganegaraan',
            'email'                 => 'm.fajar@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118012,
            'nama_guru'             => 'Nurulhidayat Rachim Diefa',
            'kode_guru'             => 'NRH',
            'kompetensi_keahlian'   => 'Bahasa Indonesia',
            'email'                 => 'nurul.d@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118013,
            'nama_guru'             => 'Taufik Rahman',
            'kode_guru'             => 'TUR',
            'kompetensi_keahlian'   => 'Matematika',
            'email'                 => 'taufik@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118014,
            'nama_guru'             => 'Mira Munawaroh',
            'kode_guru'             => 'MAM',
            'kompetensi_keahlian'   => 'Sejarah Indonesia',
            'email'                 => 'miram@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118014,
            'nama_guru'             => 'Neneng W.Fitriyah, S.Pd.',
            'kode_guru'             => 'NNF',
            'kompetensi_keahlian'   => 'Bahasa Inggris dan Bahasa Asing Lainnya',
            'email'                 => 'neneg@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118015,
            'nama_guru'             => 'Cucu Nursutani, S.Pd.',
            'kode_guru'             => 'CUN',
            'kompetensi_keahlian'   => 'Seni Budaya',
            'email'                 => 'cucu.nur@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118016,
            'nama_guru'             => 'Drs. Enjang Sarifudin, M.Pd.',
            'kode_guru'             => 'EJS',
            'kompetensi_keahlian'   => 'Pendidikan Jasmani, Olahraga dan Kesehatan',
            'email'                 => 'enjang.s@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118017,
            'nama_guru'             => 'Annisa Meilia Prayoga',
            'kode_guru'             => 'ANN',
            'kompetensi_keahlian'   => 'Basa Sunda',
            'email'                 => 'nisa@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118018,
            'nama_guru'             => 'Selfa Amalia Rahmah',
            'kode_guru'             => 'SLA',
            'kompetensi_keahlian'   => 'Simulasi dan Komunikasi Digital',
            'email'                 => 'selfa@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118019,
            'nama_guru'             => 'Ine Agustina, S.T.',
            'kode_guru'             => 'TUR',
            'kompetensi_keahlian'   => 'Fisika',
            'email'                 => 'ine.a@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118020,
            'nama_guru'             => 'Dra. Kustini',
            'kode_guru'             => 'KSN',
            'kompetensi_keahlian'   => 'Kimia',
            'email'                 => 'kustini@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118021,
            'nama_guru'             => 'Muhammad Gilang Ramadhan, S.Pd.',
            'kode_guru'             => 'GLR',
            'kompetensi_keahlian'   => 'Komputer dan Jaringan Dasar',
            'email'                 => 'gilang@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118022,
            'nama_guru'             => 'Tyas Sawiji, S.Pd.',
            'kode_guru'             => 'TYJ',
            'kompetensi_keahlian'   => 'Komputer dan Jaringan Dasar',
            'email'                 => 't.sawiji@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118023,
            'nama_guru'             => 'Drs. Rizal Sapari',
            'kode_guru'             => 'RZS',
            'kompetensi_keahlian'   => 'Dasar Desain Grafis',
            'email'                 => 'r.sapari@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118024,
            'nama_guru'             => 'Drs. H. Dedi Sukmayadi',
            'kode_guru'             => 'DDS',
            'kompetensi_keahlian'   => 'Pendidikan Agama dan Budi Pekerti',
            'email'                 => 'dedi@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118025,
            'nama_guru'             => 'Alis Lisnawati',
            'kode_guru'             => 'ALL',
            'kompetensi_keahlian'   => 'Pendidikan Pancasil dan Kewarganegaraan',
            'email'                 => 'lisnawati@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118026,
            'nama_guru'             => 'Mochamaf Zafar Sidiq, S.Pd.',
            'kode_guru'             => 'ZFS',
            'kompetensi_keahlian'   => 'Bahasa Indonesia',
            'email'                 => 'zafar.s@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118027,
            'nama_guru'             => 'Ikin Sodikin',
            'kode_guru'             => 'ISN',
            'kompetensi_keahlian'   => 'Matematika',
            'email'                 => 'sodikin@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118028,
            'nama_guru'             => 'Fajar Dewi Ningsih, S.Pd.',
            'kode_guru'             => 'FDW',
            'kompetensi_keahlian'   => 'Bahasa Inggris dan Bahasa Asing Lainnya',
            'email'                 => 'f.d.ningsih@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118029,
            'nama_guru'             => 'Drs. Agus Suparman',
            'kode_guru'             => 'AGS',
            'kompetensi_keahlian'   => 'Pendidikan Jasmani, Olahraga dan Kesehatan',
            'email'                 => 'a.suparman@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118030,
            'nama_guru'             => 'Rizal Firdaus',
            'kode_guru'             => 'RZF',
            'kompetensi_keahlian'   => 'Basa Sunda',
            'email'                 => 'rizal@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118031,
            'nama_guru'             => 'Hana Zainab Mukarromah, S.T.',
            'kode_guru'             => 'HBM',
            'kompetensi_keahlian'   => 'Pemodelan Perangkat Lunak dan Pemograman Web dan Perangkat Bergerak',
            'email'                 => 'hana@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118031,
            'nama_guru'             => 'Rani Ratnaningsih, S.Pd.',
            'kode_guru'             => 'RRH',
            'kompetensi_keahlian'   => 'Pemodelan Perangkat Lunak dan Pemograman Berorientasi Obyek',
            'email'                 => 'ratna@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118032,
            'nama_guru'             => 'Moh. Ali Aljauhari, S.Kom.',
            'kode_guru'             => 'ALJ',
            'kompetensi_keahlian'   => 'Basis Data',
            'email'                 => 'ali.a@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118033,
            'nama_guru'             => 'Rina Pujiati, S.St.',
            'kode_guru'             => 'RPI',
            'kompetensi_keahlian'   => 'Basis Data',
            'email'                 => 'rina@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118034,
            'nama_guru'             => 'Lukmannul Hakim Firdaus',
            'kode_guru'             => 'LKH',
            'kompetensi_keahlian'   => 'Pemograman Berorientasi Obyek',
            'email'                 => 'l.hakim@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118035,
            'nama_guru'             => 'Ferry Stephanus Suwita, S.Kom.',
            'kode_guru'             => 'FYH',
            'kompetensi_keahlian'   => 'Pemrograman Web dan Perangkat Bergerak',
            'email'                 => 'ferry.s@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118036,
            'nama_guru'             => 'Arne Herliany, S.Si, M.Pd.',
            'kode_guru'             => 'AHY',
            'kompetensi_keahlian'   => 'Produk Kreatif dan Kewirausahaan dan Pemrograman Web dan Perangkat Bergerak',
            'email'                 => 'arne@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118037,
            'nama_guru'             => 'Rizky Amalia Eshi',
            'kode_guru'             => 'RZE',
            'kompetensi_keahlian'   => 'Bahasa Jepang',
            'email'                 => 'r.amalia@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118038,
            'nama_guru'             => 'Drs. Asep Mulyana, M.Ag.',
            'kode_guru'             => 'AMY',
            'kompetensi_keahlian'   => 'Pendidikan Agama dan Budi Pekerti',
            'email'                 => 'asep@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118039,
            'nama_guru'             => 'Dra. Rita Yuliati',
            'kode_guru'             => 'RYI',
            'kompetensi_keahlian'   => 'Bahasa Indonesia',
            'email'                 => 'rita@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118040,
            'nama_guru'             => 'Entin Supriatin, S.Pd.',
            'kode_guru'             => 'ESN',
            'kompetensi_keahlian'   => 'Matematika',
            'email'                 => 'entin@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118041,
            'nama_guru'             => 'Kusmoro Rusli, S.Pd.',
            'kode_guru'             => 'KRL',
            'kompetensi_keahlian'   => 'Basa Sunda',
            'email'                 => 'kusmoro@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118042,
            'nama_guru'             => 'Offy Sholehatun, M.Kom.',
            'kode_guru'             => 'OSN',
            'kompetensi_keahlian'   => 'Pemrograman Berorientasi Obyek',
            'email'                 => 'offy@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);

        Guru::create([
            'nip'                   => 1920118043,
            'nama_guru'             => 'Iwan Kurniawan',
            'kode_guru'             => 'IKW',
            'kompetensi_keahlian'   => 'Pendidikan Pancasil dan Kewarganegaraan',
            'email'                 => 'iwan.k@gmail.com',
            'password'              => bcrypt('123456'),
            'created_at'            => date('d M Y')
        ]);
    }
}
