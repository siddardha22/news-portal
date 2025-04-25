<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sub_categories = [
            [
                "name"=> "Html 1",
                'category_id' => 1,
            ],
            [
                "name"=> "Css 2",
                'category_id' => 2,
            ],
            [
                "name"=> "Js 3",
                'category_id' => 3,
            ],
            [
                "name"=> "Json 4",
                'category_id' => 4,
            ],
            [
                "name"=> "Php 5",
                'category_id' => 5,
            ],
            [
                "name"=> "Laravel 6",
                'category_id' => 6,
            ],
        ];
        foreach ($sub_categories as $category) {
            SubCategory::updateOrCreate($category);
        }
    }
}
