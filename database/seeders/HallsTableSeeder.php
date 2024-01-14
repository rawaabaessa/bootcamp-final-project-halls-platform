<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Qaah\Hall;

class HallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $halls = [
            [
                'name' => 'hall1',
                'title' => 'القاعة الملكية',
                'discription' => 'Description for Hall 1',
                'people_count' => 100,
                'area' => 1085,
                'facility_id' => 1,
            ],
            [
                'name' => 'hall2',
                'title' => 'قاعة الاميرات',
                'description' => 'Description for Hall 2',
                'people_count' => 150,
                'area' => 1025,
                'facility_id' => 1,
            ],
            [
                'name' => 'hall3',
                'title' => 'القاعة الكبرى',
                'description' => 'Description for Hall 1',
                'people_count' => 100,
                'area' => 1085,
                'facility_id' => 2,
            ],
            [
                'name' => 'hall4',
                'title' => 'القاعة الصغرى',
                'description' => 'Description for Hall 2',
                'people_count' => 150,
                'area' => 1025,
                'facility_id' => 2,
            ],
            [
                'name' => 'hall5',
                'title' => 'قاعة الكبرى',
                'description' => 'Description for Hall 2',
                'people_count' => 150,
                'area' => 1025,
                'facility_id' => 3,
            ],
            // Define more data as needed
        ];

        // Insert the data into the halls table
        Hall::insert($halls);
    }
}
