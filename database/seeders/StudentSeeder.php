<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;  // Make sure to import Role model
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
      // Get the admin role ID
      $StudentRole = Role::where('name', 'STUDENT ')->first();

      // Create an admin user and assign the role ID
      User::create([
          'name' => 'Student User',
          'email' => 'student@example.com',
          'password' => Hash::make('password123'),
          'role_id' => $StudentRole->id,  // Use role_id here
      ]);
    }
}
