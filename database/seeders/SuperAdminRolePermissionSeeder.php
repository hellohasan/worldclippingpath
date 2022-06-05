<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'     => 'Super Admin',
            'email'    => 'super-admin@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        $role = Role::create([
            'name' => 'Super Admin',
        ]);

        $permissions = [
            'role-list',
            'role-create',
            'role-store',
            'role-edit',
            'role-update',
            'role-delete',
            'permission-list',
            'permission-create',
            'permission-store',
            'permission-edit',
            'permission-update',
            'permission-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
            ]);
        }

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole('Super Admin');

    }
}
