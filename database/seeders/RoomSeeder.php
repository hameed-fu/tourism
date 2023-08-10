<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\Hotel;
use App\Models\RoomType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotels = Hotel::all();
        $roomtypes = RoomType::all();
       $arr=[
        [
            'room_no' => 1,
            'occupancy' => 2,
            'room_description' => 'Cool and good',
            'availability' => 'yes',

        ],
        [
            'room_no' => 2,
            'occupancy' => 4,
            'room_description' => 'Cool',
            'availability' => 'no',
            
        ],
        [
            'room_no' => 3,
            'occupancy' => 2,
            'room_description' => 'good',
            'availability' => 'no',
            
        ],
        [
            'room_no' => 4,
            'occupancy' => 2,
            'room_description' => 'Cool and good',
            'availability' => 'yes',
            
        ],
       ];

       $hotels=[];
        foreach(Hotel::get() as $key => $row){
            $hotels[$key]=$row->id;
           }

       foreach($roomtypes as $key => $roomtype){

           if (isset($arr[$key])) { // Check if the index exists in $arr
               Room::create([
                   'room_no' => $arr[$key]['room_no'],
                   'occupancy' => $arr[$key]['occupancy'],
                   'room_description' => $arr[$key]['room_description'],
                   'availability' => $arr[$key]['availability'],
                   'roomtype_id' => $roomtype->id,
                   'hotel_id' =>$hotels[$key],

               ]);
           }
       }
    }
}
