<?php

namespace Database\Seeders;

use App\Models\Trip;
use App\Models\User;
use App\Models\Review;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeeder extends Seeder
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
               'rating' => 2,
               'review_date' => '2023-03-04',
            ],
            [
                'rating' => 2,
                'review_date' => '2023-03-04',
             ],
             [
                'rating' => 2,
                'review_date' => '2023-03-04',
             ],
             [
                'rating' => 2,
                'review_date' => '2023-03-04',
             ]
        ];
        $users=[];
        foreach(User::get() as $key => $row){
            $users[$key]=$row->id;
           }

       foreach($trips as $key => $trip){

           if (isset($arr[$key])) { // Check if the index exists in $arr
               Review::create([
                   'rating' => $arr[$key]['rating'],
                   'review_date' => $arr[$key]['review_date'],
                   'trip_id' => $trip->id,
                   'user_id' =>$users[$key],

               ]);
           }
       }
    }
}
