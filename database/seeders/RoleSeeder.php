<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vérifie si le rôle existe avant de le créer
        if (!Role::where('name', 'admin')->exists()) {
            $adminRole = Role::create(['name' => 'admin']);
        } else {
            $adminRole = Role::where('name', 'admin')->first();
        }

        if (!Role::where('name', 'user')->exists()) {
            $userRole = Role::create(['name' => 'user']);
        }

        // Liste des permissions à créer
        $permissions = [
            'manage users',
            'edit posts',
            'delete posts',
        ];

        foreach ($permissions as $permission) {
            if (!Permission::where('name', $permission)->exists()) {
                Permission::create(['name' => $permission]);
            }
        }

        // Associer les permissions au rôle admin
        $adminRole->syncPermissions($permissions);
    }
}
