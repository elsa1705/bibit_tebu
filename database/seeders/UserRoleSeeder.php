<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::updateOrCreate([
            'email' => 'admin@example.com',
        ], [
            'name' => 'Admin User',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        \App\Models\User::updateOrCreate([
            'email' => 'user@example.com',
        ], [
            'name' => 'Regular User',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);
    }
}
