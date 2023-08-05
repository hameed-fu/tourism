<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                'user_name' => 'Ali',
                'user_email'=> 'ali@gmail.com',
                'user_img' =>'ali.jpg',
                'user_password'=>'ali123',
                'user_address'=>'Shankar',
            ],
            [
                'user_name' => 'Hammad',
                'user_email'=> 'hammad@gmail.com',
                'user_img' =>'hammad.jpg',
                'user_password'=>'hammad123',
                'user_address'=>'ghulamo',
            ],
            [
                'user_name' => 'Saud',
                'user_email'=> 'Saud@gmail.com',
                'user_img' =>'Saud.jpg',
                'user_password'=>'Saud123',
                'user_address'=>'poree Neer',
            ],
            [
                'user_name' => 'Shakeel',
                'user_email'=> 'Shakeel@gmail.com',
                'user_img' =>'Shakeel.jpg',
                'user_password'=>'Shakeel123',
                'user_address'=>'Moqam',
            ]
        ];
        foreach($arr as $row){
            User::create($row);
        }
        
    }
}
