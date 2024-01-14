<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['name' => 'unconfirmed', 'title' => 'غير مؤكد'],
            ['name' => 'under_review', 'title' => 'قيد المراجعة'],
            ['name' => 'confirmed', 'title' => 'مؤكد'],
            ['name' => 'canceled', 'title' => 'ملغي'],
        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
}
