<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Account\Role;
use App\Models\Account\Permission;
use App\Models\Account\User;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        Role::create([
            'name' => 'super-admin',
            'label' => 'مدير المنصة',
        ]);

        Role::create([
            'name' => 'admin',
            'label' => 'مدير القاعة',
        ]);

        Role::create([
            'name' => 'customer',
            'label' => 'العميل',
        ]);

        Role::create([
            'name' => 'content-admin',
            'label' => 'مسؤول المحتوى',
        ]);

        Role::create([
            'name' => 'reception',
            'label' => 'الاستقبال',
        ]);
        // Create additional roles as needed
        // ...


    }
}