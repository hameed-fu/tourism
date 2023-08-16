<?php

namespace Database\Seeders;

use App\Models\Trip;
use App\Models\User;
use App\Models\Review;
use App\Models\Booking;
use App\Models\RoomType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $trips = Trip::all();
        $arr=[
             [
                 'start_date' => '2023-04-09',
                 'end_date' => '2023-04-15',
                 
             ],
             [
                'start_date' => '2023-03-09',
                'end_date' => '2023-03-15',
                
            ],
            [
                'start_date' => '2023-02-09',
                'end_date' => '2023-02-15',
                
            ],
            [
                'start_date' => '2023-05-09',
                'end_date' => '2023-05-15',
                
            ],
        ];

        $users=[];
        foreach(User::get() as $key => $row){
            $users[$key]=$row->id;
           }

       foreach($trips as $key => $trip){

           if (isset($arr[$key])) { // Check if the index exists in $arr
               Booking::create([
                   'start_date' => $arr[$key]['start_date'],
                   'end_date' => $arr[$key]['end_date'],
                   'trip_id' => $trip->id,
                   'user_id' =>$users[$key],

               ]);
           }
       }
    }
}
