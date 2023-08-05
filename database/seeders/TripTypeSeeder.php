<?php

namespace Database\Seeders;

use App\Models\TripType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $arr = [
            [
                'triptype_name' => 'College trip',
                'triptype_status' =>"pending",
            ],
            [
                'triptype_name' => 'Entertainment trip',
                'triptype_status' =>"Done",
            ],
            [
                'triptype_name' => 'Eid trip',
                'triptype_status' =>"Continue",
            ],
            [
                'triptype_name' => 'Summar trip',
                'triptype_status' =>"Done",
            ]
        ];
        foreach($arr as $row){
            TripType::create($row);
        }
    }
}
