<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Qaah\OfferHall;

class OfferHallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offerHalls = [
            //first facility
            [
                'hall_id' => 1,
                'duration_id' => 1,
                'price' => 100.00,
            ],
            [
                'hall_id' => 1,
                'duration_id' => 2,
                'price' => 150.00,
            ],
            [
                'hall_id' => 2,
                'duration_id' => 1,
                'price' => 100.00,
            ],
            [
                'hall_id' => 2,
                'duration_id' => 2,
                'price' => 150.00,
            ],

            
            // Define more data as needed
        ];

        // Insert the data into the offer_halls table
        OfferHall::insert($offerHalls);
    }
}
