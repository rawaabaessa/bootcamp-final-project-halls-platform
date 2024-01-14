<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Qaah\Duration;

class DurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $durations = [
            [
                'from' => '09:00:00',
                'to' => '12:00:00',
                'facility_id' => 1,
            ],
            [
                'from' => '14:00:00',
                'to' => '17:00:00',
                'facility_id' => 1,
            ],
            [
                'from' => '09:00:00',
                'to' => '12:00:00',
                'facility_id' => 2,
            ],
            [
                'from' => '14:00:00',
                'to' => '17:00:00',
                'facility_id' => 2,
            ],
            [
                'from' => '09:00:00',
                'to' => '12:00:00',
                'facility_id' => 3,
            ],
            [
                'from' => '14:00:00',
                'to' => '17:00:00',
                'facility_id' => 3,
            ],
            
            // Define more data as needed
        ];

        // Insert the data into the durations table
        Duration::insert($durations);
    }
}
