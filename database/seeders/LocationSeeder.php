<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Hotel;
use App\Models\Location;
use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $cities = City::all();
        $arr = [
            [
                'location_name' => 'Malam Jaba',
                'location_description'=>'Cool place for summar season',
                'location_img'=>'malam jaba.png',
            ],
            [
                'location_name' => 'Kumrat',
                'location_description'=>'Cool place for summar season in winter snow fall',
                'location_img'=>'kumrat.png',
            ],
            [
                'location_name' => 'Shakarparya',
                'location_description'=>'One of the best beautiful place in pakistan capital',
                'location_img'=>'shakar.png',
            ],
            [
                'location_name' => 'Shekhmaltoon',
                'location_description'=>'One of the best place in mardan for cricket',
                'location_img'=>'maltoon.png',
            ]
        ];

        foreach ($cities as $key => $city) {

            if (isset($arr[$key])) { // Check if the index exists in $arr
                Location::create([
                    'location_name' => $arr[$key]['location_name'],
                    'location_description' => $arr[$key]['location_description'],
                    'location_img' => $arr[$key]['location_img'],
                    'city_id' => $city->id,
                ]);}
            // if($key >= 5){
            //     // dd($city->id);
            // }
            
            // Location::create([
            //     'location_name' => $arr[$key]['location_name'],
            //     'location_description'=>$arr[$key]['location_description'],
            //     'location_img'  =>$arr[$key]['location_img'],
            //     'city_id' => $city->id,
            // ]);
        }
    }
}
