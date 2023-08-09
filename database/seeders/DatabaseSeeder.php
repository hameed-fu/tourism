<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TripFeature;
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
         $this->call([
            TripTypeSeeder::class,
            RoomTypeSeeder::class,
            UserSeeder::class,
            ProvinceSeeder::class,
            CitySeeder::class,
            LocationSeeder::class,
            HotelSeeder::class,
            TransportSeeder::class,
            TripSeeder::class,
            ReviewSeeder::class,
            RoomSeeder::class,
            BookingSeeder::class,
            TripFeaturesSeeder::class,
         ]);
    }
}
