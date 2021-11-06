<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin_arif',
            'email' => 'admin@yahoo.com',
            'avatar' => 'arif.jpg',
            'password' => bcrypt('12345q'),
            'is_admin' => true
        ]); 
    }
}
