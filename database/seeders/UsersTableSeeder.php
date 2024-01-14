<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Account\User;
use App\Models\Account\Role;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create a user with specific attributes
        User::create([
            'name' => 'روعة محمد باعيسى',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('123456'),
            'phone' => 739665833
        ]);

        User::create([
            'name' => 'فاطمة بكر بكران',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'),
            'phone' => 733582148
        ]);

        User::create([
            'name' => 'سامية محمد الشبيبي',
            'email' => 'samia@example.com',
            'password' => Hash::make('123456'),
            'phone' => 785214569
        ]);

        User::create([
            'name' => 'رغد العطاس',
            'email' => 'raghad@example.com',
            'password' => Hash::make('123456'),
            'phone' => 785214569
        ]);

        User::create([
            'name' => 'فاطمة الجهوري',
            'email' => 'fatima@example.com',
            'password' => Hash::make('123456'),
            'phone' => 785214569
        ]);

        User::create([
            'name' => 'خالد العطيشي',
            'email' => 'khaled@example.com',
            'password' => Hash::make('123456'),
            'phone' => 785214544
        ]);

        User::create([
            'name' => 'محمد احمد',
            'email' => 'mohammed@example.com',
            'password' => Hash::make('123456'),
            'phone' => 785214541
        ]);
        // Create additional users as needed
        // ...
    }
}
