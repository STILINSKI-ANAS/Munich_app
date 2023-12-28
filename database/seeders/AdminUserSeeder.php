<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin User
        User::create([
            'name' => 'Admin',
            'email' => 'anasfake18@gmail.com',
            'password' => bcrypt('12345678'),
            'role_as' => 1,
        ]);

        // Create Normal User
        User::create([
            'name' => 'ABDELLATIF',
            'email' => 'abdelatiflaghjaj@gmail.com',
            'password' => bcrypt('12345678'),
            'role_as' => 0,
        ]);
    }
}
