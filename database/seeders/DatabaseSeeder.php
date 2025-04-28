<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            AdminUserSeeder::class,
            InstructorSeeder::class,
            StudentSeeder::class,
            SuperAdminSeeder::class, // Ensure this is included if needed
        ]);
    }
}
