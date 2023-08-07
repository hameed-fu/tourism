<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                'room_type' => 'special',

            ],
            [
                'room_type' => 'Sngle Bed',
            ],
            [
                'room_type' => 'Family Room',
            ],
            [
                'room_type' => 'Friends',
            ]
        ]; 
        foreach($arr as $row){
            RoomType::create($row);
        }
    }
}
