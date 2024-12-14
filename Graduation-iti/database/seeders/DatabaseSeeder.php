<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AdminUserSeeder; // Import the AdminUserSeeder

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the AdminUserSeeder to seed admin users
        $this->call(AdminUserSeeder::class);

        // Other seeding operations
        \App\Models\EmployeePost::factory(20)->create();
    }
}
