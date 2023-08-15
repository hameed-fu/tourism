<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Hotel;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = City::all();
        $arr = [
            [
                'hotel_name' => 'Malam Jaba Hotel',
                'email'   => 'Malam@gmail.com',
                'no_room' =>'50',
                'hotel_img'=>'malam.png',
                'description'=>'Kumrat Valley Hotels Prices are Rs.5000 to Rs.10000 per night.',
            ],
            [
                'hotel_name' => 'Mom Toch Hotel',
                'email'   => 'Mom@gmail.com',
                'no_room' =>'40',
                'hotel_img'=>'Mom.png',
                'description'=>'Kumrat Valley Hotels Prices are Rs.3000 to Rs.8000 per night.',
            ],
            [
                'hotel_name' => 'Seerena Hotel',
                'no_room' =>'60',
                'email'   => 'Seerena@gmail.com',
                'hotel_img'=>'Seerena.png',
                'description'=>'Kumrat Valley Hotels Prices are Rs.8000 to Rs.16000 per night.',
            ],
            [
                'hotel_name' => 'Fc Hotel',
                'no_room' =>'20',
                'email'   => 'Fc@gmail.com',
                'hotel_img'=>'Fc.png',
                'description'=>'Kumrat Valley Hotels Prices are Rs.3000 to Rs.7000 per night.',
            ]
        ];
        foreach ($cities as $key => $city) {

            if (isset($arr[$key])) { // Check if the index exists in $arr
                Hotel::create([
                    'hotel_name' => $arr[$key]['hotel_name'],
                    'no_room' => $arr[$key]['no_room'],
                    'email'   => $arr[$key]['email'],
                    'description' => $arr[$key]['description'],
                    'hotel_img' => $arr[$key]['hotel_img'],
                    'city_id' => $city->id,
                ]);
            } 
        }
    }
}
