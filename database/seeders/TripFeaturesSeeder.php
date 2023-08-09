<?php

namespace Database\Seeders;

use App\Models\Trip;
use App\Models\TripFeature;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TripFeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trips = Trip::all();
        $arr = [
            [
                'day' => '1',
                'itenary' => 'Islamabad to ranan',
                'nightstay' => 'Naran',
                'spot' => 'Kiwai, Kaghan, Naran Bazar',

            ],
            [
                'day' => '2',
                'itenary' => 'INaran to Lalazarslamabad to ranan',
                'nightstay' => 'Naran',
                'spot' => 'Jhalkad and Lulu sir Lake, LalaZar',
            ],
            [
                'day' => '3',
                'itenary' => 'Back to Islamabad',
                'nightstay' => 'islamabad',
                'spot' => 'Kiwai, Kaghan',
            ],
            [
                'day' => '4',
                'itenary' => 'Shakarpya',
                'nightstay' => 'islamabad',
                'spot' => 'Islamabad famous places',
            ]
        ]; 
        foreach($trips as $key => $trip){

            if (isset($arr[$key])) { // Check if the index exists in $arr
                TripFeature::create([
                    'day' => $arr[$key]['day'],
                    'itenary' => $arr[$key]['itenary'],
                    'nightstay'   => $arr[$key]['nightstay'],
                    'spot'   => $arr[$key]['spot'],
                    'trip_id' => $trip->id,
                ]);
            }
        }

    }
}
