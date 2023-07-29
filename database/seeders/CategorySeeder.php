<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'  => "Category one",
            'status' => true
        ]);

        Category::create([
            'name'  => "Category two",
            'status' => true
        ]);

        Category::create([
            'name'  => "Category three",
            'status' => true
        ]);

        Category::create([
            'name'  => "Category four",
            'status' => true
        ]);
    }
}
