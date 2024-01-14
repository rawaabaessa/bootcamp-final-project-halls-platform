<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUsersAndPermissionsTableSeeder::class);
        $this->call(GovernoratesTableSeeder::class);
        $this->call(DirectoratesTableSeeder::class);
        $this->call(FacilitiesTableSeeder::class);
        $this->call(HallsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(DurationsTableSeeder::class);
        $this->call(OfferHallsTableSeeder::class);
        $this->call(OccasionsTableSeeder::class);
    }
}
