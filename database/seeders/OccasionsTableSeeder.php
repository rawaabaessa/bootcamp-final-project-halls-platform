<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Qaah\Occasion;

class OccasionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $occasions = [
            [
                'name' => 'زفاف',
                'facility_id' => 1,
            ],
            [
                'name' => 'تخرج',
                'facility_id' => 1,
            ],
            [
                'name' => 'زفاف',
                'facility_id' => 2,
            ],
            [
                'name' => 'تخرج',
                'facility_id' => 2,
            ],
            [
                'name' => 'زفاف',
                'facility_id' => 3,
            ],
            [
                'name' => 'تخرج',
                'facility_id' => 3,
            ],
            // Define more data as needed
        ];
        Occasion::insert($occasions);
    }
}
