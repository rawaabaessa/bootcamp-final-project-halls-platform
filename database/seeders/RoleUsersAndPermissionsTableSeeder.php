<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account\User;
use App\Models\Account\Role;
use App\Models\Account\Permission;

class RoleUsersAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Assign permissions to roles
        $superadminPermissions = [
            'access-dashboard',
            'edit-own-content',
            'add-user',
            'delete-user',
            'block-facility',
            'reject-request',
            'accept-request'
            // Add more permissions for the admin role
        ];

        $adminPermissions = [
            'access-dashboard',
            'edit-own-content',
            'add-user',
            'delete-user',
            'add-hall',
            'block-hall',
            'edit-hall',
        ];
        $receptionPermissions = [
            'access-dashboard',
            'add-reservation',
            'confirm-reservation',
            'reject-reservation',
            'edit-own-content',
        ];
        $contentadminPermissions = [
            'access-dashboard',
            'edit-own-content',
            'edit-facility-content',
        ];
        $customerPermissions = [
            'access-dashboard',
            'edit-own-content',
            'cancel-reservation',
            'add-reservation'
            // Add permissions for the user role
        ];
        for ($i=0; $i < sizeof($customerPermissions) ; $i++) { 
            $permissionName = $customerPermissions[$i];
            $permission = Permission::where('name', $permissionName)->first();
            $permission->roles()->attach(Role::where('name', 'customer')->first()->id);
            $permission->save();
        }

        for ($i=0; $i < sizeof($contentadminPermissions) ; $i++) { 
            $permissionName = $contentadminPermissions[$i];
            $permission = Permission::where('name', $permissionName)->first();
            $permission->roles()->attach(Role::where('name', 'content-admin')->first()->id);
            $permission->save();
        }
        for ($i=0; $i < sizeof($receptionPermissions) ; $i++) { 
            $permissionName = $receptionPermissions[$i];
            $permission = Permission::where('name', $permissionName)->first();
            $permission->roles()->attach(Role::where('name', 'reception')->first()->id);
            $permission->save();
        }
        for ($i=0; $i < sizeof($adminPermissions) ; $i++) { 
            $permissionName = $adminPermissions[$i];
            $permission = Permission::where('name', $permissionName)->first();
            $permission->roles()->attach(Role::where('name', 'admin')->first()->id);
            $permission->save();
        }
        for ($i=0; $i < sizeof($superadminPermissions) ; $i++) { 
            $permissionName = $superadminPermissions[$i];
            $permission = Permission::where('name', $permissionName)->first();
            $permission->roles()->attach(Role::where('name', 'super-admin')->first()->id);
            $permission->save();
        }
        // $adminRole = Role::where('name', 'admin')->first();
        // $adminRole->permissions()->attach($this->getPermissionIds($adminPermissions));
        // $adminRole->save();

        // $userRole = Role::where('name', 'user')->first();
        // $userRole->permissions()->attach($this->getPermissionIds($userPermissions));
        // $userRole->save();

        // Assign roles to the permission
        

        //
        // Assign roles to the user
        $email = 'superadmin@example.com';
        $user = User::where('email', $email)->first();
        $user->roles()->attach(Role::where('name', 'super-admin')->first()->id);
        $user->save();

        $email = 'admin@example.com';
        $user = User::where('email', $email)->first();
        $user->roles()->attach(Role::where('name', 'admin')->first()->id);
        $user->save();

        $email = 'samia@example.com';
        $user = User::where('email', $email)->first();
        $user->roles()->attach(Role::where('name', 'customer')->first()->id);
        $user->save();
    }

    private function getPermissionIds(array $permissionNames)
    {
        return Permission::whereIn('name', $permissionNames)->pluck('id');
    }
}
