<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      // Get the admin role ID
      $SuperadminRole = Role::where('name', 'SUPERADMIN ')->first();

      // Create an admin user and assign the role ID
      User::create([
          'name' => 'SuperAdmin User',
          'email' => 'superadmin@example.com',
          'password' => Hash::make('password123'),
          'role_id' => $SuperadminRole->id,  // Use role_id here
      ]);
    }
}
