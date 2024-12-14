<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Adjust according to your User model's namespace

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Admin User',
            'email' => 'mehdi@admin.com',
            'password' => bcrypt('admin2003'), // Use a secure password
            'role' => 'admin',
        ]);
    }
}
