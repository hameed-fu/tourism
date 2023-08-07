<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                'province_name' => 'KPK',
                'province_img' =>'photo.png',
            ],
            [
                'province_name' => 'Punjab',
                'province_img' =>'photo.jpg',
            ],
            [
                'province_name' => 'Sindh',
                'province_img' =>'photo.jpeg',
            ],
            [
                'province_name' => 'Balochistan',
                'province_img' =>'photo.png',
            ]
        ];
        foreach($arr as $row){
            Province::create($row);
        }
    }
}
