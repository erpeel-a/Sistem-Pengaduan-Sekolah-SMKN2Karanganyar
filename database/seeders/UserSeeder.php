<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
            'role' => 'admin',
            'nomor_induk' => 002011211
        ]);

        User::create([
            'name' => 'petugas',
            'email' => 'petugas@user.com',
            'password' => bcrypt('petugas123'),
            'role' => 'petugas',
            'nomor_induk' => 002311211
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('user123'),
            'role' => 'user',
            'nomor_induk' => 002211211
        ]);
    }
}
