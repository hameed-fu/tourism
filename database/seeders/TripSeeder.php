<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Trip;
use App\Models\Hotel;
use App\Models\TripType;
use App\Models\Transport;
use App\Models\TripFeature;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = City::all();
        $triptypes = TripType::all();
        $tripfeatures=TripFeature::all();
        $arr = [
            [
                'trip_name' => 'College trip',
                'start_date' => '2023-02-12',
                'end_date' => '2023-02-12',
            ],
            [
                'trip_name' => 'Entertainment trip',
                'start_date' =>'2023-02-12',
                'end_date' =>'2023-02-12',
            ],
            [
                'trip_name' => 'Eid trip',
                'start_date' =>'2023-02-12',
                'end_date' =>'2023-02-12',
            ],
            [
                'trip_name' => 'Summar trip',
                'start_date' =>'2023-02-12',
                'end_date' =>'2023-02-12',
            ]
        ];
        $trip_types=[];
        foreach($triptypes as $key => $triptype){
             $trip_types[$key]=$triptype->id;
            }

        $trip_features=[];
            foreach($tripfeatures as $key => $triptypetripfeature){
                 $trip_features[$key]=$triptypetripfeature->id;
            }

            $transports=[];

        foreach(Transport::get() as $key => $row){
             $transports[$key]=$row->id;
            }

        foreach($cities as $key => $city){

            if (isset($arr[$key])) { // Check if the index exists in $arr
                Trip::create([
                    'trip_name' => $arr[$key]['trip_name'],
                    'start_date' => $arr[$key]['start_date'],
                    'end_date'   => $arr[$key]['end_date'],
                    'city_id' => $city->id,
                    'triptype_id' =>$trip_types[$key],
                    'transportation_id' => $transports[$key],

                ]);
            }
        }

      }

}
