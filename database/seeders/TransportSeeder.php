<?php

namespace Database\Seeders;

use App\Models\Transport;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                'transport_name' => 'BUS 1',
                'transport_model' => '2023',
                'no_seats' => '30',
            ],

            [
                'transport_name' => 'BUS 2',
                'transport_model' => '2023',
                'no_seats' => '30',
            ],

            [
                'transport_name' => 'BUS 3',
                'transport_model' => '2023',
                'no_seats' => '30',
            ],
            [
                'transport_name' => 'BUS 4',
                'transport_model' => '2023',
                'no_seats' => '30',
            ],


        ];
        foreach($arr as $row){
            Transport::insert($row);
        }
    }
}
