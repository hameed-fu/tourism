<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                'name' => 'admin',
                'email'=> 'admin@gmail.com',
                'user_img' =>'ali.jpg',
                'password'=> Hash::make('12345678'),
                'user_address'=>'Shankar',
                'user_role'=>'admin',
            ],
            [
                'name' => 'Hammad',
                'email'=> 'hammad@gmail.com',
                'user_img' =>'hammad.jpg',
                'password'=>'hammad123',
                'user_address'=>'ghulamo',
            ],
            [
                'name' => 'Saud',
                'email'=> 'Saud@gmail.com',
                'user_img' =>'Saud.jpg',
                'password'=>'Saud123',
                'user_address'=>'poree Neer',
            ],
            [
                'name' => 'Shakeel',
                'email'=> 'Shakeel@gmail.com',
                'user_img' =>'Shakeel.jpg',
                'password'=>'Shakeel123',
                'user_address'=>'Moqam',
            ]
        ];
        foreach($arr as $row){
            User::create($row);
        }

    }
}
