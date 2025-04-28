<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;  // Make sure to import Role model
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Get the admin role ID
        $adminRole = Role::where('name', 'admin')->first();

        // Create an admin user and assign the role ID
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role_id' => $adminRole->id,  // Use role_id here
        ]);
    }
}
