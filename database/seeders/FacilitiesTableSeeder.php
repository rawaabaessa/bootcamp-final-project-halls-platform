<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Qaah\Facility;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facility::create([
            'name' => 'remas',
            'title' => 'قاعة ريماس للمناسبات',
            'email' => 'facility1@example.com',
            'address' => 'شارع يونمي',
            'logo' => null,
            'license' => 'License 1',
            'user_id' => 2,
            'directorate_id' => 1,
            'phone' => 123456789,
            'identity_NO' => 1234567890,
            'currency' => 'USA',
            'state' => 'complete',
        ]);
        Facility::create([
            'name' => 'meral',
            'title' => 'قاعة ميرال للمناسبات',
            'email' => 'facility2@example.com',
            'address' => 'الشرج',
            'logo' => null,
            'license' => 'License 1',
            'user_id' => 6,
            'directorate_id' => 1,
            'phone' => 123456788,
            'identity_NO' => 1234567897,
            'currency' => 'USA',
            'state' => 'complete',
        ]);
        Facility::create([
            'name' => 'tahany',
            'title' => 'قاعة التهاني للمناسبات',
            'email' => 'facility3@example.com',
            'address' => 'فوة',
            'logo' => null,
            'license' => 'License 1',
            'user_id' => 7,
            'directorate_id' => 1,
            'phone' => 123456788,
            'identity_NO' => 1234567897,
            'currency' => 'USA',
            'state' => 'complete',
        ]);
    }
}
