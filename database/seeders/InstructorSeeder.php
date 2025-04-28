<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;  // Make sure to import Role model
use Illuminate\Support\Facades\Hash;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      // Get the admin role ID
      $InstructorRole = Role::where('name', 'INSTRUCTOR ')->first();

      // Create an admin user and assign the role ID
      User::create([
          'name' => 'Instructor User',
          'email' => 'instructor@example.com',
          'password' => Hash::make('password123'),
          'role_id' => $InstructorRole->id,  // Use role_id here
      ]);
    }
}
