<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $provinces = Province::all();
        $arr = [
            [
                'city_name' => 'Swat',
                'city_img' =>'Swat.png',
            ],
            [
                'city_name' => 'Murree',
                'city_img' =>'Murree.png',
            ],
            [
                'city_name' => 'Islamabad',
                'city_img' =>'Islamabad.png',
            ],
            [
                'city_name' => 'Mardan',
                'city_img' =>'Mardan.png',
            ]
        ];

        foreach ($provinces as $key => $province) {
            // if($key >= 5){
            //     break;
            // }
            if (isset($arr[$key])) {
                City::create([
                    'city_name' => $arr[$key]['city_name'],
                    'city_img' =>$arr[$key]['city_img'],
                    'province_id' => $province->id,
                ]);
            }
        }

    }
}
