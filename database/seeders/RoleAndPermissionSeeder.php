<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // Create permissions
        Permission::create(['name' => 'view items']);
        Permission::create(['name' => 'create items']);
        Permission::create(['name' => 'edit items']);
        Permission::create(['name' => 'delete items']);

        // Create roles and assign permissions
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo(['view items', 'create items', 'edit items', 'delete items']);

        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo(['view items']);

        // Create a default admin user
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'), // Change this to a strong password in production
            ]
        );
        $adminUser->assignRole('admin');

        // Create a default regular user
        $regularUser = User::firstOrCreate(
            ['email' => 'user@example.com'],
            [
                'name' => 'Regular User',
                'password' => Hash::make('password'), // Change this to a strong password in production
            ]
        );
        $regularUser->assignRole('user');
    }
}
