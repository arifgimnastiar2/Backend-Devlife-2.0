<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GuruTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\MatpelTableSeeder;
use Database\Seeders\AbsensiTableSeeder;
use Database\Seeders\PermissionsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UsersTableSeeder::class,
            GuruTableSeeder::class,
            MatpelTableSeeder::class,
            AbsensiTableSeeder::class,
            PermissionsTableSeeder::class,
            KelasTableSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
