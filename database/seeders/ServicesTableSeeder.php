<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Qaah\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'صالة طعام',
            'facility_id' => 1,
            'is_free' => false,
            'price' => 1000,
        ]);
        Service::create([
            'name' => 'حارسة',
            'facility_id' => 1,
            'is_free' => true,
            'price' => 0,
        ]);
        Service::create([
            'name' => 'مفتشة جوالات',
            'facility_id' => 1,
            'is_free' => true,
            'price' => 0,
        ]);
        Service::create([
            'name' => 'بروجكتر',
            'facility_id' => 1,
            'is_free' => true,
            'price' => 0,
        ]);
        Service::create([
            'name' => 'جهاز تتبع',
            'facility_id' => 1,
            'is_free' => true,
            'price' => 0,
        ]);
        Service::create([
            'name' => 'فريق تنظيم',
            'facility_id' => 1,
            'is_free' => false,
            'price' => 10.99,
        ]);
        

        Service::create([
            'name' => 'صالة طعام',
            'facility_id' => 2,
            'is_free' => false,
            'price' => 1000,
        ]);
        Service::create([
            'name' => 'حارسة',
            'facility_id' => 2,
            'is_free' => true,
            'price' => 0,
        ]);
        Service::create([
            'name' => 'مفتشة جوالات',
            'facility_id' => 2,
            'is_free' => true,
            'price' => 0,
        ]);
        Service::create([
            'name' => 'بروجكتر',
            'facility_id' => 2,
            'is_free' => true,
            'price' => 0,
        ]);
        Service::create([
            'name' => 'جهاز تتبع',
            'facility_id' => 2,
            'is_free' => true,
            'price' => 0,
        ]);
        Service::create([
            'name' => 'فريق تنظيم',
            'facility_id' => 2,
            'is_free' => false,
            'price' => 10.99,
        ]);
        Service::create([
            'name' => 'صالة طعام',
            'facility_id' => 3,
            'is_free' => false,
            'price' => 1000,
        ]);
        Service::create([
            'name' => 'حارسة',
            'facility_id' => 3,
            'is_free' => true,
            'price' => 0,
        ]);
        Service::create([
            'name' => 'مفتشة جوالات',
            'facility_id' => 3,
            'is_free' => true,
            'price' => 0,
        ]);
        Service::create([
            'name' => 'بروجكتر',
            'facility_id' => 3,
            'is_free' => true,
            'price' => 0,
        ]);
        Service::create([
            'name' => 'جهاز تتبع',
            'facility_id' => 3,
            'is_free' => true,
            'price' => 0,
        ]);
        Service::create([
            'name' => 'فريق تنظيم',
            'facility_id' => 3,
            'is_free' => false,
            'price' => 10.99,
        ]);
    }
}
