<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Account\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        // Create permissions
        Permission::create([
            'name' => 'access-dashboard',
            'label' => 'الوصول للوحة التحكم',
        ]);

        Permission::create([
            'name' => 'accept-request',
            'label' => 'قبول طلبات الانضمام',
        ]);

        Permission::create([
            'name' => 'reject-request',
            'label' => 'رفض طلبات الانضمام',
        ]);

        Permission::create([
            'name' => 'edit-own-content',
            'label' => 'تعديل المحتوى',
        ]);

        Permission::create([
            'name' => 'edit-facility-content',
            'label' => 'تعديل محتوى المنشأة',
        ]);

        Permission::create([
            'name' => 'add-user',
            'label' => 'اضافة مستخدم',
        ]);

        // Permission::create([
        //     'name' => 'edit-user',
        //     'label' => 'تعديل مستخدم',
        // ]);

        Permission::create([
            'name' => 'delete-user',
            'label' => 'حذف مستخدم',
        ]);

        Permission::create([
            'name' => 'block-facility',
            'label' => 'حظر منشأة',
        ]);

        Permission::create([
            'name' => 'add-hall',
            'label' => 'اضافة قاعة',
        ]);

        Permission::create([
            'name' => 'block-hall',
            'label' => 'حظر قاعة',
        ]);

        Permission::create([
            'name' => 'edit-hall',
            'label' => 'تعديل قاعة',
        ]);

        Permission::create([
            'name' => 'add-reservation',
            'label' => 'اضافة حجز',
        ]);

        Permission::create([
            'name' => 'cancel-reservation',
            'label' => 'الغاء حجز',
        ]);

        Permission::create([
            'name' => 'reject-reservation',
            'label' => 'رفض حجز',
        ]);

        Permission::create([
            'name' => 'confirm-reservation',
            'label' => 'تاكيد حجز',
        ]);
        
        // Create additional permissions as needed
        // ...
    }
}
